<?php
/**
 * GetCorporationsCorporationIdMembertracking200Ok
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
 * GetCorporationsCorporationIdMembertracking200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdMembertracking200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_membertracking_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'character_id' => 'int',
        'start_date' => '\DateTime',
        'base_id' => 'int',
        'logon_date' => '\DateTime',
        'logoff_date' => '\DateTime',
        'location_id' => 'int',
        'ship_type_id' => 'int'
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
        'character_id' => 'character_id',
        'start_date' => 'start_date',
        'base_id' => 'base_id',
        'logon_date' => 'logon_date',
        'logoff_date' => 'logoff_date',
        'location_id' => 'location_id',
        'ship_type_id' => 'ship_type_id'
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
        'character_id' => 'setCharacterId',
        'start_date' => 'setStartDate',
        'base_id' => 'setBaseId',
        'logon_date' => 'setLogonDate',
        'logoff_date' => 'setLogoffDate',
        'location_id' => 'setLocationId',
        'ship_type_id' => 'setShipTypeId'
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
        'character_id' => 'getCharacterId',
        'start_date' => 'getStartDate',
        'base_id' => 'getBaseId',
        'logon_date' => 'getLogonDate',
        'logoff_date' => 'getLogoffDate',
        'location_id' => 'getLocationId',
        'ship_type_id' => 'getShipTypeId'
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
        $this->container['character_id'] = isset($data['character_id']) ? $data['character_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['base_id'] = isset($data['base_id']) ? $data['base_id'] : null;
        $this->container['logon_date'] = isset($data['logon_date']) ? $data['logon_date'] : null;
        $this->container['logoff_date'] = isset($data['logoff_date']) ? $data['logoff_date'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['ship_type_id'] = isset($data['ship_type_id']) ? $data['ship_type_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['character_id'] === null) {
            $invalid_properties[] = "'character_id' can't be null";
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
        if ($this->container['character_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets character_id
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     * @param int $character_id character_id integer
     * @return $this
     */
    public function setCharacterId($character_id)
    {
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date start_date string
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets base_id
     * @return int
     */
    public function getBaseId()
    {
        return $this->container['base_id'];
    }

    /**
     * Sets base_id
     * @param int $base_id base_id integer
     * @return $this
     */
    public function setBaseId($base_id)
    {
        $this->container['base_id'] = $base_id;

        return $this;
    }

    /**
     * Gets logon_date
     * @return \DateTime
     */
    public function getLogonDate()
    {
        return $this->container['logon_date'];
    }

    /**
     * Sets logon_date
     * @param \DateTime $logon_date logon_date string
     * @return $this
     */
    public function setLogonDate($logon_date)
    {
        $this->container['logon_date'] = $logon_date;

        return $this;
    }

    /**
     * Gets logoff_date
     * @return \DateTime
     */
    public function getLogoffDate()
    {
        return $this->container['logoff_date'];
    }

    /**
     * Sets logoff_date
     * @param \DateTime $logoff_date logoff_date string
     * @return $this
     */
    public function setLogoffDate($logoff_date)
    {
        $this->container['logoff_date'] = $logoff_date;

        return $this;
    }

    /**
     * Gets location_id
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param int $location_id location_id integer
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets ship_type_id
     * @return int
     */
    public function getShipTypeId()
    {
        return $this->container['ship_type_id'];
    }

    /**
     * Sets ship_type_id
     * @param int $ship_type_id ship_type_id integer
     * @return $this
     */
    public function setShipTypeId($ship_type_id)
    {
        $this->container['ship_type_id'] = $ship_type_id;

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


