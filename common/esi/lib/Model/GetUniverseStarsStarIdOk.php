<?php
/**
 * GetUniverseStarsStarIdOk
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
 * GetUniverseStarsStarIdOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetUniverseStarsStarIdOk implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_universe_stars_star_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'solar_system_id' => 'int',
        'type_id' => 'int',
        'age' => 'int',
        'luminosity' => 'float',
        'radius' => 'int',
        'spectral_class' => 'string',
        'temperature' => 'int'
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
        'name' => 'name',
        'solar_system_id' => 'solar_system_id',
        'type_id' => 'type_id',
        'age' => 'age',
        'luminosity' => 'luminosity',
        'radius' => 'radius',
        'spectral_class' => 'spectral_class',
        'temperature' => 'temperature'
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
        'name' => 'setName',
        'solar_system_id' => 'setSolarSystemId',
        'type_id' => 'setTypeId',
        'age' => 'setAge',
        'luminosity' => 'setLuminosity',
        'radius' => 'setRadius',
        'spectral_class' => 'setSpectralClass',
        'temperature' => 'setTemperature'
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
        'name' => 'getName',
        'solar_system_id' => 'getSolarSystemId',
        'type_id' => 'getTypeId',
        'age' => 'getAge',
        'luminosity' => 'getLuminosity',
        'radius' => 'getRadius',
        'spectral_class' => 'getSpectralClass',
        'temperature' => 'getTemperature'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const SPECTRAL_CLASS_K2_V = 'K2 V';
    const SPECTRAL_CLASS_K4_V = 'K4 V';
    const SPECTRAL_CLASS_G2_V = 'G2 V';
    const SPECTRAL_CLASS_G8_V = 'G8 V';
    const SPECTRAL_CLASS_M7_V = 'M7 V';
    const SPECTRAL_CLASS_K7_V = 'K7 V';
    const SPECTRAL_CLASS_M2_V = 'M2 V';
    const SPECTRAL_CLASS_K5_V = 'K5 V';
    const SPECTRAL_CLASS_M3_V = 'M3 V';
    const SPECTRAL_CLASS_G0_V = 'G0 V';
    const SPECTRAL_CLASS_G7_V = 'G7 V';
    const SPECTRAL_CLASS_G3_V = 'G3 V';
    const SPECTRAL_CLASS_F9_V = 'F9 V';
    const SPECTRAL_CLASS_G5_V = 'G5 V';
    const SPECTRAL_CLASS_F6_V = 'F6 V';
    const SPECTRAL_CLASS_K8_V = 'K8 V';
    const SPECTRAL_CLASS_K9_V = 'K9 V';
    const SPECTRAL_CLASS_K6_V = 'K6 V';
    const SPECTRAL_CLASS_G9_V = 'G9 V';
    const SPECTRAL_CLASS_G6_V = 'G6 V';
    const SPECTRAL_CLASS_G4_VI = 'G4 VI';
    const SPECTRAL_CLASS_G4_V = 'G4 V';
    const SPECTRAL_CLASS_F8_V = 'F8 V';
    const SPECTRAL_CLASS_F2_V = 'F2 V';
    const SPECTRAL_CLASS_F1_V = 'F1 V';
    const SPECTRAL_CLASS_K3_V = 'K3 V';
    const SPECTRAL_CLASS_F0_VI = 'F0 VI';
    const SPECTRAL_CLASS_G1_VI = 'G1 VI';
    const SPECTRAL_CLASS_G0_VI = 'G0 VI';
    const SPECTRAL_CLASS_K1_V = 'K1 V';
    const SPECTRAL_CLASS_M4_V = 'M4 V';
    const SPECTRAL_CLASS_M1_V = 'M1 V';
    const SPECTRAL_CLASS_M6_V = 'M6 V';
    const SPECTRAL_CLASS_M0_V = 'M0 V';
    const SPECTRAL_CLASS_K2_IV = 'K2 IV';
    const SPECTRAL_CLASS_G2_VI = 'G2 VI';
    const SPECTRAL_CLASS_K0_V = 'K0 V';
    const SPECTRAL_CLASS_K5_IV = 'K5 IV';
    const SPECTRAL_CLASS_F5_VI = 'F5 VI';
    const SPECTRAL_CLASS_G6_VI = 'G6 VI';
    const SPECTRAL_CLASS_F6_VI = 'F6 VI';
    const SPECTRAL_CLASS_F2_IV = 'F2 IV';
    const SPECTRAL_CLASS_G3_VI = 'G3 VI';
    const SPECTRAL_CLASS_M8_V = 'M8 V';
    const SPECTRAL_CLASS_F1_VI = 'F1 VI';
    const SPECTRAL_CLASS_K1_IV = 'K1 IV';
    const SPECTRAL_CLASS_F7_V = 'F7 V';
    const SPECTRAL_CLASS_G5_VI = 'G5 VI';
    const SPECTRAL_CLASS_M5_V = 'M5 V';
    const SPECTRAL_CLASS_G7_VI = 'G7 VI';
    const SPECTRAL_CLASS_F5_V = 'F5 V';
    const SPECTRAL_CLASS_F4_VI = 'F4 VI';
    const SPECTRAL_CLASS_F8_VI = 'F8 VI';
    const SPECTRAL_CLASS_K3_IV = 'K3 IV';
    const SPECTRAL_CLASS_F4_IV = 'F4 IV';
    const SPECTRAL_CLASS_F0_V = 'F0 V';
    const SPECTRAL_CLASS_G7_IV = 'G7 IV';
    const SPECTRAL_CLASS_G8_VI = 'G8 VI';
    const SPECTRAL_CLASS_F2_VI = 'F2 VI';
    const SPECTRAL_CLASS_F4_V = 'F4 V';
    const SPECTRAL_CLASS_F7_VI = 'F7 VI';
    const SPECTRAL_CLASS_F3_V = 'F3 V';
    const SPECTRAL_CLASS_G1_V = 'G1 V';
    const SPECTRAL_CLASS_G9_VI = 'G9 VI';
    const SPECTRAL_CLASS_F3_IV = 'F3 IV';
    const SPECTRAL_CLASS_F9_VI = 'F9 VI';
    const SPECTRAL_CLASS_M9_V = 'M9 V';
    const SPECTRAL_CLASS_K0_IV = 'K0 IV';
    const SPECTRAL_CLASS_F1_IV = 'F1 IV';
    const SPECTRAL_CLASS_G4_IV = 'G4 IV';
    const SPECTRAL_CLASS_F3_VI = 'F3 VI';
    const SPECTRAL_CLASS_K4_IV = 'K4 IV';
    const SPECTRAL_CLASS_G5_IV = 'G5 IV';
    const SPECTRAL_CLASS_G3_IV = 'G3 IV';
    const SPECTRAL_CLASS_G1_IV = 'G1 IV';
    const SPECTRAL_CLASS_K7_IV = 'K7 IV';
    const SPECTRAL_CLASS_G0_IV = 'G0 IV';
    const SPECTRAL_CLASS_K6_IV = 'K6 IV';
    const SPECTRAL_CLASS_K9_IV = 'K9 IV';
    const SPECTRAL_CLASS_G2_IV = 'G2 IV';
    const SPECTRAL_CLASS_F9_IV = 'F9 IV';
    const SPECTRAL_CLASS_F0_IV = 'F0 IV';
    const SPECTRAL_CLASS_K8_IV = 'K8 IV';
    const SPECTRAL_CLASS_G8_IV = 'G8 IV';
    const SPECTRAL_CLASS_F6_IV = 'F6 IV';
    const SPECTRAL_CLASS_F5_IV = 'F5 IV';
    const SPECTRAL_CLASS_A0 = 'A0';
    const SPECTRAL_CLASS_A0_IV = 'A0IV';
    const SPECTRAL_CLASS_A0_IV2 = 'A0IV2';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSpectralClassAllowableValues()
    {
        return [
            self::SPECTRAL_CLASS_K2_V,
            self::SPECTRAL_CLASS_K4_V,
            self::SPECTRAL_CLASS_G2_V,
            self::SPECTRAL_CLASS_G8_V,
            self::SPECTRAL_CLASS_M7_V,
            self::SPECTRAL_CLASS_K7_V,
            self::SPECTRAL_CLASS_M2_V,
            self::SPECTRAL_CLASS_K5_V,
            self::SPECTRAL_CLASS_M3_V,
            self::SPECTRAL_CLASS_G0_V,
            self::SPECTRAL_CLASS_G7_V,
            self::SPECTRAL_CLASS_G3_V,
            self::SPECTRAL_CLASS_F9_V,
            self::SPECTRAL_CLASS_G5_V,
            self::SPECTRAL_CLASS_F6_V,
            self::SPECTRAL_CLASS_K8_V,
            self::SPECTRAL_CLASS_K9_V,
            self::SPECTRAL_CLASS_K6_V,
            self::SPECTRAL_CLASS_G9_V,
            self::SPECTRAL_CLASS_G6_V,
            self::SPECTRAL_CLASS_G4_VI,
            self::SPECTRAL_CLASS_G4_V,
            self::SPECTRAL_CLASS_F8_V,
            self::SPECTRAL_CLASS_F2_V,
            self::SPECTRAL_CLASS_F1_V,
            self::SPECTRAL_CLASS_K3_V,
            self::SPECTRAL_CLASS_F0_VI,
            self::SPECTRAL_CLASS_G1_VI,
            self::SPECTRAL_CLASS_G0_VI,
            self::SPECTRAL_CLASS_K1_V,
            self::SPECTRAL_CLASS_M4_V,
            self::SPECTRAL_CLASS_M1_V,
            self::SPECTRAL_CLASS_M6_V,
            self::SPECTRAL_CLASS_M0_V,
            self::SPECTRAL_CLASS_K2_IV,
            self::SPECTRAL_CLASS_G2_VI,
            self::SPECTRAL_CLASS_K0_V,
            self::SPECTRAL_CLASS_K5_IV,
            self::SPECTRAL_CLASS_F5_VI,
            self::SPECTRAL_CLASS_G6_VI,
            self::SPECTRAL_CLASS_F6_VI,
            self::SPECTRAL_CLASS_F2_IV,
            self::SPECTRAL_CLASS_G3_VI,
            self::SPECTRAL_CLASS_M8_V,
            self::SPECTRAL_CLASS_F1_VI,
            self::SPECTRAL_CLASS_K1_IV,
            self::SPECTRAL_CLASS_F7_V,
            self::SPECTRAL_CLASS_G5_VI,
            self::SPECTRAL_CLASS_M5_V,
            self::SPECTRAL_CLASS_G7_VI,
            self::SPECTRAL_CLASS_F5_V,
            self::SPECTRAL_CLASS_F4_VI,
            self::SPECTRAL_CLASS_F8_VI,
            self::SPECTRAL_CLASS_K3_IV,
            self::SPECTRAL_CLASS_F4_IV,
            self::SPECTRAL_CLASS_F0_V,
            self::SPECTRAL_CLASS_G7_IV,
            self::SPECTRAL_CLASS_G8_VI,
            self::SPECTRAL_CLASS_F2_VI,
            self::SPECTRAL_CLASS_F4_V,
            self::SPECTRAL_CLASS_F7_VI,
            self::SPECTRAL_CLASS_F3_V,
            self::SPECTRAL_CLASS_G1_V,
            self::SPECTRAL_CLASS_G9_VI,
            self::SPECTRAL_CLASS_F3_IV,
            self::SPECTRAL_CLASS_F9_VI,
            self::SPECTRAL_CLASS_M9_V,
            self::SPECTRAL_CLASS_K0_IV,
            self::SPECTRAL_CLASS_F1_IV,
            self::SPECTRAL_CLASS_G4_IV,
            self::SPECTRAL_CLASS_F3_VI,
            self::SPECTRAL_CLASS_K4_IV,
            self::SPECTRAL_CLASS_G5_IV,
            self::SPECTRAL_CLASS_G3_IV,
            self::SPECTRAL_CLASS_G1_IV,
            self::SPECTRAL_CLASS_K7_IV,
            self::SPECTRAL_CLASS_G0_IV,
            self::SPECTRAL_CLASS_K6_IV,
            self::SPECTRAL_CLASS_K9_IV,
            self::SPECTRAL_CLASS_G2_IV,
            self::SPECTRAL_CLASS_F9_IV,
            self::SPECTRAL_CLASS_F0_IV,
            self::SPECTRAL_CLASS_K8_IV,
            self::SPECTRAL_CLASS_G8_IV,
            self::SPECTRAL_CLASS_F6_IV,
            self::SPECTRAL_CLASS_F5_IV,
            self::SPECTRAL_CLASS_A0,
            self::SPECTRAL_CLASS_A0_IV,
            self::SPECTRAL_CLASS_A0_IV2,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['solar_system_id'] = isset($data['solar_system_id']) ? $data['solar_system_id'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['luminosity'] = isset($data['luminosity']) ? $data['luminosity'] : null;
        $this->container['radius'] = isset($data['radius']) ? $data['radius'] : null;
        $this->container['spectral_class'] = isset($data['spectral_class']) ? $data['spectral_class'] : null;
        $this->container['temperature'] = isset($data['temperature']) ? $data['temperature'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['solar_system_id'] === null) {
            $invalid_properties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalid_properties[] = "'type_id' can't be null";
        }
        if ($this->container['age'] === null) {
            $invalid_properties[] = "'age' can't be null";
        }
        if ($this->container['luminosity'] === null) {
            $invalid_properties[] = "'luminosity' can't be null";
        }
        if ($this->container['radius'] === null) {
            $invalid_properties[] = "'radius' can't be null";
        }
        if ($this->container['spectral_class'] === null) {
            $invalid_properties[] = "'spectral_class' can't be null";
        }
        $allowed_values = array("K2 V", "K4 V", "G2 V", "G8 V", "M7 V", "K7 V", "M2 V", "K5 V", "M3 V", "G0 V", "G7 V", "G3 V", "F9 V", "G5 V", "F6 V", "K8 V", "K9 V", "K6 V", "G9 V", "G6 V", "G4 VI", "G4 V", "F8 V", "F2 V", "F1 V", "K3 V", "F0 VI", "G1 VI", "G0 VI", "K1 V", "M4 V", "M1 V", "M6 V", "M0 V", "K2 IV", "G2 VI", "K0 V", "K5 IV", "F5 VI", "G6 VI", "F6 VI", "F2 IV", "G3 VI", "M8 V", "F1 VI", "K1 IV", "F7 V", "G5 VI", "M5 V", "G7 VI", "F5 V", "F4 VI", "F8 VI", "K3 IV", "F4 IV", "F0 V", "G7 IV", "G8 VI", "F2 VI", "F4 V", "F7 VI", "F3 V", "G1 V", "G9 VI", "F3 IV", "F9 VI", "M9 V", "K0 IV", "F1 IV", "G4 IV", "F3 VI", "K4 IV", "G5 IV", "G3 IV", "G1 IV", "K7 IV", "G0 IV", "K6 IV", "K9 IV", "G2 IV", "F9 IV", "F0 IV", "K8 IV", "G8 IV", "F6 IV", "F5 IV", "A0", "A0IV", "A0IV2");
        if (!in_array($this->container['spectral_class'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'spectral_class', must be one of #{allowed_values}.";
        }

        if ($this->container['temperature'] === null) {
            $invalid_properties[] = "'temperature' can't be null";
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
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['solar_system_id'] === null) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        if ($this->container['age'] === null) {
            return false;
        }
        if ($this->container['luminosity'] === null) {
            return false;
        }
        if ($this->container['radius'] === null) {
            return false;
        }
        if ($this->container['spectral_class'] === null) {
            return false;
        }
        $allowed_values = array("K2 V", "K4 V", "G2 V", "G8 V", "M7 V", "K7 V", "M2 V", "K5 V", "M3 V", "G0 V", "G7 V", "G3 V", "F9 V", "G5 V", "F6 V", "K8 V", "K9 V", "K6 V", "G9 V", "G6 V", "G4 VI", "G4 V", "F8 V", "F2 V", "F1 V", "K3 V", "F0 VI", "G1 VI", "G0 VI", "K1 V", "M4 V", "M1 V", "M6 V", "M0 V", "K2 IV", "G2 VI", "K0 V", "K5 IV", "F5 VI", "G6 VI", "F6 VI", "F2 IV", "G3 VI", "M8 V", "F1 VI", "K1 IV", "F7 V", "G5 VI", "M5 V", "G7 VI", "F5 V", "F4 VI", "F8 VI", "K3 IV", "F4 IV", "F0 V", "G7 IV", "G8 VI", "F2 VI", "F4 V", "F7 VI", "F3 V", "G1 V", "G9 VI", "F3 IV", "F9 VI", "M9 V", "K0 IV", "F1 IV", "G4 IV", "F3 VI", "K4 IV", "G5 IV", "G3 IV", "G1 IV", "K7 IV", "G0 IV", "K6 IV", "K9 IV", "G2 IV", "F9 IV", "F0 IV", "K8 IV", "G8 IV", "F6 IV", "F5 IV", "A0", "A0IV", "A0IV2");
        if (!in_array($this->container['spectral_class'], $allowed_values)) {
            return false;
        }
        if ($this->container['temperature'] === null) {
            return false;
        }
        return true;
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
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets solar_system_id
     * @return int
     */
    public function getSolarSystemId()
    {
        return $this->container['solar_system_id'];
    }

    /**
     * Sets solar_system_id
     * @param int $solar_system_id solar_system_id integer
     * @return $this
     */
    public function setSolarSystemId($solar_system_id)
    {
        $this->container['solar_system_id'] = $solar_system_id;

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
     * Gets age
     * @return int
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     * @param int $age Age of star in years
     * @return $this
     */
    public function setAge($age)
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets luminosity
     * @return float
     */
    public function getLuminosity()
    {
        return $this->container['luminosity'];
    }

    /**
     * Sets luminosity
     * @param float $luminosity luminosity number
     * @return $this
     */
    public function setLuminosity($luminosity)
    {
        $this->container['luminosity'] = $luminosity;

        return $this;
    }

    /**
     * Gets radius
     * @return int
     */
    public function getRadius()
    {
        return $this->container['radius'];
    }

    /**
     * Sets radius
     * @param int $radius radius integer
     * @return $this
     */
    public function setRadius($radius)
    {
        $this->container['radius'] = $radius;

        return $this;
    }

    /**
     * Gets spectral_class
     * @return string
     */
    public function getSpectralClass()
    {
        return $this->container['spectral_class'];
    }

    /**
     * Sets spectral_class
     * @param string $spectral_class spectral_class string
     * @return $this
     */
    public function setSpectralClass($spectral_class)
    {
        $allowed_values = array('K2 V', 'K4 V', 'G2 V', 'G8 V', 'M7 V', 'K7 V', 'M2 V', 'K5 V', 'M3 V', 'G0 V', 'G7 V', 'G3 V', 'F9 V', 'G5 V', 'F6 V', 'K8 V', 'K9 V', 'K6 V', 'G9 V', 'G6 V', 'G4 VI', 'G4 V', 'F8 V', 'F2 V', 'F1 V', 'K3 V', 'F0 VI', 'G1 VI', 'G0 VI', 'K1 V', 'M4 V', 'M1 V', 'M6 V', 'M0 V', 'K2 IV', 'G2 VI', 'K0 V', 'K5 IV', 'F5 VI', 'G6 VI', 'F6 VI', 'F2 IV', 'G3 VI', 'M8 V', 'F1 VI', 'K1 IV', 'F7 V', 'G5 VI', 'M5 V', 'G7 VI', 'F5 V', 'F4 VI', 'F8 VI', 'K3 IV', 'F4 IV', 'F0 V', 'G7 IV', 'G8 VI', 'F2 VI', 'F4 V', 'F7 VI', 'F3 V', 'G1 V', 'G9 VI', 'F3 IV', 'F9 VI', 'M9 V', 'K0 IV', 'F1 IV', 'G4 IV', 'F3 VI', 'K4 IV', 'G5 IV', 'G3 IV', 'G1 IV', 'K7 IV', 'G0 IV', 'K6 IV', 'K9 IV', 'G2 IV', 'F9 IV', 'F0 IV', 'K8 IV', 'G8 IV', 'F6 IV', 'F5 IV', 'A0', 'A0IV', 'A0IV2');
        if (!in_array($spectral_class, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'spectral_class', must be one of 'K2 V', 'K4 V', 'G2 V', 'G8 V', 'M7 V', 'K7 V', 'M2 V', 'K5 V', 'M3 V', 'G0 V', 'G7 V', 'G3 V', 'F9 V', 'G5 V', 'F6 V', 'K8 V', 'K9 V', 'K6 V', 'G9 V', 'G6 V', 'G4 VI', 'G4 V', 'F8 V', 'F2 V', 'F1 V', 'K3 V', 'F0 VI', 'G1 VI', 'G0 VI', 'K1 V', 'M4 V', 'M1 V', 'M6 V', 'M0 V', 'K2 IV', 'G2 VI', 'K0 V', 'K5 IV', 'F5 VI', 'G6 VI', 'F6 VI', 'F2 IV', 'G3 VI', 'M8 V', 'F1 VI', 'K1 IV', 'F7 V', 'G5 VI', 'M5 V', 'G7 VI', 'F5 V', 'F4 VI', 'F8 VI', 'K3 IV', 'F4 IV', 'F0 V', 'G7 IV', 'G8 VI', 'F2 VI', 'F4 V', 'F7 VI', 'F3 V', 'G1 V', 'G9 VI', 'F3 IV', 'F9 VI', 'M9 V', 'K0 IV', 'F1 IV', 'G4 IV', 'F3 VI', 'K4 IV', 'G5 IV', 'G3 IV', 'G1 IV', 'K7 IV', 'G0 IV', 'K6 IV', 'K9 IV', 'G2 IV', 'F9 IV', 'F0 IV', 'K8 IV', 'G8 IV', 'F6 IV', 'F5 IV', 'A0', 'A0IV', 'A0IV2'");
        }
        $this->container['spectral_class'] = $spectral_class;

        return $this;
    }

    /**
     * Gets temperature
     * @return int
     */
    public function getTemperature()
    {
        return $this->container['temperature'];
    }

    /**
     * Sets temperature
     * @param int $temperature temperature integer
     * @return $this
     */
    public function setTemperature($temperature)
    {
        $this->container['temperature'] = $temperature;

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


