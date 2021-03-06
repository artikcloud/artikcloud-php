<?php
/**
 * TasksStatusCounts
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
 * TasksStatusCounts Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ArtikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TasksStatusCounts implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TasksStatusCounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cancelled' => 'int',
        'complete' => 'int',
        'processing' => 'int',
        'requested' => 'int'
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
        'cancelled' => 'CANCELLED',
        'complete' => 'COMPLETE',
        'processing' => 'PROCESSING',
        'requested' => 'REQUESTED'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'cancelled' => 'setCancelled',
        'complete' => 'setComplete',
        'processing' => 'setProcessing',
        'requested' => 'setRequested'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'cancelled' => 'getCancelled',
        'complete' => 'getComplete',
        'processing' => 'getProcessing',
        'requested' => 'getRequested'
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
        $this->container['cancelled'] = isset($data['cancelled']) ? $data['cancelled'] : null;
        $this->container['complete'] = isset($data['complete']) ? $data['complete'] : null;
        $this->container['processing'] = isset($data['processing']) ? $data['processing'] : null;
        $this->container['requested'] = isset($data['requested']) ? $data['requested'] : null;
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
     * Gets cancelled
     * @return int
     */
    public function getCancelled()
    {
        return $this->container['cancelled'];
    }

    /**
     * Sets cancelled
     * @param int $cancelled Cancelled
     * @return $this
     */
    public function setCancelled($cancelled)
    {
        $this->container['cancelled'] = $cancelled;

        return $this;
    }

    /**
     * Gets complete
     * @return int
     */
    public function getComplete()
    {
        return $this->container['complete'];
    }

    /**
     * Sets complete
     * @param int $complete Complete
     * @return $this
     */
    public function setComplete($complete)
    {
        $this->container['complete'] = $complete;

        return $this;
    }

    /**
     * Gets processing
     * @return int
     */
    public function getProcessing()
    {
        return $this->container['processing'];
    }

    /**
     * Sets processing
     * @param int $processing Processing
     * @return $this
     */
    public function setProcessing($processing)
    {
        $this->container['processing'] = $processing;

        return $this;
    }

    /**
     * Gets requested
     * @return int
     */
    public function getRequested()
    {
        return $this->container['requested'];
    }

    /**
     * Sets requested
     * @param int $requested Requested
     * @return $this
     */
    public function setRequested($requested)
    {
        $this->container['requested'] = $requested;

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


