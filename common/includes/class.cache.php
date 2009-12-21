<?php
//! Page caching class

//! Contains methods to create and retrieve a complete cache of the current page.
class cache
{
//! Check the server load using /proc/loadavg.
	function checkLoad()
	{
		if (PHP_OS != 'Linux')
		{
			return false;
		}

		$load = @file_get_contents('/proc/loadavg');
		if (false === $load)
		{
			return false;
		}
		$array = explode(' ', $load);
		if ((float)$array[0] > (float)config::get('reinforced_threshold'))
		{
		// put killboard into RF
			config::set('is_reinforced', 1);
		}
		elseif ((float)$array[0] > (float)config::get('reinforced_disable_threshold') && config::get('is_reinforced'))
		{
		// do nothing, we are in RF, load is dropping but stil over disabling threshold
		}
		else
		{
		// load low, dont enter reinforced
			config::set('is_reinforced', 0);
		}
	}
	//! Check if the current page should be cached.
	function shouldCache($page = '')
	{
	// never cache for admins
		if (session::isAdmin())
		{
			return false;
		}
		// Don't cache the image files.
		if (strpos($_SERVER['REQUEST_URI'],'thumb') ||
			strpos($_SERVER['REQUEST_URI'],'mapview')) return false;
		if (config::get('auto_reinforced') && config::get('is_reinforced') && count($_POST) == 0)
		{
			return true;
		}

		$cacheignore = explode(',', config::get('cache_ignore'));
		if (config::get('cache_enabled') && count($_POST) == 0 && !($page != '' && in_array($page, $cacheignore)))
		{
			return true;
		}
		return false;
	}
	//! Check if the current page is cached and valid then send it if so.
	function check($page)
	{
		$cachefile = cache::genCacheName();
		// If the cache doesn't exist then we don't need to check times.
		if (cache::shouldCache($page) && file_exists(cache::genCacheName()))
		{
			$times = explode(',', config::get('cache_times'));
			foreach ($times as $string)
			{
				$array = explode(':', $string);
				$cachetimes[$array[0]] = $array[1];
			}

			if ($cachetimes[$page])
			{
				$cachetime = $cachetimes[$page];
			}
			else
			{
				$cachetime = config::get('cache_time');
			}

			$cachetime = config::get('cache_time');
			$cachetime = $cachetime * 60;

			if (config::get('is_reinforced'))
			{
				global $smarty;
				$smarty->assign('message', 'Note: This killboard has entered reinforced operation mode.');
				// cache is extended in reinforced mode
				$cachetime = $cachetime * 20;
			}
			if(file_exists($cachefile)) $timestamp = @filemtime($cachefile);
			else $timestamp = 0;

			if(config::get('cache_update') == '*')
				if(file_exists(KB_PAGECACHEDIR.'/killadded.mk'))
					if($timestamp < @filemtime(KB_PAGECACHEDIR.'/killadded.mk'))
						$timestamp = 0;
					else
					{
						$cacheupdate = explode(',', config::get('cache_update'));
						if (($page != '' && in_array($page, $cacheupdate)))
							if(file_exists(KB_PAGECACHEDIR.'/killadded.mk'))
								if($timestamp < @filemtime(KB_PAGECACHEDIR.'/killadded.mk'))
									$timestamp = 0;
					}
			if (time() - $cachetime < $timestamp)
			{
				// Alternatively, use a hash of the file. More cpu for a little
				// less bandwidth. Possibly more useful if we keep an index.
				// filename, age, hash. Age would be used for cache clearing.
				$etag=md5($cachefile.$timestamp);
				header("Last-Modified: ".gmdate("D, d M Y H:i:s", $timestamp)." GMT");
				//Breaks comment posting. Page is not reloaded until expiry time
				//thus missing comments posted by others.
				//header('Expires: ' . gmdate('D, d M Y H:i:s', $timestamp + $cachetime) . ' GMT');
				header("Etag: ".$etag);
				header("Cache-Control:");
				header('Pragma:');

				// There was a reason for having both checks. etag not always
				// checked maybe?
				if (trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag ||
					@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $timestamp)
				{
					header("HTTP/1.1 304 Not Modified");
					exit;
				}

				if(!ini_get('zlib.output_compression')) ob_start("ob_gzhandler");
				else ob_start();
				@readgzfile($cachefile);
				ob_end_flush();
				exit();
			}
			if(!ini_get('zlib.output_compression')) ob_start("ob_gzhandler");
			else ob_start();
		}
		else if(!ini_get('zlib.output_compression')) ob_start("ob_gzhandler");
		header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
		if (strpos($_SERVER['REQUEST_URI'],'thumb') ||
			strpos($_SERVER['REQUEST_URI'],'mapview'))
				header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 7776000) . ' GMT');
		header("Etag: ".md5($cachefile.time()));
		header("Cache-Control:");
		header('Pragma:');
	}
	//! Generate the cache for the current page.
	function generate()
	{
		if (cache::shouldCache())
		{
			$cachefile = cache::genCacheName();

			// Create directories if needed.
			if (!file_exists(KB_PAGECACHEDIR.'/'.KB_SITE))
			{
				mkdir(KB_PAGECACHEDIR.'/'.KB_SITE);
			}
			if (!file_exists(KB_PAGECACHEDIR.'/'.KB_SITE.'/'.cache::genCacheName(true)))
			{
				mkdir(KB_PAGECACHEDIR.'/'.KB_SITE.'/'.cache::genCacheName(true));
			}
			// Use the minimum compression. The difference is minor in our usage.
            $fp = @gzopen($cachefile, 'wb1');

            @gzwrite($fp, preg_replace('/profile -->.*<!-- \/profile/','profile -->Cached '.gmdate("d M Y H:i:s").'<!-- /profile',ob_get_contents()));
            @gzclose($fp);
			ob_end_flush();
		}
	}
	//! Generate the cache filename.

	/*!
	 * Security modification could change this function to generate access
	 * level specific cache files.
	 *
	 *  \return string of path and filename for the current page's cachefile.
	 */
	function genCacheName($subdir = false)
	{
		$filename = md5($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].IS_IGB).'.cache';
		if($subdir) return substr($filename,0,1);
		else return KB_PAGECACHEDIR.'/'.KB_SITE.'/'.substr($filename,0,1).'/'.$filename;
	}
	//! Remove the cache of the current page.
	function deleteCache()
	{
		$cachefile = cache::genCacheName();
		@unlink($cachefile);
	}
	//! Mark the cached page as still current without rebuilding it.
	function touchCache()
	{
		if(! config::get('cache_enabled') ) return;
		if (!file_exists(KB_PAGECACHEDIR.'/'.KB_SITE))
			mkdir(KB_PAGECACHEDIR.'/'.KB_SITE);
		touch(cache::genCacheName());
	}
	//! Notify the cache that a kill has been added.
	function notifyKillAdded()
	{
		if(! config::get('cache_enabled') ) return;
		if (!file_exists(KB_PAGECACHEDIR))
			mkdir(KB_PAGECACHEDIR);
		touch(KB_PAGECACHEDIR.'/killadded.mk');
	}
}
