<?php
/**
 * PostCharactersCharacterIdMailLabelsLabel
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
 * OpenAPI spec version: 0.8.9
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
 * PostCharactersCharacterIdMailLabelsLabel Class Doc Comment
 *
 * @category    Class */
 // @description label object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PostCharactersCharacterIdMailLabelsLabel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'post_characters_character_id_mail_labels_label';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'color' => 'string',
        'name' => 'string'
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
        'color' => 'color',
        'name' => 'name'
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
        'color' => 'setColor',
        'name' => 'setName'
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
        'color' => 'getColor',
        'name' => 'getName'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const COLOR__0000FE = '#0000fe';
    const COLOR__006634 = '#006634';
    const COLOR__0099FF = '#0099ff';
    const COLOR__00FF33 = '#00ff33';
    const COLOR__01FFFF = '#01ffff';
    const COLOR__349800 = '#349800';
    const COLOR__660066 = '#660066';
    const COLOR__666666 = '#666666';
    const COLOR__999999 = '#999999';
    const COLOR__99FFFF = '#99ffff';
    const COLOR__9A0000 = '#9a0000';
    const COLOR_CCFF9A = '#ccff9a';
    const COLOR_E6E6E6 = '#e6e6e6';
    const COLOR_FE0000 = '#fe0000';
    const COLOR_FF6600 = '#ff6600';
    const COLOR_FFFF01 = '#ffff01';
    const COLOR_FFFFCD = '#ffffcd';
    const COLOR_FFFFFF = '#ffffff';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getColorAllowableValues()
    {
        return [
            self::COLOR__0000FE,
            self::COLOR__006634,
            self::COLOR__0099FF,
            self::COLOR__00FF33,
            self::COLOR__01FFFF,
            self::COLOR__349800,
            self::COLOR__660066,
            self::COLOR__666666,
            self::COLOR__999999,
            self::COLOR__99FFFF,
            self::COLOR__9A0000,
            self::COLOR_CCFF9A,
            self::COLOR_E6E6E6,
            self::COLOR_FE0000,
            self::COLOR_FF6600,
            self::COLOR_FFFF01,
            self::COLOR_FFFFCD,
            self::COLOR_FFFFFF,
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
        $this->container['color'] = isset($data['color']) ? $data['color'] : '#ffffff';
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("#0000fe", "#006634", "#0099ff", "#00ff33", "#01ffff", "#349800", "#660066", "#666666", "#999999", "#99ffff", "#9a0000", "#ccff9a", "#e6e6e6", "#fe0000", "#ff6600", "#ffff01", "#ffffcd", "#ffffff");
        if (!in_array($this->container['color'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'color', must be one of #{allowed_values}.";
        }

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ((strlen($this->container['name']) > 40)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 40.";
        }

        if ((strlen($this->container['name']) < 1)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
        $allowed_values = array("#0000fe", "#006634", "#0099ff", "#00ff33", "#01ffff", "#349800", "#660066", "#666666", "#999999", "#99ffff", "#9a0000", "#ccff9a", "#e6e6e6", "#fe0000", "#ff6600", "#ffff01", "#ffffcd", "#ffffff");
        if (!in_array($this->container['color'], $allowed_values)) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if (strlen($this->container['name']) > 40) {
            return false;
        }
        if (strlen($this->container['name']) < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     * @param string $color Hexadecimal string representing label color, in RGB format
     * @return $this
     */
    public function setColor($color)
    {
        $allowed_values = array('#0000fe', '#006634', '#0099ff', '#00ff33', '#01ffff', '#349800', '#660066', '#666666', '#999999', '#99ffff', '#9a0000', '#ccff9a', '#e6e6e6', '#fe0000', '#ff6600', '#ffff01', '#ffffcd', '#ffffff');
        if (!in_array($color, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'color', must be one of '#0000fe', '#006634', '#0099ff', '#00ff33', '#01ffff', '#349800', '#660066', '#666666', '#999999', '#99ffff', '#9a0000', '#ccff9a', '#e6e6e6', '#fe0000', '#ff6600', '#ffff01', '#ffffcd', '#ffffff'");
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name name string
     * @return $this
     */
    public function setName($name)
    {
        if (strlen($name) > 40) {
            throw new \InvalidArgumentException('invalid length for $name when calling PostCharactersCharacterIdMailLabelsLabel., must be smaller than or equal to 40.');
        }
        if (strlen($name) < 1) {
            throw new \InvalidArgumentException('invalid length for $name when calling PostCharactersCharacterIdMailLabelsLabel., must be bigger than or equal to 1.');
        }
        $this->container['name'] = $name;

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


