<?php
/**
 * V1characterscharacterIdmailRecipients1
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
 * V1characterscharacterIdmailRecipients1 Class Doc Comment
 *
 * @category    Class */
 // @description recipient object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V1characterscharacterIdmailRecipients1 implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v1characterscharacter_idmail_recipients_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'recipient_type' => 'string',
        'recipient_id' => 'int'
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
        'recipient_type' => 'recipient_type',
        'recipient_id' => 'recipient_id'
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
        'recipient_type' => 'setRecipientType',
        'recipient_id' => 'setRecipientId'
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
        'recipient_type' => 'getRecipientType',
        'recipient_id' => 'getRecipientId'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const RECIPIENT_TYPE_ALLIANCE = 'alliance';
    const RECIPIENT_TYPE_CHARACTER = 'character';
    const RECIPIENT_TYPE_CORPORATION = 'corporation';
    const RECIPIENT_TYPE_MAILING_LIST = 'mailing_list';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRecipientTypeAllowableValues()
    {
        return [
            self::RECIPIENT_TYPE_ALLIANCE,
            self::RECIPIENT_TYPE_CHARACTER,
            self::RECIPIENT_TYPE_CORPORATION,
            self::RECIPIENT_TYPE_MAILING_LIST,
        ];
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
        $this->container['recipient_type'] = isset($data['recipient_type']) ? $data['recipient_type'] : null;
        $this->container['recipient_id'] = isset($data['recipient_id']) ? $data['recipient_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['recipient_type'] === null) {
            $invalid_properties[] = "'recipient_type' can't be null";
        }
        $allowed_values = array("alliance", "character", "corporation", "mailing_list");
        if (!in_array($this->container['recipient_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'recipient_type', must be one of #{allowed_values}.";
        }

        if ($this->container['recipient_id'] === null) {
            $invalid_properties[] = "'recipient_id' can't be null";
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
        if ($this->container['recipient_type'] === null) {
            return false;
        }
        $allowed_values = array("alliance", "character", "corporation", "mailing_list");
        if (!in_array($this->container['recipient_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['recipient_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets recipient_type
     * @return string
     */
    public function getRecipientType()
    {
        return $this->container['recipient_type'];
    }

    /**
     * Sets recipient_type
     * @param string $recipient_type recipient_type string
     * @return $this
     */
    public function setRecipientType($recipient_type)
    {
        $allowed_values = array('alliance', 'character', 'corporation', 'mailing_list');
        if (!in_array($recipient_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'recipient_type', must be one of 'alliance', 'character', 'corporation', 'mailing_list'");
        }
        $this->container['recipient_type'] = $recipient_type;

        return $this;
    }

    /**
     * Gets recipient_id
     * @return int
     */
    public function getRecipientId()
    {
        return $this->container['recipient_id'];
    }

    /**
     * Sets recipient_id
     * @param int $recipient_id recipient_id integer
     * @return $this
     */
    public function setRecipientId($recipient_id)
    {
        $this->container['recipient_id'] = $recipient_id;

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


