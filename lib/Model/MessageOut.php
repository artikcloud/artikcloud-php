<?php
/**
 * MessageOut
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
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ArtikCloud\Model;

use \ArrayAccess;
/**
 * MessageOut Class Doc Comment
 *
 * @category    Class
 * @description Message received by a WebSocket.
 * @package     ArtikCloud
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MessageOut implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'mid' => 'string',
        'uid' => 'string',
        'sdtid' => 'string',
        'cts' => 'int',
        'mv' => 'int'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'mid' => 'mid',
        'uid' => 'uid',
        'sdtid' => 'sdtid',
        'cts' => 'cts',
        'mv' => 'mv'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'mid' => 'setMid',
        'uid' => 'setUid',
        'sdtid' => 'setSdtid',
        'cts' => 'setCts',
        'mv' => 'setMv'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'mid' => 'getMid',
        'uid' => 'getUid',
        'sdtid' => 'getSdtid',
        'cts' => 'getCts',
        'mv' => 'getMv'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $mid Message ID.
      * @var string
      */
    protected $mid;
    
    /**
      * $uid User ID.
      * @var string
      */
    protected $uid;
    
    /**
      * $sdtid Source Device Type ID.
      * @var string
      */
    protected $sdtid;
    
    /**
      * $cts Created Timestamp (past, present or future). Defaults to current time if not provided.
      * @var int
      */
    protected $cts;
    
    /**
      * $mv Manifest Version.
      * @var int
      */
    protected $mv;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->mid = $data["mid"];
            $this->uid = $data["uid"];
            $this->sdtid = $data["sdtid"];
            $this->cts = $data["cts"];
            $this->mv = $data["mv"];
        }
    }
    
    /**
     * Gets mid
     * @return string
     */
    public function getMid()
    {
        return $this->mid;
    }
  
    /**
     * Sets mid
     * @param string $mid Message ID.
     * @return $this
     */
    public function setMid($mid)
    {
        
        $this->mid = $mid;
        return $this;
    }
    
    /**
     * Gets uid
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }
  
    /**
     * Sets uid
     * @param string $uid User ID.
     * @return $this
     */
    public function setUid($uid)
    {
        
        $this->uid = $uid;
        return $this;
    }
    
    /**
     * Gets sdtid
     * @return string
     */
    public function getSdtid()
    {
        return $this->sdtid;
    }
  
    /**
     * Sets sdtid
     * @param string $sdtid Source Device Type ID.
     * @return $this
     */
    public function setSdtid($sdtid)
    {
        
        $this->sdtid = $sdtid;
        return $this;
    }
    
    /**
     * Gets cts
     * @return int
     */
    public function getCts()
    {
        return $this->cts;
    }
  
    /**
     * Sets cts
     * @param int $cts Created Timestamp (past, present or future). Defaults to current time if not provided.
     * @return $this
     */
    public function setCts($cts)
    {
        
        $this->cts = $cts;
        return $this;
    }
    
    /**
     * Gets mv
     * @return int
     */
    public function getMv()
    {
        return $this->mv;
    }
  
    /**
     * Sets mv
     * @param int $mv Manifest Version.
     * @return $this
     */
    public function setMv($mv)
    {
        
        $this->mv = $mv;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\ArtikCloud\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\ArtikCloud\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
