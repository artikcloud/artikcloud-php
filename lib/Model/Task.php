<?php
/**
 * Task
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
 * Task Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ArtikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Task implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Task';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filter' => 'string',
        'task_type' => 'string',
        'modified_on' => 'int',
        'dtid' => 'string',
        'status_counts' => '\ArtikCloud\ArtikCloud\Model\TaskStatusCounts',
        'property' => 'string',
        'id' => 'string',
        'dids' => 'string[]',
        'task_parameters' => '\ArtikCloud\ArtikCloud\Model\TaskParameters',
        'created_on' => 'int',
        'status' => 'string'
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
        'filter' => 'filter',
        'task_type' => 'taskType',
        'modified_on' => 'modifiedOn',
        'dtid' => 'dtid',
        'status_counts' => 'statusCounts',
        'property' => 'property',
        'id' => 'id',
        'dids' => 'dids',
        'task_parameters' => 'taskParameters',
        'created_on' => 'createdOn',
        'status' => 'status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'filter' => 'setFilter',
        'task_type' => 'setTaskType',
        'modified_on' => 'setModifiedOn',
        'dtid' => 'setDtid',
        'status_counts' => 'setStatusCounts',
        'property' => 'setProperty',
        'id' => 'setId',
        'dids' => 'setDids',
        'task_parameters' => 'setTaskParameters',
        'created_on' => 'setCreatedOn',
        'status' => 'setStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'filter' => 'getFilter',
        'task_type' => 'getTaskType',
        'modified_on' => 'getModifiedOn',
        'dtid' => 'getDtid',
        'status_counts' => 'getStatusCounts',
        'property' => 'getProperty',
        'id' => 'getId',
        'dids' => 'getDids',
        'task_parameters' => 'getTaskParameters',
        'created_on' => 'getCreatedOn',
        'status' => 'getStatus'
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
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['task_type'] = isset($data['task_type']) ? $data['task_type'] : null;
        $this->container['modified_on'] = isset($data['modified_on']) ? $data['modified_on'] : null;
        $this->container['dtid'] = isset($data['dtid']) ? $data['dtid'] : null;
        $this->container['status_counts'] = isset($data['status_counts']) ? $data['status_counts'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['dids'] = isset($data['dids']) ? $data['dids'] : null;
        $this->container['task_parameters'] = isset($data['task_parameters']) ? $data['task_parameters'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets filter
     * @return string
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     * @param string $filter Filter
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets task_type
     * @return string
     */
    public function getTaskType()
    {
        return $this->container['task_type'];
    }

    /**
     * Sets task_type
     * @param string $task_type Task type
     * @return $this
     */
    public function setTaskType($task_type)
    {
        $this->container['task_type'] = $task_type;

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
     * Gets status_counts
     * @return \ArtikCloud\ArtikCloud\Model\TaskStatusCounts
     */
    public function getStatusCounts()
    {
        return $this->container['status_counts'];
    }

    /**
     * Sets status_counts
     * @param \ArtikCloud\ArtikCloud\Model\TaskStatusCounts $status_counts Status counts
     * @return $this
     */
    public function setStatusCounts($status_counts)
    {
        $this->container['status_counts'] = $status_counts;

        return $this;
    }

    /**
     * Gets property
     * @return string
     */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
     * Sets property
     * @param string $property Property
     * @return $this
     */
    public function setProperty($property)
    {
        $this->container['property'] = $property;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Task ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets dids
     * @return string[]
     */
    public function getDids()
    {
        return $this->container['dids'];
    }

    /**
     * Sets dids
     * @param string[] $dids Device IDs
     * @return $this
     */
    public function setDids($dids)
    {
        $this->container['dids'] = $dids;

        return $this;
    }

    /**
     * Gets task_parameters
     * @return \ArtikCloud\ArtikCloud\Model\TaskParameters
     */
    public function getTaskParameters()
    {
        return $this->container['task_parameters'];
    }

    /**
     * Sets task_parameters
     * @param \ArtikCloud\ArtikCloud\Model\TaskParameters $task_parameters Task parameters
     * @return $this
     */
    public function setTaskParameters($task_parameters)
    {
        $this->container['task_parameters'] = $task_parameters;

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
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


