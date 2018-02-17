<?php
/**
 * GetCharactersCharacterIdPlanetsPlanetIdOkPins
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
 * GetCharactersCharacterIdPlanetsPlanetIdOkPins Class Doc Comment
 *
 * @category    Class */
 // @description pin object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdPlanetsPlanetIdOkPins implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_planets_planet_id_ok_pins';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'latitude' => 'float',
        'longitude' => 'float',
        'pin_id' => 'int',
        'type_id' => 'int',
        'schematic_id' => 'int',
        'extractor_details' => '\Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOkExtractorDetails',
        'factory_details' => '\Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOkFactoryDetails',
        'contents' => '\Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOkContents[]',
        'install_time' => '\DateTime',
        'expiry_time' => '\DateTime',
        'last_cycle_start' => '\DateTime'
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
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'pin_id' => 'pin_id',
        'type_id' => 'type_id',
        'schematic_id' => 'schematic_id',
        'extractor_details' => 'extractor_details',
        'factory_details' => 'factory_details',
        'contents' => 'contents',
        'install_time' => 'install_time',
        'expiry_time' => 'expiry_time',
        'last_cycle_start' => 'last_cycle_start'
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
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'pin_id' => 'setPinId',
        'type_id' => 'setTypeId',
        'schematic_id' => 'setSchematicId',
        'extractor_details' => 'setExtractorDetails',
        'factory_details' => 'setFactoryDetails',
        'contents' => 'setContents',
        'install_time' => 'setInstallTime',
        'expiry_time' => 'setExpiryTime',
        'last_cycle_start' => 'setLastCycleStart'
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
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'pin_id' => 'getPinId',
        'type_id' => 'getTypeId',
        'schematic_id' => 'getSchematicId',
        'extractor_details' => 'getExtractorDetails',
        'factory_details' => 'getFactoryDetails',
        'contents' => 'getContents',
        'install_time' => 'getInstallTime',
        'expiry_time' => 'getExpiryTime',
        'last_cycle_start' => 'getLastCycleStart'
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
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['pin_id'] = isset($data['pin_id']) ? $data['pin_id'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['schematic_id'] = isset($data['schematic_id']) ? $data['schematic_id'] : null;
        $this->container['extractor_details'] = isset($data['extractor_details']) ? $data['extractor_details'] : null;
        $this->container['factory_details'] = isset($data['factory_details']) ? $data['factory_details'] : null;
        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['install_time'] = isset($data['install_time']) ? $data['install_time'] : null;
        $this->container['expiry_time'] = isset($data['expiry_time']) ? $data['expiry_time'] : null;
        $this->container['last_cycle_start'] = isset($data['last_cycle_start']) ? $data['last_cycle_start'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['latitude'] === null) {
            $invalid_properties[] = "'latitude' can't be null";
        }
        if ($this->container['longitude'] === null) {
            $invalid_properties[] = "'longitude' can't be null";
        }
        if ($this->container['pin_id'] === null) {
            $invalid_properties[] = "'pin_id' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalid_properties[] = "'type_id' can't be null";
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
        if ($this->container['latitude'] === null) {
            return false;
        }
        if ($this->container['longitude'] === null) {
            return false;
        }
        if ($this->container['pin_id'] === null) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets latitude
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     * @param float $latitude latitude number
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     * @param float $longitude longitude number
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets pin_id
     * @return int
     */
    public function getPinId()
    {
        return $this->container['pin_id'];
    }

    /**
     * Sets pin_id
     * @param int $pin_id pin_id integer
     * @return $this
     */
    public function setPinId($pin_id)
    {
        $this->container['pin_id'] = $pin_id;

        return $this;
    }

    /**
     * Gets type_id
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     * @param int $type_id type_id integer
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets schematic_id
     * @return int
     */
    public function getSchematicId()
    {
        return $this->container['schematic_id'];
    }

    /**
     * Sets schematic_id
     * @param int $schematic_id schematic_id integer
     * @return $this
     */
    public function setSchematicId($schematic_id)
    {
        $this->container['schematic_id'] = $schematic_id;

        return $this;
    }

    /**
     * Gets extractor_details
     * @return \Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOkExtractorDetails
     */
    public function getExtractorDetails()
    {
        return $this->container['extractor_details'];
    }

    /**
     * Sets extractor_details
     * @param \Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOkExtractorDetails $extractor_details
     * @return $this
     */
    public function setExtractorDetails($extractor_details)
    {
        $this->container['extractor_details'] = $extractor_details;

        return $this;
    }

    /**
     * Gets factory_details
     * @return \Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOkFactoryDetails
     */
    public function getFactoryDetails()
    {
        return $this->container['factory_details'];
    }

    /**
     * Sets factory_details
     * @param \Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOkFactoryDetails $factory_details
     * @return $this
     */
    public function setFactoryDetails($factory_details)
    {
        $this->container['factory_details'] = $factory_details;

        return $this;
    }

    /**
     * Gets contents
     * @return \Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOkContents[]
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     * @param \Swagger\Client\Model\GetCharactersCharacterIdPlanetsPlanetIdOkContents[] $contents contents array
     * @return $this
     */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;

        return $this;
    }

    /**
     * Gets install_time
     * @return \DateTime
     */
    public function getInstallTime()
    {
        return $this->container['install_time'];
    }

    /**
     * Sets install_time
     * @param \DateTime $install_time install_time string
     * @return $this
     */
    public function setInstallTime($install_time)
    {
        $this->container['install_time'] = $install_time;

        return $this;
    }

    /**
     * Gets expiry_time
     * @return \DateTime
     */
    public function getExpiryTime()
    {
        return $this->container['expiry_time'];
    }

    /**
     * Sets expiry_time
     * @param \DateTime $expiry_time expiry_time string
     * @return $this
     */
    public function setExpiryTime($expiry_time)
    {
        $this->container['expiry_time'] = $expiry_time;

        return $this;
    }

    /**
     * Gets last_cycle_start
     * @return \DateTime
     */
    public function getLastCycleStart()
    {
        return $this->container['last_cycle_start'];
    }

    /**
     * Sets last_cycle_start
     * @param \DateTime $last_cycle_start last_cycle_start string
     * @return $this
     */
    public function setLastCycleStart($last_cycle_start)
    {
        $this->container['last_cycle_start'] = $last_cycle_start;

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


