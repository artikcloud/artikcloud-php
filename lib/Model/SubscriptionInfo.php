<?php
/**
 * SubscriptionInfo
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
 * SubscriptionInfo Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     ArtikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionInfo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aws_region' => 'string',
        'description' => 'string',
        'aws_key' => 'string',
        'aws_secret' => 'string',
        'aws_kinesis_stream_name' => 'string',
        'uid' => 'string',
        'message_type' => 'string',
        'ddid' => 'string',
        'subscription_type' => 'string',
        'name' => 'string',
        'sdid' => 'string',
        'callback_url' => 'string',
        'sdtid' => 'string'
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
        'aws_region' => 'awsRegion',
        'description' => 'description',
        'aws_key' => 'awsKey',
        'aws_secret' => 'awsSecret',
        'aws_kinesis_stream_name' => 'awsKinesisStreamName',
        'uid' => 'uid',
        'message_type' => 'messageType',
        'ddid' => 'ddid',
        'subscription_type' => 'subscriptionType',
        'name' => 'name',
        'sdid' => 'sdid',
        'callback_url' => 'callbackUrl',
        'sdtid' => 'sdtid'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'aws_region' => 'setAwsRegion',
        'description' => 'setDescription',
        'aws_key' => 'setAwsKey',
        'aws_secret' => 'setAwsSecret',
        'aws_kinesis_stream_name' => 'setAwsKinesisStreamName',
        'uid' => 'setUid',
        'message_type' => 'setMessageType',
        'ddid' => 'setDdid',
        'subscription_type' => 'setSubscriptionType',
        'name' => 'setName',
        'sdid' => 'setSdid',
        'callback_url' => 'setCallbackUrl',
        'sdtid' => 'setSdtid'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'aws_region' => 'getAwsRegion',
        'description' => 'getDescription',
        'aws_key' => 'getAwsKey',
        'aws_secret' => 'getAwsSecret',
        'aws_kinesis_stream_name' => 'getAwsKinesisStreamName',
        'uid' => 'getUid',
        'message_type' => 'getMessageType',
        'ddid' => 'getDdid',
        'subscription_type' => 'getSubscriptionType',
        'name' => 'getName',
        'sdid' => 'getSdid',
        'callback_url' => 'getCallbackUrl',
        'sdtid' => 'getSdtid'
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
        $this->container['aws_region'] = isset($data['aws_region']) ? $data['aws_region'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['aws_key'] = isset($data['aws_key']) ? $data['aws_key'] : null;
        $this->container['aws_secret'] = isset($data['aws_secret']) ? $data['aws_secret'] : null;
        $this->container['aws_kinesis_stream_name'] = isset($data['aws_kinesis_stream_name']) ? $data['aws_kinesis_stream_name'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['message_type'] = isset($data['message_type']) ? $data['message_type'] : null;
        $this->container['ddid'] = isset($data['ddid']) ? $data['ddid'] : null;
        $this->container['subscription_type'] = isset($data['subscription_type']) ? $data['subscription_type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sdid'] = isset($data['sdid']) ? $data['sdid'] : null;
        $this->container['callback_url'] = isset($data['callback_url']) ? $data['callback_url'] : null;
        $this->container['sdtid'] = isset($data['sdtid']) ? $data['sdtid'] : null;
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
     * Gets aws_region
     * @return string
     */
    public function getAwsRegion()
    {
        return $this->container['aws_region'];
    }

    /**
     * Sets aws_region
     * @param string $aws_region AWS region (if subscriptionType is awsKinesis
     * @return $this
     */
    public function setAwsRegion($aws_region)
    {
        $this->container['aws_region'] = $aws_region;

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
     * Gets aws_key
     * @return string
     */
    public function getAwsKey()
    {
        return $this->container['aws_key'];
    }

    /**
     * Sets aws_key
     * @param string $aws_key AWS key (if subscriptionType is awsKinesis
     * @return $this
     */
    public function setAwsKey($aws_key)
    {
        $this->container['aws_key'] = $aws_key;

        return $this;
    }

    /**
     * Gets aws_secret
     * @return string
     */
    public function getAwsSecret()
    {
        return $this->container['aws_secret'];
    }

    /**
     * Sets aws_secret
     * @param string $aws_secret AWS secret (if subscriptionType is awsKinesis
     * @return $this
     */
    public function setAwsSecret($aws_secret)
    {
        $this->container['aws_secret'] = $aws_secret;

        return $this;
    }

    /**
     * Gets aws_kinesis_stream_name
     * @return string
     */
    public function getAwsKinesisStreamName()
    {
        return $this->container['aws_kinesis_stream_name'];
    }

    /**
     * Sets aws_kinesis_stream_name
     * @param string $aws_kinesis_stream_name AWS Kinesis stream name (if subscriptionType is awsKinesis
     * @return $this
     */
    public function setAwsKinesisStreamName($aws_kinesis_stream_name)
    {
        $this->container['aws_kinesis_stream_name'] = $aws_kinesis_stream_name;

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
     * Gets message_type
     * @return string
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     * @param string $message_type Message type
     * @return $this
     */
    public function setMessageType($message_type)
    {
        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets ddid
     * @return string
     */
    public function getDdid()
    {
        return $this->container['ddid'];
    }

    /**
     * Sets ddid
     * @param string $ddid Destination device ID
     * @return $this
     */
    public function setDdid($ddid)
    {
        $this->container['ddid'] = $ddid;

        return $this;
    }

    /**
     * Gets subscription_type
     * @return string
     */
    public function getSubscriptionType()
    {
        return $this->container['subscription_type'];
    }

    /**
     * Sets subscription_type
     * @param string $subscription_type Subscription type (either httpCallback or awsKinesis, default to httpCallback)
     * @return $this
     */
    public function setSubscriptionType($subscription_type)
    {
        $this->container['subscription_type'] = $subscription_type;

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
     * Gets sdid
     * @return string
     */
    public function getSdid()
    {
        return $this->container['sdid'];
    }

    /**
     * Sets sdid
     * @param string $sdid Source device ID
     * @return $this
     */
    public function setSdid($sdid)
    {
        $this->container['sdid'] = $sdid;

        return $this;
    }

    /**
     * Gets callback_url
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     * @param string $callback_url Callback URL
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets sdtid
     * @return string
     */
    public function getSdtid()
    {
        return $this->container['sdtid'];
    }

    /**
     * Sets sdtid
     * @param string $sdtid Source device type ID
     * @return $this
     */
    public function setSdtid($sdtid)
    {
        $this->container['sdtid'] = $sdtid;

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


