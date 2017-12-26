# ArtikCloud\WhitelistingApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteVdid**](WhitelistingApi.md#deleteVdid) | **DELETE** /devicetypes/{dtid}/whitelist/{vdid} | Delete a vdid from the devicetype whitelist.
[**deleteWhitelistCertificate**](WhitelistingApi.md#deleteWhitelistCertificate) | **DELETE** /devicetypes/{dtid}/whitelist/certificates/{cid} | Delete a whitelist certificate associated with a devicetype.
[**enableWhitelist**](WhitelistingApi.md#enableWhitelist) | **PUT** /devicetypes/:dtid/whitelist/enable | Enable or disble whitelist feature of a device type
[**getRejectedRowList**](WhitelistingApi.md#getRejectedRowList) | **GET** /devicetypes/{dtid}/whitelist/{uploadId}/rejectedRows | Get the list of rejected rows for an uploaded CSV file.
[**getUploadStatus**](WhitelistingApi.md#getUploadStatus) | **GET** /devicetypes/{dtid}/whitelist/{uploadId}/status | Get the status of a uploaded CSV file.
[**getWhitelist**](WhitelistingApi.md#getWhitelist) | **GET** /devicetypes/{dtid}/whitelist | Get whitelisted vdids of a device type.
[**getWhitelistCertificate**](WhitelistingApi.md#getWhitelistCertificate) | **GET** /devicetypes/{dtid}/whitelist/certificates | Get whitelist certificate of device type.
[**getWhitelistStatus**](WhitelistingApi.md#getWhitelistStatus) | **GET** /devicetypes/{dtid}/whitelist/status | Get the status of whitelist feature (enabled/disabled) of a device type.
[**uploadCSV**](WhitelistingApi.md#uploadCSV) | **POST** /devicetypes/{dtid}/whitelist | Upload a CSV file related to the Device Type.


# **deleteVdid**
> \ArtikCloud\ArtikCloud\Model\WhitelistEnvelope deleteVdid($dtid, $vdid)

Delete a vdid from the devicetype whitelist.

Delete a vdid from the devicetype whitelist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\WhitelistingApi();
$dtid = "dtid_example"; // string | Device Type ID.
$vdid = "vdid_example"; // string | Vendor Device ID.

try {
    $result = $api_instance->deleteVdid($dtid, $vdid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistingApi->deleteVdid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device Type ID. |
 **vdid** | **string**| Vendor Device ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope**](../Model/WhitelistEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWhitelistCertificate**
> \ArtikCloud\ArtikCloud\Model\WhitelistEnvelope deleteWhitelistCertificate($dtid, $cid)

Delete a whitelist certificate associated with a devicetype.

Delete a whitelist certificate associated with a devicetype.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\WhitelistingApi();
$dtid = "dtid_example"; // string | Device Type ID.
$cid = "cid_example"; // string | Certificate ID.

try {
    $result = $api_instance->deleteWhitelistCertificate($dtid, $cid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistingApi->deleteWhitelistCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device Type ID. |
 **cid** | **string**| Certificate ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope**](../Model/WhitelistEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableWhitelist**
> \ArtikCloud\ArtikCloud\Model\WhitelistEnvelope enableWhitelist($dtid, $device_type_update_info)

Enable or disble whitelist feature of a device type

Enable or disble whitelist feature of a device type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\WhitelistingApi();
$dtid = "dtid_example"; // string | Device Type ID.
$device_type_update_info = new \ArtikCloud\ArtikCloud\Model\DeviceTypeUpdateInput(); // \ArtikCloud\ArtikCloud\Model\DeviceTypeUpdateInput | Device type update input.

try {
    $result = $api_instance->enableWhitelist($dtid, $device_type_update_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistingApi->enableWhitelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device Type ID. |
 **device_type_update_info** | [**\ArtikCloud\ArtikCloud\Model\DeviceTypeUpdateInput**](../Model/\ArtikCloud\ArtikCloud\Model\DeviceTypeUpdateInput.md)| Device type update input. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope**](../Model/WhitelistEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRejectedRowList**
> \ArtikCloud\ArtikCloud\Model\RejectedCSVRowsEnvelope getRejectedRowList($dtid, $upload_id, $count, $offset)

Get the list of rejected rows for an uploaded CSV file.

Get the list of rejected rows for an uploaded CSV file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\WhitelistingApi();
$dtid = "dtid_example"; // string | Device type id related to the uploaded CSV file.
$upload_id = "upload_id_example"; // string | Upload id related to the uploaded CSV file.
$count = 56; // int | Max results count.
$offset = 56; // int | Result starting offset.

try {
    $result = $api_instance->getRejectedRowList($dtid, $upload_id, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistingApi->getRejectedRowList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device type id related to the uploaded CSV file. |
 **upload_id** | **string**| Upload id related to the uploaded CSV file. |
 **count** | **int**| Max results count. | [optional]
 **offset** | **int**| Result starting offset. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\RejectedCSVRowsEnvelope**](../Model/RejectedCSVRowsEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUploadStatus**
> \ArtikCloud\ArtikCloud\Model\UploadStatusEnvelope getUploadStatus($dtid, $upload_id)

Get the status of a uploaded CSV file.

Get the status of a uploaded CSV file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\WhitelistingApi();
$dtid = "dtid_example"; // string | Device type id related to the uploaded CSV file.
$upload_id = "upload_id_example"; // string | Upload id related to the uploaded CSV file.

try {
    $result = $api_instance->getUploadStatus($dtid, $upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistingApi->getUploadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device type id related to the uploaded CSV file. |
 **upload_id** | **string**| Upload id related to the uploaded CSV file. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\UploadStatusEnvelope**](../Model/UploadStatusEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWhitelist**
> \ArtikCloud\ArtikCloud\Model\WhitelistResultEnvelope getWhitelist($dtid, $count, $offset)

Get whitelisted vdids of a device type.

Get whitelisted vdids of a device type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\WhitelistingApi();
$dtid = "dtid_example"; // string | Device Type ID.
$count = 56; // int | Max results count.
$offset = 56; // int | Result starting offset.

try {
    $result = $api_instance->getWhitelist($dtid, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistingApi->getWhitelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device Type ID. |
 **count** | **int**| Max results count. | [optional]
 **offset** | **int**| Result starting offset. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\WhitelistResultEnvelope**](../Model/WhitelistResultEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWhitelistCertificate**
> \ArtikCloud\ArtikCloud\Model\CertificateEnvelope getWhitelistCertificate($dtid)

Get whitelist certificate of device type.

Get whitelist certificate of device type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\WhitelistingApi();
$dtid = "dtid_example"; // string | Device Type ID.

try {
    $result = $api_instance->getWhitelistCertificate($dtid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistingApi->getWhitelistCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device Type ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\CertificateEnvelope**](../Model/CertificateEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWhitelistStatus**
> \ArtikCloud\ArtikCloud\Model\WhitelistEnvelope getWhitelistStatus($dtid)

Get the status of whitelist feature (enabled/disabled) of a device type.

Get the status of whitelist feature (enabled/disabled) of a device type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\WhitelistingApi();
$dtid = "dtid_example"; // string | Device Type ID.

try {
    $result = $api_instance->getWhitelistStatus($dtid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistingApi->getWhitelistStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device Type ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope**](../Model/WhitelistEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadCSV**
> \ArtikCloud\ArtikCloud\Model\UploadIdEnvelope uploadCSV($dtid, $file)

Upload a CSV file related to the Device Type.

Upload a CSV file related to the Device Type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\WhitelistingApi();
$dtid = "dtid_example"; // string | Device Type ID.
$file = "B"; // string | Device Type ID.

try {
    $result = $api_instance->uploadCSV($dtid, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhitelistingApi->uploadCSV: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device Type ID. |
 **file** | **string**| Device Type ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\UploadIdEnvelope**](../Model/UploadIdEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

