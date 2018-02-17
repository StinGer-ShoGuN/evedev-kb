<?php
/**
 * GetStatusOk
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.7.5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetStatusOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetStatusOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_status_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'start_time' => '\DateTime',
        'players' => 'int',
        'server_version' => 'string',
        'vip' => 'bool'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'start_time' => 'start_time',
        'players' => 'players',
        'server_version' => 'server_version',
        'vip' => 'vip'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'start_time' => 'setStartTime',
        'players' => 'setPlayers',
        'server_version' => 'setServerVersion',
        'vip' => 'setVip'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'start_time' => 'getStartTime',
        'players' => 'getPlayers',
        'server_version' => 'getServerVersion',
        'vip' => 'getVip'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['players'] = isset($data['players']) ? $data['players'] : null;
        $this->container['server_version'] = isset($data['server_version']) ? $data['server_version'] : null;
        $this->container['vip'] = isset($data['vip']) ? $data['vip'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['start_time'] === null) {
            $invalid_properties[] = "'start_time' can't be null";
        }
        if ($this->container['players'] === null) {
            $invalid_properties[] = "'players' can't be null";
        }
        if ($this->container['server_version'] === null) {
            $invalid_properties[] = "'server_version' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['start_time'] === null) {
            return false;
        }
        if ($this->container['players'] === null) {
            return false;
        }
        if ($this->container['server_version'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets start_time
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     * @param \DateTime $start_time Server start timestamp
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets players
     * @return int
     */
    public function getPlayers()
    {
        return $this->container['players'];
    }

    /**
     * Sets players
     * @param int $players Current online player count
     * @return $this
     */
    public function setPlayers($players)
    {
        $this->container['players'] = $players;

        return $this;
    }

    /**
     * Gets server_version
     * @return string
     */
    public function getServerVersion()
    {
        return $this->container['server_version'];
    }

    /**
     * Sets server_version
     * @param string $server_version Running version as string
     * @return $this
     */
    public function setServerVersion($server_version)
    {
        $this->container['server_version'] = $server_version;

        return $this;
    }

    /**
     * Gets vip
     * @return bool
     */
    public function getVip()
    {
        return $this->container['vip'];
    }

    /**
     * Sets vip
     * @param bool $vip If the server is in VIP mode
     * @return $this
     */
    public function setVip($vip)
    {
        $this->container['vip'] = $vip;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


