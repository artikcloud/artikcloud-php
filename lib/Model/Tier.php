<?php
/**
 * Tier
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
 * Tier Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ArtikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tier implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Tier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'modified_on' => 'int',
        'message_limit' => 'int',
        'cost' => 'string',
        'name' => 'string',
        'description' => 'string',
        'interval' => 'string',
        'ptid' => 'string',
        'type' => 'string',
        'billing_interval' => 'string',
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
        'modified_on' => 'modifiedOn',
        'message_limit' => 'messageLimit',
        'cost' => 'cost',
        'name' => 'name',
        'description' => 'description',
        'interval' => 'interval',
        'ptid' => 'ptid',
        'type' => 'type',
        'billing_interval' => 'billingInterval',
        'created_on' => 'createdOn'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'modified_on' => 'setModifiedOn',
        'message_limit' => 'setMessageLimit',
        'cost' => 'setCost',
        'name' => 'setName',
        'description' => 'setDescription',
        'interval' => 'setInterval',
        'ptid' => 'setPtid',
        'type' => 'setType',
        'billing_interval' => 'setBillingInterval',
        'created_on' => 'setCreatedOn'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'modified_on' => 'getModifiedOn',
        'message_limit' => 'getMessageLimit',
        'cost' => 'getCost',
        'name' => 'getName',
        'description' => 'getDescription',
        'interval' => 'getInterval',
        'ptid' => 'getPtid',
        'type' => 'getType',
        'billing_interval' => 'getBillingInterval',
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
        $this->container['modified_on'] = isset($data['modified_on']) ? $data['modified_on'] : null;
        $this->container['message_limit'] = isset($data['message_limit']) ? $data['message_limit'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['ptid'] = isset($data['ptid']) ? $data['ptid'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['billing_interval'] = isset($data['billing_interval']) ? $data['billing_interval'] : null;
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
     * Gets modified_on
     * @return int
     */
    public function getModifiedOn()
    {
        return $this->container['modified_on'];
    }

    /**
     * Sets modified_on
     * @param int $modified_on Modified On
     * @return $this
     */
    public function setModifiedOn($modified_on)
    {
        $this->container['modified_on'] = $modified_on;

        return $this;
    }

    /**
     * Gets message_limit
     * @return int
     */
    public function getMessageLimit()
    {
        return $this->container['message_limit'];
    }

    /**
     * Sets message_limit
     * @param int $message_limit Message Limit
     * @return $this
     */
    public function setMessageLimit($message_limit)
    {
        $this->container['message_limit'] = $message_limit;

        return $this;
    }

    /**
     * Gets cost
     * @return string
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     * @param string $cost Cost
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

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
     * @param string $name Name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string $interval Interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets ptid
     * @return string
     */
    public function getPtid()
    {
        return $this->container['ptid'];
    }

    /**
     * Sets ptid
     * @param string $ptid Pricing Tier ID
     * @return $this
     */
    public function setPtid($ptid)
    {
        $this->container['ptid'] = $ptid;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets billing_interval
     * @return string
     */
    public function getBillingInterval()
    {
        return $this->container['billing_interval'];
    }

    /**
     * Sets billing_interval
     * @param string $billing_interval Billing Interval
     * @return $this
     */
    public function setBillingInterval($billing_interval)
    {
        $this->container['billing_interval'] = $billing_interval;

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
     * @param int $created_on Created On
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


