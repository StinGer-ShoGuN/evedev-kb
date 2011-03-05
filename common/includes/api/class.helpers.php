<?php
/*
 * $Date: 2010-05-30 19:38:00 +1000 (Sun, 30 May 2010) $
 * $Revision: 732 $
 * $HeadURL: https://evedev-kb.googlecode.com/svn/trunk/common/includes/class.eveapi.php $
 */
define ("APIVERSION", "V3.3");

// **********************************************************************************************************************************************
// **********************************************************************************************************************************************
// ****************                         					  GENERIC public static functionS                					             ****************
// **********************************************************************************************************************************************
// **********************************************************************************************************************************************
class API_Helpers
{
	// **********************************************************************************************************************************************
	// ****************                         					   Load Generic XML               					             ****************
	// **********************************************************************************************************************************************

	// loads a generic XML sheet that requires no API Login as such
	public static function LoadGlobalData($path)
	{
		$temppath = substr($path, 0, strlen($path) - 9);
		$configvalue = "API" . str_replace("/", "_", $temppath);

		$CachedTime = ApiCache::get($configvalue);
		$UseCaching = config::get('API_UseCache');

		// API Caching system, If we're still under cachetime reuse the last XML, if not download the new one. Helps with Bug hunting and just better all round.
		if ($CachedTime == "")
		{
			$CachedTime = "2005-01-01 00:00:00"; // fake date to ensure that it runs first time.
		}

		if (is_file(KB_CACHEDIR.'/api/'.$configvalue.'.xml'))
			$cacheexists = true;
		else
			$cacheexists = false;

		if ((strtotime(gmdate("M d Y H:i:s")) - strtotime($CachedTime) > 0) || ($UseCaching == 1)  || !$cacheexists )// if API_UseCache = 1 (off) then don't use cache
		{
			$url = "https://".API_SERVER.$path;

			$http = new http_request($url);
			$http->set_useragent("PHPApi EDK".KB_VERSION);

			$contents = $http->get_content();

			// Save the file if we're caching (0 = true in Thunks world)
			if ( $UseCaching == 0 )
				file_put_contents(KB_CACHEDIR.'/api/'.$configvalue.'.xml', $contents);
		}
		else
		{
			// re-use cached XML
			if ($contents = file_get_contents(KB_CACHEDIR.'/api/'.$configvalue.'.xml')) {
			} else {
				return "<i>error loading cached file ".$configvalue.".xml</i><br><br>";
			}
		}
		return $contents;
	}

	// **********************************************************************************************************************************************
	// ****************                         					Convert ID -> Name               					             ****************
	// **********************************************************************************************************************************************
	public static function gettypeIDname($id, $update = false)
	{
		$id = intval($id);
		$sql = 'select inv.typeName from kb3_invtypes inv where inv.typeID = ' . $id;

		$qry = DBFactory::getDBQuery();
		$qry->execute($sql);
		if($qry->recordCount())
		{
			$row = $qry->getRow();

			return $row['typeName'];
		}
		else
		{
			$info = new API_IDtoName();
			$info->setIDs($id);
			$result = $info->fetchXML();
			if($result == "")
			{
				$data = $info->getIDData();
				if($update && $data[0]['characterID'] > 0 && $data[0]['name'])
				{
					$sql = "INSERT INTO kb3_invtypes (typeID, typeName, description) values($id, '".$qry->escape($data[0]['name'])."', '')";
					$qry->execute($sql);
				}
				return $data[0]['name'];
			}
			return null;
		}
	}

	// **********************************************************************************************************************************************
	// ****************                         					Get GroupID from ID               					             ****************
	// **********************************************************************************************************************************************
	public static function getgroupID($id)
	{
		$sql = 'select inv.groupID from kb3_invtypes inv where inv.typeID = ' . $id;

		$qry = DBFactory::getDBQuery();
		$qry->execute($sql);
		$row = $qry->getRow();

		return $row['groupID'];
	}

	// **********************************************************************************************************************************************
	// ****************                         			    Convert groupID -> groupName           					             ****************
	// **********************************************************************************************************************************************
	public static function getgroupIDname($id)
	{
		$sql = 'select itt.itt_name from kb3_item_types itt where itt.itt_id = ' . $id;

		$qry = DBFactory::getDBQuery();
		$qry->execute($sql);
		$row = $qry->getRow();

		return $row['itt_name'];
	}

