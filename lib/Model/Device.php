<?php
/**
 * Device
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
 * Device Class Doc Comment
 *
 * @category    Class
 * @description Device information.
 * @package     ArtikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Device implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Device';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'uid' => 'string',
        'dtid' => 'string',
        'name' => 'string',
        'manifest_version' => 'int',
        'manifest_version_policy' => 'string',
        'need_provider_auth' => 'bool',
        'properties' => 'map[string,object]',
        'created_on' => 'int',
        'connected' => 'bool',
        'certificate_info' => 'string',
        'certificate_signature' => 'string',
        'eid' => 'string',
        'provider_credentials' => 'map[string,object]',
        'shared_with_others' => 'bool',
        'shared_with_me' => 'string'
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
        'id' => 'id',
        'uid' => 'uid',
        'dtid' => 'dtid',
        'name' => 'name',
        'manifest_version' => 'manifestVersion',
        'manifest_version_policy' => 'manifestVersionPolicy',
        'need_provider_auth' => 'needProviderAuth',
        'properties' => 'properties',
        'created_on' => 'createdOn',
        'connected' => 'connected',
        'certificate_info' => 'certificateInfo',
        'certificate_signature' => 'certificateSignature',
        'eid' => 'eid',
        'provider_credentials' => 'providerCredentials',
        'shared_with_others' => 'sharedWithOthers',
        'shared_with_me' => 'sharedWithMe'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uid' => 'setUid',
        'dtid' => 'setDtid',
        'name' => 'setName',
        'manifest_version' => 'setManifestVersion',
        'manifest_version_policy' => 'setManifestVersionPolicy',
        'need_provider_auth' => 'setNeedProviderAuth',
        'properties' => 'setProperties',
        'created_on' => 'setCreatedOn',
        'connected' => 'setConnected',
        'certificate_info' => 'setCertificateInfo',
        'certificate_signature' => 'setCertificateSignature',
        'eid' => 'setEid',
        'provider_credentials' => 'setProviderCredentials',
        'shared_with_others' => 'setSharedWithOthers',
        'shared_with_me' => 'setSharedWithMe'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uid' => 'getUid',
        'dtid' => 'getDtid',
        'name' => 'getName',
        'manifest_version' => 'getManifestVersion',
        'manifest_version_policy' => 'getManifestVersionPolicy',
        'need_provider_auth' => 'getNeedProviderAuth',
        'properties' => 'getProperties',
        'created_on' => 'getCreatedOn',
        'connected' => 'getConnected',
        'certificate_info' => 'getCertificateInfo',
        'certificate_signature' => 'getCertificateSignature',
        'eid' => 'getEid',
        'provider_credentials' => 'getProviderCredentials',
        'shared_with_others' => 'getSharedWithOthers',
        'shared_with_me' => 'getSharedWithMe'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['dtid'] = isset($data['dtid']) ? $data['dtid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['manifest_version'] = isset($data['manifest_version']) ? $data['manifest_version'] : null;
        $this->container['manifest_version_policy'] = isset($data['manifest_version_policy']) ? $data['manifest_version_policy'] : null;
        $this->container['need_provider_auth'] = isset($data['need_provider_auth']) ? $data['need_provider_auth'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['connected'] = isset($data['connected']) ? $data['connected'] : null;
        $this->container['certificate_info'] = isset($data['certificate_info']) ? $data['certificate_info'] : null;
        $this->container['certificate_signature'] = isset($data['certificate_signature']) ? $data['certificate_signature'] : null;
        $this->container['eid'] = isset($data['eid']) ? $data['eid'] : null;
        $this->container['provider_credentials'] = isset($data['provider_credentials']) ? $data['provider_credentials'] : null;
        $this->container['shared_with_others'] = isset($data['shared_with_others']) ? $data['shared_with_others'] : null;
        $this->container['shared_with_me'] = isset($data['shared_with_me']) ? $data['shared_with_me'] : null;
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
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Device ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $uid User ID
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

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
     * Gets manifest_version
     * @return int
     */
    public function getManifestVersion()
    {
        return $this->container['manifest_version'];
    }

    /**
     * Sets manifest_version
     * @param int $manifest_version Manifest Version
     * @return $this
     */
    public function setManifestVersion($manifest_version)
    {
        $this->container['manifest_version'] = $manifest_version;

        return $this;
    }

    /**
     * Gets manifest_version_policy
     * @return string
     */
    public function getManifestVersionPolicy()
    {
        return $this->container['manifest_version_policy'];
    }

    /**
     * Sets manifest_version_policy
     * @param string $manifest_version_policy Manifest Version Policy (LATEST, DEVICE)
     * @return $this
     */
    public function setManifestVersionPolicy($manifest_version_policy)
    {
        $this->container['manifest_version_policy'] = $manifest_version_policy;

        return $this;
    }

    /**
     * Gets need_provider_auth
     * @return bool
     */
    public function getNeedProviderAuth()
    {
        return $this->container['need_provider_auth'];
    }

    /**
     * Sets need_provider_auth
     * @param bool $need_provider_auth Needs Provider Authentication
     * @return $this
     */
    public function setNeedProviderAuth($need_provider_auth)
    {
        $this->container['need_provider_auth'] = $need_provider_auth;

        return $this;
    }

    /**
     * Gets properties
     * @return map[string,object]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     * @param map[string,object] $properties
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

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
     * @param int $created_on Created On (milliseconds since epoch)
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets connected
     * @return bool
     */
    public function getConnected()
    {
        return $this->container['connected'];
    }

    /**
     * Sets connected
     * @param bool $connected Is Connected
     * @return $this
     */
    public function setConnected($connected)
    {
        $this->container['connected'] = $connected;

        return $this;
    }

    /**
     * Gets certificate_info
     * @return string
     */
    public function getCertificateInfo()
    {
        return $this->container['certificate_info'];
    }

    /**
     * Sets certificate_info
     * @param string $certificate_info Certificate Info (if any)
     * @return $this
     */
    public function setCertificateInfo($certificate_info)
    {
        $this->container['certificate_info'] = $certificate_info;

        return $this;
    }

    /**
     * Gets certificate_signature
     * @return string
     */
    public function getCertificateSignature()
    {
        return $this->container['certificate_signature'];
    }

    /**
     * Sets certificate_signature
     * @param string $certificate_signature Certificate Signature (if any)
     * @return $this
     */
    public function setCertificateSignature($certificate_signature)
    {
        $this->container['certificate_signature'] = $certificate_signature;

        return $this;
    }

    /**
     * Gets eid
     * @return string
     */
    public function getEid()
    {
        return $this->container['eid'];
    }

    /**
     * Sets eid
     * @param string $eid External ID (if any)
     * @return $this
     */
    public function setEid($eid)
    {
        $this->container['eid'] = $eid;

        return $this;
    }

    /**
     * Gets provider_credentials
     * @return map[string,object]
     */
    public function getProviderCredentials()
    {
        return $this->container['provider_credentials'];
    }

    /**
     * Sets provider_credentials
     * @param map[string,object] $provider_credentials
     * @return $this
     */
    public function setProviderCredentials($provider_credentials)
    {
        $this->container['provider_credentials'] = $provider_credentials;

        return $this;
    }

    /**
     * Gets shared_with_others
     * @return bool
     */
    public function getSharedWithOthers()
    {
        return $this->container['shared_with_others'];
    }

    /**
     * Sets shared_with_others
     * @param bool $shared_with_others Is shared with other users
     * @return $this
     */
    public function setSharedWithOthers($shared_with_others)
    {
        $this->container['shared_with_others'] = $shared_with_others;

        return $this;
    }

    /**
     * Gets shared_with_me
     * @return string
     */
    public function getSharedWithMe()
    {
        return $this->container['shared_with_me'];
    }

    /**
     * Sets shared_with_me
     * @param string $shared_with_me Share id (if shared with me)
     * @return $this
     */
    public function setSharedWithMe($shared_with_me)
    {
        $this->container['shared_with_me'] = $shared_with_me;

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


