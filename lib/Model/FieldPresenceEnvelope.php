<?php
/**
 * FieldPresenceEnvelope
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
 * FieldPresenceEnvelope Class Doc Comment
 *
 * @category    Class
 * @description Field Presence Envelope
 * @package     ArtikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FieldPresenceEnvelope implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FieldPresenceEnvelope';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sdid' => 'string',
        'field_presence' => 'string',
        'start_date' => 'int',
        'end_date' => 'int',
        'interval' => 'string',
        'size' => 'int',
        'data' => '\ArtikCloud\ArtikCloud\Model\FieldPresence[]'
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
        'sdid' => 'sdid',
        'field_presence' => 'fieldPresence',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'interval' => 'interval',
        'size' => 'size',
        'data' => 'data'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'sdid' => 'setSdid',
        'field_presence' => 'setFieldPresence',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'interval' => 'setInterval',
        'size' => 'setSize',
        'data' => 'setData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'sdid' => 'getSdid',
        'field_presence' => 'getFieldPresence',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'interval' => 'getInterval',
        'size' => 'getSize',
        'data' => 'getData'
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
        $this->container['sdid'] = isset($data['sdid']) ? $data['sdid'] : null;
        $this->container['field_presence'] = isset($data['field_presence']) ? $data['field_presence'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['sdid'] === null) {
            $invalid_properties[] = "'sdid' can't be null";
        }
        if ($this->container['field_presence'] === null) {
            $invalid_properties[] = "'field_presence' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalid_properties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalid_properties[] = "'end_date' can't be null";
        }
        if ($this->container['interval'] === null) {
            $invalid_properties[] = "'interval' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalid_properties[] = "'size' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalid_properties[] = "'data' can't be null";
        }
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

        if ($this->container['sdid'] === null) {
            return false;
        }
        if ($this->container['field_presence'] === null) {
            return false;
        }
        if ($this->container['start_date'] === null) {
            return false;
        }
        if ($this->container['end_date'] === null) {
            return false;
        }
        if ($this->container['interval'] === null) {
            return false;
        }
        if ($this->container['size'] === null) {
            return false;
        }
        if ($this->container['data'] === null) {
            return false;
        }
        return true;
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
     * Gets field_presence
     * @return string
     */
    public function getFieldPresence()
    {
        return $this->container['field_presence'];
    }

    /**
     * Sets field_presence
     * @param string $field_presence
     * @return $this
     */
    public function setFieldPresence($field_presence)
    {
        $this->container['field_presence'] = $field_presence;

        return $this;
    }

    /**
     * Gets start_date
     * @return int
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param int $start_date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     * @return int
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param int $end_date
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets interval
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     * @param string $interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets size
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param int $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets data
     * @return \ArtikCloud\ArtikCloud\Model\FieldPresence[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     * @param \ArtikCloud\ArtikCloud\Model\FieldPresence[] $data
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

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


