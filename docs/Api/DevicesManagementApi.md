# ArtikCloud\DevicesManagementApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTasks**](DevicesManagementApi.md#createTasks) | **POST** /devicemgmt/tasks | Create a new task for one or more devices
[**deleteServerProperties**](DevicesManagementApi.md#deleteServerProperties) | **DELETE** /devicemgmt/devices/{did}/serverproperties | Deletes a device&#39;s properties.
[**getAllByDid**](DevicesManagementApi.md#getAllByDid) | **GET** /devicemgmt/devices/{did}/tasks | Returns the list of tasks for a particular device id with optional status filter.
[**getDeviceTypesInfo**](DevicesManagementApi.md#getDeviceTypesInfo) | **GET** /devicemgmt/devicetypes/{dtid} | Read a device type device management information.
[**getManifestProperties**](DevicesManagementApi.md#getManifestProperties) | **GET** /devicemgmt/devicetypes/{dtid}/manifest/properties | Get a device type&#39;s device management manifest properties
[**getProperties**](DevicesManagementApi.md#getProperties) | **GET** /devicemgmt/devices/{did}/properties | Read a device&#39;s properties.
[**getStatuses**](DevicesManagementApi.md#getStatuses) | **GET** /devicemgmt/tasks/{tid}/statuses | Returns the details and status of a task id and the individual statuses of each device id in the list.
[**getStatusesHistory**](DevicesManagementApi.md#getStatusesHistory) | **GET** /devicemgmt/tasks/{tid}/statuses/history | Returns the history of the status changes for a specific task id, or for a specific device id in that task.
[**getTaskByID**](DevicesManagementApi.md#getTaskByID) | **GET** /devicemgmt/tasks/{tid} | Returns the details and global status of a specific task id.
[**getTasks**](DevicesManagementApi.md#getTasks) | **GET** /devicemgmt/tasks | Returns the all the tasks for a device type.
[**queryProperties**](DevicesManagementApi.md#queryProperties) | **GET** /devicemgmt/devices/properties | Query device properties across devices.
[**updateDeviceTypesInfo**](DevicesManagementApi.md#updateDeviceTypesInfo) | **PUT** /devicemgmt/devicetypes/{dtid} | Updates a device type information
[**updateServerProperties**](DevicesManagementApi.md#updateServerProperties) | **POST** /devicemgmt/devices/{did}/serverproperties | Updates a device&#39;s server properties.
[**updateTask**](DevicesManagementApi.md#updateTask) | **PUT** /devicemgmt/tasks/{tid} | Updates a task for all devices - For now just allows changing the state to cancelled.
[**updateTaskForDevice**](DevicesManagementApi.md#updateTaskForDevice) | **PUT** /devicemgmt/tasks/{tid}/devices/{did} | Updates a task for a specific device - For now just allows changing the state to cancelled.


# **createTasks**
> \ArtikCloud\ArtikCloud\Model\TaskEnvelope createTasks($task_payload)

Create a new task for one or more devices

Create a new task for one or more devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$task_payload = new \ArtikCloud\ArtikCloud\Model\TaskRequest(); // \ArtikCloud\ArtikCloud\Model\TaskRequest | Task object to be created

try {
    $result = $api_instance->createTasks($task_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->createTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_payload** | [**\ArtikCloud\ArtikCloud\Model\TaskRequest**](../Model/\ArtikCloud\ArtikCloud\Model\TaskRequest.md)| Task object to be created |

### Return type

[**\ArtikCloud\ArtikCloud\Model\TaskEnvelope**](../Model/TaskEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteServerProperties**
> \ArtikCloud\ArtikCloud\Model\MetadataEnvelope deleteServerProperties($did)

Deletes a device's properties.

Deletes a device's properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$did = "did_example"; // string | Device ID.

try {
    $result = $api_instance->deleteServerProperties($did);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->deleteServerProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **did** | **string**| Device ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\MetadataEnvelope**](../Model/MetadataEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllByDid**
> \ArtikCloud\ArtikCloud\Model\TaskByDidListEnvelope getAllByDid($did, $count, $offset, $status, $order, $sort)

Returns the list of tasks for a particular device id with optional status filter.

Returns the list of tasks for a particular device id with optional status filter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$did = "did_example"; // string | Device ID.
$count = 56; // int | Max results count.
$offset = 56; // int | Result starting offset.
$status = "status_example"; // string | Status filter. Comma-separated statuses.
$order = "order_example"; // string | Sort results by a field. Valid fields: createdOn.
$sort = "sort_example"; // string | Sort order. Valid values: asc or desc.

try {
    $result = $api_instance->getAllByDid($did, $count, $offset, $status, $order, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->getAllByDid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **did** | **string**| Device ID. |
 **count** | **int**| Max results count. | [optional]
 **offset** | **int**| Result starting offset. | [optional]
 **status** | **string**| Status filter. Comma-separated statuses. | [optional]
 **order** | **string**| Sort results by a field. Valid fields: createdOn. | [optional]
 **sort** | **string**| Sort order. Valid values: asc or desc. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\TaskByDidListEnvelope**](../Model/TaskByDidListEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceTypesInfo**
> \ArtikCloud\ArtikCloud\Model\DeviceTypesInfoEnvelope getDeviceTypesInfo($dtid)

Read a device type device management information.

Read a device type device management information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$dtid = "dtid_example"; // string | Device type ID.

try {
    $result = $api_instance->getDeviceTypesInfo($dtid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->getDeviceTypesInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device type ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceTypesInfoEnvelope**](../Model/DeviceTypesInfoEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManifestProperties**
> \ArtikCloud\ArtikCloud\Model\MetadataPropertiesEnvelope getManifestProperties($dtid)

Get a device type's device management manifest properties

Get a device type's device management manifest properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$dtid = "dtid_example"; // string | Device Type ID.

try {
    $result = $api_instance->getManifestProperties($dtid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->getManifestProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device Type ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\MetadataPropertiesEnvelope**](../Model/MetadataPropertiesEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProperties**
> \ArtikCloud\ArtikCloud\Model\MetadataEnvelope getProperties($did, $include_timestamp)

Read a device's properties.

Read a device's properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$did = "did_example"; // string | Device ID.
$include_timestamp = true; // bool | Include timestamp.

try {
    $result = $api_instance->getProperties($did, $include_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->getProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **did** | **string**| Device ID. |
 **include_timestamp** | **bool**| Include timestamp. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\MetadataEnvelope**](../Model/MetadataEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatuses**
> \ArtikCloud\ArtikCloud\Model\TaskStatusesEnvelope getStatuses($tid, $count, $offset, $status, $dids)

Returns the details and status of a task id and the individual statuses of each device id in the list.

Returns the details and status of a task id and the individual statuses of each device id in the list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$tid = "tid_example"; // string | Task ID.
$count = 56; // int | Max results count.
$offset = 56; // int | Result starting offset.
$status = "status_example"; // string | Status filter. Comma-separated statuses.
$dids = "dids_example"; // string | Devices filter. Comma-separated device IDs.

try {
    $result = $api_instance->getStatuses($tid, $count, $offset, $status, $dids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->getStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tid** | **string**| Task ID. |
 **count** | **int**| Max results count. | [optional]
 **offset** | **int**| Result starting offset. | [optional]
 **status** | **string**| Status filter. Comma-separated statuses. | [optional]
 **dids** | **string**| Devices filter. Comma-separated device IDs. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\TaskStatusesEnvelope**](../Model/TaskStatusesEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStatusesHistory**
> \ArtikCloud\ArtikCloud\Model\TaskStatusesHistoryEnvelope getStatusesHistory($tid, $did)

Returns the history of the status changes for a specific task id, or for a specific device id in that task.

Returns the history of the status changes for a specific task id, or for a specific device id in that task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$tid = "tid_example"; // string | Task ID.
$did = "did_example"; // string | Device ID. Optional.

try {
    $result = $api_instance->getStatusesHistory($tid, $did);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->getStatusesHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tid** | **string**| Task ID. |
 **did** | **string**| Device ID. Optional. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\TaskStatusesHistoryEnvelope**](../Model/TaskStatusesHistoryEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskByID**
> \ArtikCloud\ArtikCloud\Model\TaskEnvelope getTaskByID($tid)

Returns the details and global status of a specific task id.

Returns the details and global status of a specific task id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$tid = "tid_example"; // string | Task ID.

try {
    $result = $api_instance->getTaskByID($tid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->getTaskByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tid** | **string**| Task ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\TaskEnvelope**](../Model/TaskEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasks**
> \ArtikCloud\ArtikCloud\Model\TaskListEnvelope getTasks($dtid, $count, $offset, $status, $order, $sort)

Returns the all the tasks for a device type.

Returns the all the tasks for a device type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$dtid = "dtid_example"; // string | Device Type ID.
$count = 56; // int | Max results count.
$offset = 56; // int | Result starting offset.
$status = "status_example"; // string | Status filter. Comma-separated statuses.
$order = "order_example"; // string | Sort results by a field. Valid fields: createdOn.
$sort = "sort_example"; // string | Sort order. Valid values: asc or desc.

try {
    $result = $api_instance->getTasks($dtid, $count, $offset, $status, $order, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device Type ID. |
 **count** | **int**| Max results count. | [optional]
 **offset** | **int**| Result starting offset. | [optional]
 **status** | **string**| Status filter. Comma-separated statuses. | [optional]
 **order** | **string**| Sort results by a field. Valid fields: createdOn. | [optional]
 **sort** | **string**| Sort order. Valid values: asc or desc. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\TaskListEnvelope**](../Model/TaskListEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryProperties**
> \ArtikCloud\ArtikCloud\Model\MetadataQueryEnvelope queryProperties($dtid, $count, $offset, $filter, $include_timestamp)

Query device properties across devices.

Query device properties across devices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$dtid = "dtid_example"; // string | Device Type ID.
$count = 56; // int | Max results count.
$offset = 56; // int | Result starting offset.
$filter = "filter_example"; // string | Query filter. Comma-separated key=value pairs
$include_timestamp = true; // bool | Include timestamp.

try {
    $result = $api_instance->queryProperties($dtid, $count, $offset, $filter, $include_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->queryProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device Type ID. |
 **count** | **int**| Max results count. | [optional]
 **offset** | **int**| Result starting offset. | [optional]
 **filter** | **string**| Query filter. Comma-separated key&#x3D;value pairs | [optional]
 **include_timestamp** | **bool**| Include timestamp. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\MetadataQueryEnvelope**](../Model/MetadataQueryEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDeviceTypesInfo**
> \ArtikCloud\ArtikCloud\Model\DeviceTypesInfoEnvelope updateDeviceTypesInfo($dtid, $device_type_info)

Updates a device type information

Updates a device type information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$dtid = "dtid_example"; // string | Device type ID.
$device_type_info = new \ArtikCloud\ArtikCloud\Model\DeviceTypesInfo(); // \ArtikCloud\ArtikCloud\Model\DeviceTypesInfo | Device type info object to be set

try {
    $result = $api_instance->updateDeviceTypesInfo($dtid, $device_type_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->updateDeviceTypesInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| Device type ID. |
 **device_type_info** | [**\ArtikCloud\ArtikCloud\Model\DeviceTypesInfo**](../Model/\ArtikCloud\ArtikCloud\Model\DeviceTypesInfo.md)| Device type info object to be set |

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceTypesInfoEnvelope**](../Model/DeviceTypesInfoEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateServerProperties**
> \ArtikCloud\ArtikCloud\Model\MetadataEnvelope updateServerProperties($did, $device_properties)

Updates a device's server properties.

Updates a device's server properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$did = "did_example"; // string | Device ID.
$device_properties = NULL; // object | Device properties object to be set

try {
    $result = $api_instance->updateServerProperties($did, $device_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->updateServerProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **did** | **string**| Device ID. |
 **device_properties** | **object**| Device properties object to be set |

### Return type

[**\ArtikCloud\ArtikCloud\Model\MetadataEnvelope**](../Model/MetadataEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTask**
> \ArtikCloud\ArtikCloud\Model\TaskUpdateResponse updateTask($tid, $task_update_request)

Updates a task for all devices - For now just allows changing the state to cancelled.

Updates a task for all devices - For now just allows changing the state to cancelled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$tid = "tid_example"; // string | Task ID.
$task_update_request = new \ArtikCloud\ArtikCloud\Model\TaskUpdateRequest(); // \ArtikCloud\ArtikCloud\Model\TaskUpdateRequest | Task update request

try {
    $result = $api_instance->updateTask($tid, $task_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->updateTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tid** | **string**| Task ID. |
 **task_update_request** | [**\ArtikCloud\ArtikCloud\Model\TaskUpdateRequest**](../Model/\ArtikCloud\ArtikCloud\Model\TaskUpdateRequest.md)| Task update request |

### Return type

[**\ArtikCloud\ArtikCloud\Model\TaskUpdateResponse**](../Model/TaskUpdateResponse.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaskForDevice**
> \ArtikCloud\ArtikCloud\Model\DeviceTaskUpdateResponse updateTaskForDevice($tid, $did, $device_task_update_request)

Updates a task for a specific device - For now just allows changing the state to cancelled.

Updates a task for a specific device - For now just allows changing the state to cancelled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DevicesManagementApi();
$tid = "tid_example"; // string | Task ID.
$did = "did_example"; // string | Device ID.
$device_task_update_request = new \ArtikCloud\ArtikCloud\Model\DeviceTaskUpdateRequest(); // \ArtikCloud\ArtikCloud\Model\DeviceTaskUpdateRequest | Device task update request

try {
    $result = $api_instance->updateTaskForDevice($tid, $did, $device_task_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesManagementApi->updateTaskForDevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tid** | **string**| Task ID. |
 **did** | **string**| Device ID. |
 **device_task_update_request** | [**\ArtikCloud\ArtikCloud\Model\DeviceTaskUpdateRequest**](../Model/\ArtikCloud\ArtikCloud\Model\DeviceTaskUpdateRequest.md)| Device task update request |

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceTaskUpdateResponse**](../Model/DeviceTaskUpdateResponse.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

