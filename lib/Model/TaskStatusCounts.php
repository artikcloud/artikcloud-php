<?php
/**
 * TaskStatusCounts
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
 * TaskStatusCounts Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ArtikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TaskStatusCounts implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TaskStatusCounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'num_failed' => 'int',
        'num_cancelled' => 'int',
        'total_devices' => 'int',
        'num_completed' => 'int',
        'num_succeeded' => 'int'
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
        'num_failed' => 'numFailed',
        'num_cancelled' => 'numCancelled',
        'total_devices' => 'totalDevices',
        'num_completed' => 'numCompleted',
        'num_succeeded' => 'numSucceeded'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'num_failed' => 'setNumFailed',
        'num_cancelled' => 'setNumCancelled',
        'total_devices' => 'setTotalDevices',
        'num_completed' => 'setNumCompleted',
        'num_succeeded' => 'setNumSucceeded'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'num_failed' => 'getNumFailed',
        'num_cancelled' => 'getNumCancelled',
        'total_devices' => 'getTotalDevices',
        'num_completed' => 'getNumCompleted',
        'num_succeeded' => 'getNumSucceeded'
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
        $this->container['num_failed'] = isset($data['num_failed']) ? $data['num_failed'] : null;
        $this->container['num_cancelled'] = isset($data['num_cancelled']) ? $data['num_cancelled'] : null;
        $this->container['total_devices'] = isset($data['total_devices']) ? $data['total_devices'] : null;
        $this->container['num_completed'] = isset($data['num_completed']) ? $data['num_completed'] : null;
        $this->container['num_succeeded'] = isset($data['num_succeeded']) ? $data['num_succeeded'] : null;
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
     * Gets num_failed
     * @return int
     */
    public function getNumFailed()
    {
        return $this->container['num_failed'];
    }

    /**
     * Sets num_failed
     * @param int $num_failed Number failed
     * @return $this
     */
    public function setNumFailed($num_failed)
    {
        $this->container['num_failed'] = $num_failed;

        return $this;
    }

    /**
     * Gets num_cancelled
     * @return int
     */
    public function getNumCancelled()
    {
        return $this->container['num_cancelled'];
    }

    /**
     * Sets num_cancelled
     * @param int $num_cancelled Number cancelled
     * @return $this
     */
    public function setNumCancelled($num_cancelled)
    {
        $this->container['num_cancelled'] = $num_cancelled;

        return $this;
    }

    /**
     * Gets total_devices
     * @return int
     */
    public function getTotalDevices()
    {
        return $this->container['total_devices'];
    }

    /**
     * Sets total_devices
     * @param int $total_devices Total devices
     * @return $this
     */
    public function setTotalDevices($total_devices)
    {
        $this->container['total_devices'] = $total_devices;

        return $this;
    }

    /**
     * Gets num_completed
     * @return int
     */
    public function getNumCompleted()
    {
        return $this->container['num_completed'];
    }

    /**
     * Sets num_completed
     * @param int $num_completed Number completed
     * @return $this
     */
    public function setNumCompleted($num_completed)
    {
        $this->container['num_completed'] = $num_completed;

        return $this;
    }

    /**
     * Gets num_succeeded
     * @return int
     */
    public function getNumSucceeded()
    {
        return $this->container['num_succeeded'];
    }

    /**
     * Sets num_succeeded
     * @param int $num_succeeded Number succeeded
     * @return $this
     */
    public function setNumSucceeded($num_succeeded)
    {
        $this->container['num_succeeded'] = $num_succeeded;

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


