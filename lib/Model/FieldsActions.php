<?php
/**
 * FieldsActions
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
 * FieldsActions Class Doc Comment
 *
 * @category    Class
 * @description Fields and Actions
 * @package     ArtikCloud
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FieldsActions implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'fields' => 'map[string,object]',
        'actions' => 'map[string,object]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'fields' => 'fields',
        'actions' => 'actions'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'fields' => 'setFields',
        'actions' => 'setActions'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'fields' => 'getFields',
        'actions' => 'getActions'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $fields Message Fields
      * @var map[string,object]
      */
    protected $fields;
    
    /**
      * $actions Actions
      * @var map[string,object]
      */
    protected $actions;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->fields = $data["fields"];
            $this->actions = $data["actions"];
        }
    }
    
    /**
     * Gets fields
     * @return map[string,object]
     */
    public function getFields()
    {
        return $this->fields;
    }
  
    /**
     * Sets fields
     * @param map[string,object] $fields Message Fields
     * @return $this
     */
    public function setFields($fields)
    {
        
        $this->fields = $fields;
        return $this;
    }
    
    /**
     * Gets actions
     * @return map[string,object]
     */
    public function getActions()
    {
        return $this->actions;
    }
  
    /**
     * Sets actions
     * @param map[string,object] $actions Actions
     * @return $this
     */
    public function setActions($actions)
    {
        
        $this->actions = $actions;
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