	// **********************************************************************************************************************************************
	// ****************                         					Get Skill Rank from ID                				             ****************
	// **********************************************************************************************************************************************
	public static function gettypeIDrank($id)
	{
		$sql = 'select att.value from kb3_dgmtypeattributes att where att.typeID = ' . $id . ' and att.attributeID = 275';

		$qry = DBFactory::getDBQuery();
		$qry->execute($sql);
		$row = $qry->getRow();

		return $row['value'];
	}

	// **********************************************************************************************************************************************
	// ****************                         			    Convert MoonID -> MoonName           					             ****************
	// **********************************************************************************************************************************************
	public static function getMoonName($id)
	{
		if ($id != 0)
		{
			$qry = DBFactory::getDBQuery();
			$sql = "SHOW TABLES LIKE 'kb3_moons'";
			$qry->execute($sql);
			if(!$qry->recordCount()) return false;

			$sql = 'select moon.itemID, moon.itemName from kb3_moons moon where moon.itemID = '.$id;

			$qry->execute($sql);
			$row = $qry->getRow();

			return $row['itemName'];
		}
		else {
			return false;
		}
	}

	// **********************************************************************************************************************************************
	// ****************                         			    		Find Thunky          		 					             ****************
	// **********************************************************************************************************************************************
	public static function FindThunk()
	{ // round about now would probably be a good time for apologising about my sense of humour :oD
		$sql = 'select plts.plt_id, plts.plt_externalid from kb3_pilots plts where plts.plt_name = "Captain Thunk"';

		$qry = DBFactory::getDBQuery();
		$qry->execute($sql);
		$row = $qry->getRow();

		$pilot_id = $row['plt_id'];
		$pilot_charid = $row['plt_externalid'];

		if ( $pilot_id != 0 )	{
			return '<a href="?a=pilot_detail&amp;plt_id=' . $pilot_id . '" ><font size="2">Captain Thunk</font></a>';
		} else {
			return "Captain Thunk";
		}
	}

	// **********************************************************************************************************************************************
	// ****************                         			         Update  CCP CorpID              					             ****************
	// **********************************************************************************************************************************************
	public static function Update_CorpID($corpName, $corpID)
	{
		if ( (strlen($corpName) != 0) && ($corpID != 0) )
		{
			$qry = DBFactory::getDBQuery();
			$qry->execute( "SELECT * FROM `kb3_corps` WHERE `crp_name` = '" . slashfix($corpName) . "'");

			if ($qry->recordCount() != 0)
			{
				$row = $qry->getRow();
				if ($row['crp_external_id'] == NULL)
				{
					$qry->execute("update kb3_corps set crp_external_id = " . $corpID . " where `crp_id` = " . $row['crp_id']);
				}
			}
		}
	}

	// **********************************************************************************************************************************************
	// ****************                         			        Update CCP AllianceID            					             ****************
	// **********************************************************************************************************************************************
	public static function Update_AllianceID($allianceName, $allianceID)
	{
		if ( ($allianceName != "NONE") && ($allianceID != 0) )
		{
			$qry = DBFactory::getDBQuery();
			$qry->execute( "SELECT * FROM `kb3_alliances` WHERE `all_name` = '" . slashfix($allianceName) . "'");

			if ($qry->recordCount() != 0)
			{
				$row = $qry->getRow();
				if ($row['all_external_id'] == NULL)
				{
					$qry->execute("update kb3_alliances set all_external_id = " . $allianceID . " where `all_id` = " . $row['all_id']);
				}
			}
		}
	}

	// **********************************************************************************************************************************************
	// ****************                         		Convert GMT Timestamp to local time            					             ****************
	// **********************************************************************************************************************************************
	public static function ConvertTimestamp($timeStampGMT)
	{
		if (!config::get('API_ConvertTimestamp'))
		{
			// set gmt offset
			$gmoffset = (strtotime(date("M d Y H:i:s")) - strtotime(gmdate("M d Y H:i:s")));
			//if (!config::get('API_ForceDST'))
				//$gmoffset = $gmoffset + 3600;

			$cachetime = date("Y-m-d H:i:s",  strtotime($timeStampGMT) + $gmoffset);
		} else {
			$cachetime = $timeStampGMT;
		}

		return $cachetime;
	}
}