# ArtikCloud\DevicessharesApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShareForDevice**](DevicessharesApi.md#createShareForDevice) | **POST** in/api/devices/{deviceId}/shares | Share a device
[**deleteSharingForDevice**](DevicessharesApi.md#deleteSharingForDevice) | **DELETE** in/api/devices/{deviceId}/shares/{shareId} | Delete specific share of the given device id
[**getAllSharesForDevice**](DevicessharesApi.md#getAllSharesForDevice) | **GET** in/api/devices/{deviceId}/shares | List all shares for the given device id
[**getSharingForDevice**](DevicessharesApi.md#getSharingForDevice) | **GET** in/api/devices/{deviceId}/shares/{shareId} | Get specific share of the given device id


# **createShareForDevice**
> \ArtikCloud\ArtikCloud\Model\DeviceSharingId createShareForDevice($device_id, $device_share_info)

Share a device

Share a device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicessharesApi();
$device_id = "device_id_example"; // string | Device ID.
$device_share_info = new \ArtikCloud\ArtikCloud\Model\DeviceShareInfo(); // \ArtikCloud\ArtikCloud\Model\DeviceShareInfo | Device object that needs to be added

try {
    $result = $api_instance->createShareForDevice($device_id, $device_share_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicessharesApi->createShareForDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device ID. |
 **device_share_info** | [**\ArtikCloud\ArtikCloud\Model\DeviceShareInfo**](../Model/\ArtikCloud\ArtikCloud\Model\DeviceShareInfo.md)| Device object that needs to be added |

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceSharingId**](../Model/DeviceSharingId.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSharingForDevice**
> \ArtikCloud\ArtikCloud\Model\DeviceSharingId deleteSharingForDevice($device_id, $share_id)

Delete specific share of the given device id

Delete specific share of the given device id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicessharesApi();
$device_id = "device_id_example"; // string | Device ID.
$share_id = "share_id_example"; // string | Share ID.

try {
    $result = $api_instance->deleteSharingForDevice($device_id, $share_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicessharesApi->deleteSharingForDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device ID. |
 **share_id** | **string**| Share ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceSharingId**](../Model/DeviceSharingId.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSharesForDevice**
> \ArtikCloud\ArtikCloud\Model\DeviceSharingEnvelope getAllSharesForDevice($device_id, $count, $offset)

List all shares for the given device id

List all shares for the given device id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicessharesApi();
$device_id = "device_id_example"; // string | Device ID.
$count = 56; // int | Desired count of items in the result set.
$offset = 56; // int | Offset for pagination.

try {
    $result = $api_instance->getAllSharesForDevice($device_id, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicessharesApi->getAllSharesForDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device ID. |
 **count** | **int**| Desired count of items in the result set. | [optional]
 **offset** | **int**| Offset for pagination. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceSharingEnvelope**](../Model/DeviceSharingEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSharingForDevice**
> \ArtikCloud\ArtikCloud\Model\DeviceSharing getSharingForDevice($device_id, $share_id)

Get specific share of the given device id

Get specific share of the given device id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicessharesApi();
$device_id = "device_id_example"; // string | Device ID.
$share_id = "share_id_example"; // string | Share ID.

try {
    $result = $api_instance->getSharingForDevice($device_id, $share_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicessharesApi->getSharingForDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| Device ID. |
 **share_id** | **string**| Share ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceSharing**](../Model/DeviceSharing.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

