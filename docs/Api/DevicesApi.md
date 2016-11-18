# ArtikCloud\DevicesApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDevice**](DevicesApi.md#addDevice) | **POST** /devices | Add Device
[**deleteDevice**](DevicesApi.md#deleteDevice) | **DELETE** /devices/{deviceId} | Delete Device
[**deleteDeviceToken**](DevicesApi.md#deleteDeviceToken) | **DELETE** /devices/{deviceId}/tokens | Delete Device Token
[**getDevice**](DevicesApi.md#getDevice) | **GET** /devices/{deviceId} | Get Device
[**getDevicePresence**](DevicesApi.md#getDevicePresence) | **GET** /devices/{deviceId}/presence | Get device presence information
[**getDeviceToken**](DevicesApi.md#getDeviceToken) | **GET** /devices/{deviceId}/tokens | Get Device Token
[**updateDevice**](DevicesApi.md#updateDevice) | **PUT** /devices/{deviceId} | Update Device
[**updateDeviceToken**](DevicesApi.md#updateDeviceToken) | **PUT** /devices/{deviceId}/tokens | Update Device Token


# **addDevice**
> \ArtikCloud\Model\DeviceEnvelope addDevice($device)

Add Device

Create a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesApi();
$device = new \ArtikCloud\Model\Device(); // \ArtikCloud\Model\Device | Device to be added to the user

try {
    $result = $api_instance->addDevice($device);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->addDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device** | [**\ArtikCloud\Model\Device**](../Model/\ArtikCloud\Model\Device.md)| Device to be added to the user |

### Return type

[**\ArtikCloud\Model\DeviceEnvelope**](../Model/DeviceEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDevice**
> \ArtikCloud\Model\DeviceEnvelope deleteDevice($device_id)

Delete Device

Deletes a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesApi();
$device_id = "device_id_example"; // string | deviceId

try {
    $result = $api_instance->deleteDevice($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deleteDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| deviceId |

### Return type

[**\ArtikCloud\Model\DeviceEnvelope**](../Model/DeviceEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeviceToken**
> \ArtikCloud\Model\DeviceTokenEnvelope deleteDeviceToken($device_id)

Delete Device Token

Deletes a device's token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesApi();
$device_id = "device_id_example"; // string | deviceId

try {
    $result = $api_instance->deleteDeviceToken($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deleteDeviceToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| deviceId |

### Return type

[**\ArtikCloud\Model\DeviceTokenEnvelope**](../Model/DeviceTokenEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDevice**
> \ArtikCloud\Model\DeviceEnvelope getDevice($device_id)

Get Device

Retrieves a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesApi();
$device_id = "device_id_example"; // string | deviceId

try {
    $result = $api_instance->getDevice($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| deviceId |

### Return type

[**\ArtikCloud\Model\DeviceEnvelope**](../Model/DeviceEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDevicePresence**
> \ArtikCloud\Model\PresenceEnvelope getDevicePresence($device_id)

Get device presence information

Return the presence status of the given device along with the time it was last seen

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesApi();
$device_id = "device_id_example"; // string | Device ID.

try {
    $result = $api_instance->getDevicePresence($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDevicePresence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device ID. |

### Return type

[**\ArtikCloud\Model\PresenceEnvelope**](../Model/PresenceEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceToken**
> \ArtikCloud\Model\DeviceTokenEnvelope getDeviceToken($device_id)

Get Device Token

Retrieves a device's token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesApi();
$device_id = "device_id_example"; // string | deviceId

try {
    $result = $api_instance->getDeviceToken($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| deviceId |

### Return type

[**\ArtikCloud\Model\DeviceTokenEnvelope**](../Model/DeviceTokenEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDevice**
> \ArtikCloud\Model\DeviceEnvelope updateDevice($device_id, $device)

Update Device

Updates a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesApi();
$device_id = "device_id_example"; // string | deviceId
$device = new \ArtikCloud\Model\Device(); // \ArtikCloud\Model\Device | Device to be updated

try {
    $result = $api_instance->updateDevice($device_id, $device);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->updateDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| deviceId |
 **device** | [**\ArtikCloud\Model\Device**](../Model/\ArtikCloud\Model\Device.md)| Device to be updated |

### Return type

[**\ArtikCloud\Model\DeviceEnvelope**](../Model/DeviceEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDeviceToken**
> \ArtikCloud\Model\DeviceTokenEnvelope updateDeviceToken($device_id)

Update Device Token

Updates a device's token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesApi();
$device_id = "device_id_example"; // string | deviceId

try {
    $result = $api_instance->updateDeviceToken($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->updateDeviceToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| deviceId |

### Return type

[**\ArtikCloud\Model\DeviceTokenEnvelope**](../Model/DeviceTokenEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

