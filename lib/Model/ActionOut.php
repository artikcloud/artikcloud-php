<?php
/**
 * ActionOut
 *
 * PHP version 5
 *
 * @category Class
 * @package  ArtikCloud
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ARTIK Cloud API
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0.0
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

namespace ArtikCloud\Model;

use \ArrayAccess;

/**
 * ActionOut Class Doc Comment
 *
 * @category    Class */
 // @description Action received in a WebSocket.
/** 
 * @package     ArtikCloud
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActionOut implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActionOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'mid' => 'string',
        'uid' => 'string',
        'sdtid' => 'string',
        'cts' => 'int',
        'mv' => 'int'
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
        'mid' => 'mid',
        'uid' => 'uid',
        'sdtid' => 'sdtid',
        'cts' => 'cts',
        'mv' => 'mv'
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
        'mid' => 'setMid',
        'uid' => 'setUid',
        'sdtid' => 'setSdtid',
        'cts' => 'setCts',
        'mv' => 'setMv'
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
        'mid' => 'getMid',
        'uid' => 'getUid',
        'sdtid' => 'getSdtid',
        'cts' => 'getCts',
        'mv' => 'getMv'
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
        $this->container['mid'] = isset($data['mid']) ? $data['mid'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['sdtid'] = isset($data['sdtid']) ? $data['sdtid'] : null;
        $this->container['cts'] = isset($data['cts']) ? $data['cts'] : null;
        $this->container['mv'] = isset($data['mv']) ? $data['mv'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets mid
     * @return string
     */
    public function getMid()
    {
        return $this->container['mid'];
    }

    /**
     * Sets mid
     * @param string $mid Message ID.
     * @return $this
     */
    public function setMid($mid)
    {
        $this->container['mid'] = $mid;

        return $this;
    }

    /**
     * Gets uid
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     * @param string $uid User ID.
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets sdtid
     * @return string
     */
    public function getSdtid()
    {
        return $this->container['sdtid'];
    }

    /**
     * Sets sdtid
     * @param string $sdtid Source Device Type ID.
     * @return $this
     */
    public function setSdtid($sdtid)
    {
        $this->container['sdtid'] = $sdtid;

        return $this;
    }

    /**
     * Gets cts
     * @return int
     */
    public function getCts()
    {
        return $this->container['cts'];
    }

    /**
     * Sets cts
     * @param int $cts Created Timestamp (past, present or future). Defaults to current time if not provided.
     * @return $this
     */
    public function setCts($cts)
    {
        $this->container['cts'] = $cts;

        return $this;
    }

    /**
     * Gets mv
     * @return int
     */
    public function getMv()
    {
        return $this->container['mv'];
    }

    /**
     * Sets mv
     * @param int $mv Manifest Version.
     * @return $this
     */
    public function setMv($mv)
    {
        $this->container['mv'] = $mv;

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
            return json_encode(\ArtikCloud\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ArtikCloud\ObjectSerializer::sanitizeForSerialization($this));
    }
}


