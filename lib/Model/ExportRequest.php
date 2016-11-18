<?php
/**
 * ExportRequest
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
 * ExportRequest Class Doc Comment
 *
 * @category    Class */
 // @description Export Request.
/** 
 * @package     ArtikCloud
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ExportRequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ExportRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'end_date' => 'int',
        'format' => 'string',
        'order' => 'string',
        'sdids' => 'string',
        'sdtids' => 'string',
        'start_date' => 'int',
        'trial_id' => 'string',
        'uids' => 'string'
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
        'end_date' => 'endDate',
        'format' => 'format',
        'order' => 'order',
        'sdids' => 'sdids',
        'sdtids' => 'sdtids',
        'start_date' => 'startDate',
        'trial_id' => 'trialId',
        'uids' => 'uids'
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
        'end_date' => 'setEndDate',
        'format' => 'setFormat',
        'order' => 'setOrder',
        'sdids' => 'setSdids',
        'sdtids' => 'setSdtids',
        'start_date' => 'setStartDate',
        'trial_id' => 'setTrialId',
        'uids' => 'setUids'
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
        'end_date' => 'getEndDate',
        'format' => 'getFormat',
        'order' => 'getOrder',
        'sdids' => 'getSdids',
        'sdtids' => 'getSdtids',
        'start_date' => 'getStartDate',
        'trial_id' => 'getTrialId',
        'uids' => 'getUids'
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
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['sdids'] = isset($data['sdids']) ? $data['sdids'] : null;
        $this->container['sdtids'] = isset($data['sdtids']) ? $data['sdtids'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['trial_id'] = isset($data['trial_id']) ? $data['trial_id'] : null;
        $this->container['uids'] = isset($data['uids']) ? $data['uids'] : null;
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
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param string $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets order
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param string $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets sdids
     * @return string
     */
    public function getSdids()
    {
        return $this->container['sdids'];
    }

    /**
     * Sets sdids
     * @param string $sdids
     * @return $this
     */
    public function setSdids($sdids)
    {
        $this->container['sdids'] = $sdids;

        return $this;
    }

    /**
     * Gets sdtids
     * @return string
     */
    public function getSdtids()
    {
        return $this->container['sdtids'];
    }

    /**
     * Sets sdtids
     * @param string $sdtids
     * @return $this
     */
    public function setSdtids($sdtids)
    {
        $this->container['sdtids'] = $sdtids;

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
     * Gets trial_id
     * @return string
     */
    public function getTrialId()
    {
        return $this->container['trial_id'];
    }

    /**
     * Sets trial_id
     * @param string $trial_id
     * @return $this
     */
    public function setTrialId($trial_id)
    {
        $this->container['trial_id'] = $trial_id;

        return $this;
    }

    /**
     * Gets uids
     * @return string
     */
    public function getUids()
    {
        return $this->container['uids'];
    }

    /**
     * Sets uids
     * @param string $uids
     * @return $this
     */
    public function setUids($uids)
    {
        $this->container['uids'] = $uids;

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


