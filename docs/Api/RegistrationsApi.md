# ArtikCloud\RegistrationsApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmUser**](RegistrationsApi.md#confirmUser) | **PUT** /devices/registrations/pin | Confirm User
[**getRequestStatusForUser**](RegistrationsApi.md#getRequestStatusForUser) | **GET** /devices/registrations/{requestId}/status | Get Request Status For User
[**unregisterDevice**](RegistrationsApi.md#unregisterDevice) | **DELETE** /devices/{deviceId}/registrations | Unregister Device


# **confirmUser**
> \ArtikCloud\Model\DeviceRegConfirmUserResponseEnvelope confirmUser($registration_info)

Confirm User

This call updates the registration request issued earlier by associating it with an authenticated user and captures all additional information required to add a new device.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\RegistrationsApi();
$registration_info = new \ArtikCloud\Model\DeviceRegConfirmUserRequest(); // \ArtikCloud\Model\DeviceRegConfirmUserRequest | Device Registration information.

try {
    $result = $api_instance->confirmUser($registration_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->confirmUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_info** | [**\ArtikCloud\Model\DeviceRegConfirmUserRequest**](../Model/\ArtikCloud\Model\DeviceRegConfirmUserRequest.md)| Device Registration information. |

### Return type

[**\ArtikCloud\Model\DeviceRegConfirmUserResponseEnvelope**](../Model/DeviceRegConfirmUserResponseEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRequestStatusForUser**
> \ArtikCloud\Model\DeviceRegStatusResponseEnvelope getRequestStatusForUser($request_id)

Get Request Status For User

This call checks the status of the request so users can poll and know when registration is complete.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\RegistrationsApi();
$request_id = "request_id_example"; // string | Request ID.

try {
    $result = $api_instance->getRequestStatusForUser($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->getRequestStatusForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_id** | **string**| Request ID. |

### Return type

[**\ArtikCloud\Model\DeviceRegStatusResponseEnvelope**](../Model/DeviceRegStatusResponseEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unregisterDevice**
> \ArtikCloud\Model\UnregisterDeviceResponseEnvelope unregisterDevice($device_id)

Unregister Device

This call clears any associations from the secure device registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\RegistrationsApi();
$device_id = "device_id_example"; // string | Device ID.

try {
    $result = $api_instance->unregisterDevice($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->unregisterDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device ID. |

### Return type

[**\ArtikCloud\Model\UnregisterDeviceResponseEnvelope**](../Model/UnregisterDeviceResponseEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

