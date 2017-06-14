# SubscriptionInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aws_region** | **string** | AWS region (if subscriptionType is awsKinesis | [optional] 
**description** | **string** | Description | [optional] 
**aws_key** | **string** | AWS key (if subscriptionType is awsKinesis | [optional] 
**aws_secret** | **string** | AWS secret (if subscriptionType is awsKinesis | [optional] 
**aws_kinesis_stream_name** | **string** | AWS Kinesis stream name (if subscriptionType is awsKinesis | [optional] 
**uid** | **string** | User ID | [optional] 
**message_type** | **string** | Message type | [optional] 
**ddid** | **string** | Destination device ID | [optional] 
**subscription_type** | **string** | Subscription type (either httpCallback or awsKinesis, default to httpCallback) | [optional] 
**name** | **string** | Name | [optional] 
**sdid** | **string** | Source device ID | [optional] 
**callback_url** | **string** | Callback URL | [optional] 
**sdtid** | **string** | Source device type ID | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


