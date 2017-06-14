# ArtikCloud\ExportApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportRequest**](ExportApi.md#exportRequest) | **POST** /messages/export | Create Export Request
[**getExportHistory**](ExportApi.md#getExportHistory) | **GET** /messages/export/history | Get Export History
[**getExportResult**](ExportApi.md#getExportResult) | **GET** /messages/export/{exportId}/result | Get Export Result
[**getExportStatus**](ExportApi.md#getExportStatus) | **GET** /messages/export/{exportId}/status | Check Export Status


# **exportRequest**
> \ArtikCloud\ArtikCloud\Model\ExportRequestResponse exportRequest($export_request_info)

Create Export Request

Export normalized messages. The following input combinations are supported:<br/><table><tr><th>Combination</th><th>Parameters</th><th>Description</th></tr><tr><td>Get by users</td><td>uids</td><td>Search by a list of User IDs. For each user in the list, the current authenticated user must have read access over the specified user.</td></tr><tr><td>Get by devices</td><td>sdids</td><td>Search by Source Device IDs.</td></tr><tr><td>Get by device types</td><td>uids,sdtids</td><td>Search by list of Source Device Type IDs for the given list of users.</td></tr><tr><td>Get by trial</td><td>trialId</td><td>Search by Trial ID.</td></tr><tr><td>Get by combination of parameters</td><td>uids,sdids,sdtids</td><td>Search by list of Source Device IDs. Each Device ID must belong to a Source Device Type ID and a User ID.</td></tr><tr><td>Common</td><td>startDate,endDate,order,format,url,csvHeaders</td><td>Parameters that can be used with the above combinations.</td></tr></table>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\ExportApi();
$export_request_info = new \ArtikCloud\ArtikCloud\Model\ExportRequestInfo(); // \ArtikCloud\ArtikCloud\Model\ExportRequestInfo | ExportRequest object that is passed in the body

try {
    $result = $api_instance->exportRequest($export_request_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_request_info** | [**\ArtikCloud\ArtikCloud\Model\ExportRequestInfo**](../Model/\ArtikCloud\ArtikCloud\Model\ExportRequestInfo.md)| ExportRequest object that is passed in the body |

### Return type

[**\ArtikCloud\ArtikCloud\Model\ExportRequestResponse**](../Model/ExportRequestResponse.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExportHistory**
> \ArtikCloud\ArtikCloud\Model\ExportHistoryResponse getExportHistory($trial_id, $count, $offset)

Get Export History

Get the history of export requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\ExportApi();
$trial_id = "trial_id_example"; // string | Filter by trialId.
$count = 56; // int | Pagination count.
$offset = 56; // int | Pagination offset.

try {
    $result = $api_instance->getExportHistory($trial_id, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getExportHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trial_id** | **string**| Filter by trialId. | [optional]
 **count** | **int**| Pagination count. | [optional]
 **offset** | **int**| Pagination offset. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\ExportHistoryResponse**](../Model/ExportHistoryResponse.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExportResult**
> string getExportResult($export_id)

Get Export Result

Retrieve result of the export query in tgz format. The tar file may contain one or more files with the results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\ExportApi();
$export_id = "export_id_example"; // string | Export ID of the export query.

try {
    $result = $api_instance->getExportResult($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getExportResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_id** | **string**| Export ID of the export query. |

### Return type

**string**

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExportStatus**
> \ArtikCloud\ArtikCloud\Model\ExportStatusResponse getExportStatus($export_id)

Check Export Status

Check status of the export query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\ExportApi();
$export_id = "export_id_example"; // string | Export ID of the export query.

try {
    $result = $api_instance->getExportStatus($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->getExportStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_id** | **string**| Export ID of the export query. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\ExportStatusResponse**](../Model/ExportStatusResponse.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

