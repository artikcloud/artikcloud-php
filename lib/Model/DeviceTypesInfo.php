<?php
/**
 * DeviceTypesInfo
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
 * DeviceTypesInfo Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ArtikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeviceTypesInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DeviceTypesInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'device_properties_enabled' => 'bool',
        'pmax' => 'int',
        'modified_on' => 'int',
        'dtid' => 'string',
        'pmin' => 'int',
        'task_expires_after' => 'int',
        'created_on' => 'int'
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
        'device_properties_enabled' => 'devicePropertiesEnabled',
        'pmax' => 'pmax',
        'modified_on' => 'modifiedOn',
        'dtid' => 'dtid',
        'pmin' => 'pmin',
        'task_expires_after' => 'taskExpiresAfter',
        'created_on' => 'createdOn'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'device_properties_enabled' => 'setDevicePropertiesEnabled',
        'pmax' => 'setPmax',
        'modified_on' => 'setModifiedOn',
        'dtid' => 'setDtid',
        'pmin' => 'setPmin',
        'task_expires_after' => 'setTaskExpiresAfter',
        'created_on' => 'setCreatedOn'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'device_properties_enabled' => 'getDevicePropertiesEnabled',
        'pmax' => 'getPmax',
        'modified_on' => 'getModifiedOn',
        'dtid' => 'getDtid',
        'pmin' => 'getPmin',
        'task_expires_after' => 'getTaskExpiresAfter',
        'created_on' => 'getCreatedOn'
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
        $this->container['device_properties_enabled'] = isset($data['device_properties_enabled']) ? $data['device_properties_enabled'] : null;
        $this->container['pmax'] = isset($data['pmax']) ? $data['pmax'] : null;
        $this->container['modified_on'] = isset($data['modified_on']) ? $data['modified_on'] : null;
        $this->container['dtid'] = isset($data['dtid']) ? $data['dtid'] : null;
        $this->container['pmin'] = isset($data['pmin']) ? $data['pmin'] : null;
        $this->container['task_expires_after'] = isset($data['task_expires_after']) ? $data['task_expires_after'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
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
     * Gets device_properties_enabled
     * @return bool
     */
    public function getDevicePropertiesEnabled()
    {
        return $this->container['device_properties_enabled'];
    }

    /**
     * Sets device_properties_enabled
     * @param bool $device_properties_enabled Device Properties Enabled
     * @return $this
     */
    public function setDevicePropertiesEnabled($device_properties_enabled)
    {
        $this->container['device_properties_enabled'] = $device_properties_enabled;

        return $this;
    }

    /**
     * Gets pmax
     * @return int
     */
    public function getPmax()
    {
        return $this->container['pmax'];
    }

    /**
     * Sets pmax
     * @param int $pmax Pmax value
     * @return $this
     */
    public function setPmax($pmax)
    {
        $this->container['pmax'] = $pmax;

        return $this;
    }

    /**
     * Gets modified_on
     * @return int
     */
    public function getModifiedOn()
    {
        return $this->container['modified_on'];
    }

    /**
     * Sets modified_on
     * @param int $modified_on Modified on
     * @return $this
     */
    public function setModifiedOn($modified_on)
    {
        $this->container['modified_on'] = $modified_on;

        return $this;
    }

    /**
     * Gets dtid
     * @return string
     */
    public function getDtid()
    {
        return $this->container['dtid'];
    }

    /**
     * Sets dtid
     * @param string $dtid Device Type ID
     * @return $this
     */
    public function setDtid($dtid)
    {
        $this->container['dtid'] = $dtid;

        return $this;
    }

    /**
     * Gets pmin
     * @return int
     */
    public function getPmin()
    {
        return $this->container['pmin'];
    }

    /**
     * Sets pmin
     * @param int $pmin Pmin value
     * @return $this
     */
    public function setPmin($pmin)
    {
        $this->container['pmin'] = $pmin;

        return $this;
    }

    /**
     * Gets task_expires_after
     * @return int
     */
    public function getTaskExpiresAfter()
    {
        return $this->container['task_expires_after'];
    }

    /**
     * Sets task_expires_after
     * @param int $task_expires_after Default task expiration time in seconds
     * @return $this
     */
    public function setTaskExpiresAfter($task_expires_after)
    {
        $this->container['task_expires_after'] = $task_expires_after;

        return $this;
    }

    /**
     * Gets created_on
     * @return int
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     * @param int $created_on Created on
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

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


