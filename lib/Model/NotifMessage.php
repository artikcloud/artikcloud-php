<?php
/**
 * NotifMessage
 *
 * PHP version 5
 *
 * @category Class
 * @package  ArtikCloud
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ARTIK Cloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ArtikCloud\ArtikCloud\Model;

use \ArrayAccess;

/**
 * NotifMessage Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ArtikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NotifMessage implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NotifMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uid' => 'string',
        'cts' => 'int',
        'data' => 'map[string,object]',
        'mid' => 'string',
        'sdid' => 'string',
        'mv' => 'string',
        'sdtid' => 'string',
        'ts' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'uid' => 'uid',
        'cts' => 'cts',
        'data' => 'data',
        'mid' => 'mid',
        'sdid' => 'sdid',
        'mv' => 'mv',
        'sdtid' => 'sdtid',
        'ts' => 'ts'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'cts' => 'setCts',
        'data' => 'setData',
        'mid' => 'setMid',
        'sdid' => 'setSdid',
        'mv' => 'setMv',
        'sdtid' => 'setSdtid',
        'ts' => 'setTs'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'cts' => 'getCts',
        'data' => 'getData',
        'mid' => 'getMid',
        'sdid' => 'getSdid',
        'mv' => 'getMv',
        'sdtid' => 'getSdtid',
        'ts' => 'getTs'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['cts'] = isset($data['cts']) ? $data['cts'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['mid'] = isset($data['mid']) ? $data['mid'] : null;
        $this->container['sdid'] = isset($data['sdid']) ? $data['sdid'] : null;
        $this->container['mv'] = isset($data['mv']) ? $data['mv'] : null;
        $this->container['sdtid'] = isset($data['sdtid']) ? $data['sdtid'] : null;
        $this->container['ts'] = isset($data['ts']) ? $data['ts'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
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
     * @param string $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

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
     * @param int $cts
     * @return $this
     */
    public function setCts($cts)
    {
        $this->container['cts'] = $cts;

        return $this;
    }

    /**
     * Gets data
     * @return map[string,object]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     * @param map[string,object] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
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
     * @param string $mid
     * @return $this
     */
    public function setMid($mid)
    {
        $this->container['mid'] = $mid;

        return $this;
    }

    /**
     * Gets sdid
     * @return string
     */
    public function getSdid()
    {
        return $this->container['sdid'];
    }

    /**
     * Sets sdid
     * @param string $sdid
     * @return $this
     */
    public function setSdid($sdid)
    {
        $this->container['sdid'] = $sdid;

        return $this;
    }

    /**
     * Gets mv
     * @return string
     */
    public function getMv()
    {
        return $this->container['mv'];
    }

    /**
     * Sets mv
     * @param string $mv
     * @return $this
     */
    public function setMv($mv)
    {
        $this->container['mv'] = $mv;

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
     * @param string $sdtid
     * @return $this
     */
    public function setSdtid($sdtid)
    {
        $this->container['sdtid'] = $sdtid;

        return $this;
    }

    /**
     * Gets ts
     * @return int
     */
    public function getTs()
    {
        return $this->container['ts'];
    }

    /**
     * Sets ts
     * @param int $ts
     * @return $this
     */
    public function setTs($ts)
    {
        $this->container['ts'] = $ts;

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


