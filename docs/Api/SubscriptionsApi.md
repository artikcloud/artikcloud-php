# ArtikCloud\SubscriptionsApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubscription**](SubscriptionsApi.md#createSubscription) | **POST** /subscriptions | Create Subscription
[**deleteSubscription**](SubscriptionsApi.md#deleteSubscription) | **DELETE** /subscriptions/{subId} | Delete Subscription
[**getAllSubscriptions**](SubscriptionsApi.md#getAllSubscriptions) | **GET** /subscriptions | Get All Subscriptions
[**getMessages**](SubscriptionsApi.md#getMessages) | **GET** /notifications/{notifId}/messages | Get Messages
[**getSubscription**](SubscriptionsApi.md#getSubscription) | **GET** /subscriptions/{subId} | Get Subscription
[**validateSubscription**](SubscriptionsApi.md#validateSubscription) | **POST** /subscriptions/{subId}/validate | Validate Subscription


# **createSubscription**
> \ArtikCloud\ArtikCloud\Model\SubscriptionEnvelope createSubscription($subscription_info)

Create Subscription

Create Subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\SubscriptionsApi();
$subscription_info = new \ArtikCloud\ArtikCloud\Model\SubscriptionInfo(); // \ArtikCloud\ArtikCloud\Model\SubscriptionInfo | Subscription details

try {
    $result = $api_instance->createSubscription($subscription_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_info** | [**\ArtikCloud\ArtikCloud\Model\SubscriptionInfo**](../Model/\ArtikCloud\ArtikCloud\Model\SubscriptionInfo.md)| Subscription details |

### Return type

[**\ArtikCloud\ArtikCloud\Model\SubscriptionEnvelope**](../Model/SubscriptionEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscription**
> \ArtikCloud\ArtikCloud\Model\SubscriptionEnvelope deleteSubscription($sub_id)

Delete Subscription

Delete Subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\SubscriptionsApi();
$sub_id = "sub_id_example"; // string | Subscription ID.

try {
    $result = $api_instance->deleteSubscription($sub_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_id** | **string**| Subscription ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\SubscriptionEnvelope**](../Model/SubscriptionEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSubscriptions**
> \ArtikCloud\ArtikCloud\Model\SubscriptionsEnvelope getAllSubscriptions($uid, $offset, $count)

Get All Subscriptions

Get All Subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\SubscriptionsApi();
$uid = "uid_example"; // string | User ID
$offset = 56; // int | Offset for pagination.
$count = 56; // int | Desired count of items in the result set.

try {
    $result = $api_instance->getAllSubscriptions($uid, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getAllSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| User ID | [optional]
 **offset** | **int**| Offset for pagination. | [optional]
 **count** | **int**| Desired count of items in the result set. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\SubscriptionsEnvelope**](../Model/SubscriptionsEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessages**
> \ArtikCloud\ArtikCloud\Model\NotifMessagesResponse getMessages($notif_id, $offset, $count, $order)

Get Messages

Get Messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\SubscriptionsApi();
$notif_id = "notif_id_example"; // string | Notification ID.
$offset = 56; // int | Offset for pagination.
$count = 56; // int | Desired count of items in the result set.
$order = "order_example"; // string | Sort order of results by ts. Either 'asc' or 'desc'.

try {
    $result = $api_instance->getMessages($notif_id, $offset, $count, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notif_id** | **string**| Notification ID. |
 **offset** | **int**| Offset for pagination. | [optional]
 **count** | **int**| Desired count of items in the result set. | [optional]
 **order** | **string**| Sort order of results by ts. Either &#39;asc&#39; or &#39;desc&#39;. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\NotifMessagesResponse**](../Model/NotifMessagesResponse.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \ArtikCloud\ArtikCloud\Model\SubscriptionEnvelope getSubscription($sub_id)

Get Subscription

Get Subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\SubscriptionsApi();
$sub_id = "sub_id_example"; // string | Subscription ID.

try {
    $result = $api_instance->getSubscription($sub_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_id** | **string**| Subscription ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\SubscriptionEnvelope**](../Model/SubscriptionEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateSubscription**
> \ArtikCloud\ArtikCloud\Model\SubscriptionEnvelope validateSubscription($sub_id, $validation_callback_request)

Validate Subscription

Validate Subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\SubscriptionsApi();
$sub_id = "sub_id_example"; // string | Subscription ID.
$validation_callback_request = new \ArtikCloud\ArtikCloud\Model\ValidationCallbackInfo(); // \ArtikCloud\ArtikCloud\Model\ValidationCallbackInfo | Subscription validation callback request

try {
    $result = $api_instance->validateSubscription($sub_id, $validation_callback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->validateSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_id** | **string**| Subscription ID. |
 **validation_callback_request** | [**\ArtikCloud\ArtikCloud\Model\ValidationCallbackInfo**](../Model/\ArtikCloud\ArtikCloud\Model\ValidationCallbackInfo.md)| Subscription validation callback request |

### Return type

[**\ArtikCloud\ArtikCloud\Model\SubscriptionEnvelope**](../Model/SubscriptionEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

