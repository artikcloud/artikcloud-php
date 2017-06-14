# ArtikCloud\DevicestatusApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDeviceStatus**](DevicestatusApi.md#getDeviceStatus) | **GET** /devices/{deviceId}/status | Get Device Status
[**getDevicesStatus**](DevicestatusApi.md#getDevicesStatus) | **GET** /devices/status | Get Devices Status
[**putDeviceStatus**](DevicestatusApi.md#putDeviceStatus) | **PUT** /devices/{deviceId}/status | Update Device Status


# **getDeviceStatus**
> \ArtikCloud\ArtikCloud\Model\DeviceStatus getDeviceStatus($device_id, $include_snapshot, $include_snapshot_timestamp)

Get Device Status

Get Device Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicestatusApi();
$device_id = "device_id_example"; // string | Device ID.
$include_snapshot = true; // bool | Include device snapshot into the response
$include_snapshot_timestamp = true; // bool | Include device snapshot timestamp into the response

try {
    $result = $api_instance->getDeviceStatus($device_id, $include_snapshot, $include_snapshot_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicestatusApi->getDeviceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device ID. |
 **include_snapshot** | **bool**| Include device snapshot into the response | [optional]
 **include_snapshot_timestamp** | **bool**| Include device snapshot timestamp into the response | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceStatus**](../Model/DeviceStatus.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDevicesStatus**
> \ArtikCloud\ArtikCloud\Model\DeviceStatusBatch getDevicesStatus($dids, $include_snapshot, $include_snapshot_timestamp)

Get Devices Status

Get Devices Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicestatusApi();
$dids = "dids_example"; // string | List of device ids (comma-separated) for which the statuses are requested.
$include_snapshot = true; // bool | Include device snapshot into the response
$include_snapshot_timestamp = true; // bool | Include device snapshot timestamp into the response

try {
    $result = $api_instance->getDevicesStatus($dids, $include_snapshot, $include_snapshot_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicestatusApi->getDevicesStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dids** | **string**| List of device ids (comma-separated) for which the statuses are requested. |
 **include_snapshot** | **bool**| Include device snapshot into the response | [optional]
 **include_snapshot_timestamp** | **bool**| Include device snapshot timestamp into the response | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceStatusBatch**](../Model/DeviceStatusBatch.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDeviceStatus**
> \ArtikCloud\ArtikCloud\Model\DeviceStatus putDeviceStatus($device_id, $body)

Update Device Status

Update Device Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicestatusApi();
$device_id = "device_id_example"; // string | Device ID.
$body = new \ArtikCloud\ArtikCloud\Model\DeviceStatusPut(); // \ArtikCloud\ArtikCloud\Model\DeviceStatusPut | Body

try {
    $result = $api_instance->putDeviceStatus($device_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicestatusApi->putDeviceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device ID. |
 **body** | [**\ArtikCloud\ArtikCloud\Model\DeviceStatusPut**](../Model/\ArtikCloud\ArtikCloud\Model\DeviceStatusPut.md)| Body | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceStatus**](../Model/DeviceStatus.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

