# ArtikCloud\DeviceTypesApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableManifestVersions**](DeviceTypesApi.md#getAvailableManifestVersions) | **GET** /devicetypes/{deviceTypeId}/availablemanifestversions | Get Available Manifest Versions
[**getDeviceType**](DeviceTypesApi.md#getDeviceType) | **GET** /devicetypes/{deviceTypeId} | Get Device Type
[**getDeviceTypes**](DeviceTypesApi.md#getDeviceTypes) | **GET** /devicetypes | Get Device Types
[**getDeviceTypesByApplication**](DeviceTypesApi.md#getDeviceTypesByApplication) | **GET** /applications/{appId}/devicetypes | Get Device Types by Application
[**getLatestManifestProperties**](DeviceTypesApi.md#getLatestManifestProperties) | **GET** /devicetypes/{deviceTypeId}/manifests/latest/properties | Get Latest Manifest Properties
[**getManifestProperties**](DeviceTypesApi.md#getManifestProperties) | **GET** /devicetypes/{deviceTypeId}/manifests/{version}/properties | Get manifest properties


# **getAvailableManifestVersions**
> \ArtikCloud\ArtikCloud\Model\ManifestVersionsEnvelope getAvailableManifestVersions($device_type_id)

Get Available Manifest Versions

Get a Device Type's available manifest versions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DeviceTypesApi();
$device_type_id = "device_type_id_example"; // string | deviceTypeId

try {
    $result = $api_instance->getAvailableManifestVersions($device_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceTypesApi->getAvailableManifestVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_type_id** | **string**| deviceTypeId |

### Return type

[**\ArtikCloud\ArtikCloud\Model\ManifestVersionsEnvelope**](../Model/ManifestVersionsEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceType**
> \ArtikCloud\ArtikCloud\Model\DeviceTypeEnvelope getDeviceType($device_type_id)

Get Device Type

Retrieves a Device Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DeviceTypesApi();
$device_type_id = "device_type_id_example"; // string | deviceTypeId

try {
    $result = $api_instance->getDeviceType($device_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceTypesApi->getDeviceType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_type_id** | **string**| deviceTypeId |

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceTypeEnvelope**](../Model/DeviceTypeEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceTypes**
> \ArtikCloud\ArtikCloud\Model\DeviceTypesEnvelope getDeviceTypes($name, $offset, $count, $tags)

Get Device Types

Retrieves Device Types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DeviceTypesApi();
$name = "name_example"; // string | Device Type name
$offset = 56; // int | Offset for pagination.
$count = 56; // int | Desired count of items in the result set
$tags = "tags_example"; // string | Elements tagged with the list of tags. (comma separated)

try {
    $result = $api_instance->getDeviceTypes($name, $offset, $count, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceTypesApi->getDeviceTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Device Type name |
 **offset** | **int**| Offset for pagination. | [optional]
 **count** | **int**| Desired count of items in the result set | [optional]
 **tags** | **string**| Elements tagged with the list of tags. (comma separated) | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceTypesEnvelope**](../Model/DeviceTypesEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeviceTypesByApplication**
> \ArtikCloud\ArtikCloud\Model\DeviceTypesEnvelope getDeviceTypesByApplication($app_id, $product_info, $count, $offset)

Get Device Types by Application

Get Device Types by Application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DeviceTypesApi();
$app_id = "app_id_example"; // string | Application ID.
$product_info = true; // bool | Flag to include the associated ProductInfo if present
$count = 56; // int | Desired count of items in the result set.
$offset = 56; // int | Offset for pagination.

try {
    $result = $api_instance->getDeviceTypesByApplication($app_id, $product_info, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceTypesApi->getDeviceTypesByApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| Application ID. |
 **product_info** | **bool**| Flag to include the associated ProductInfo if present | [optional]
 **count** | **int**| Desired count of items in the result set. | [optional]
 **offset** | **int**| Offset for pagination. | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceTypesEnvelope**](../Model/DeviceTypesEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLatestManifestProperties**
> \ArtikCloud\ArtikCloud\Model\ManifestPropertiesEnvelope getLatestManifestProperties($device_type_id)

Get Latest Manifest Properties

Get a Device Type's manifest properties for the latest version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DeviceTypesApi();
$device_type_id = "device_type_id_example"; // string | Device Type ID.

try {
    $result = $api_instance->getLatestManifestProperties($device_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceTypesApi->getLatestManifestProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_type_id** | **string**| Device Type ID. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\ManifestPropertiesEnvelope**](../Model/ManifestPropertiesEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManifestProperties**
> \ArtikCloud\ArtikCloud\Model\ManifestPropertiesEnvelope getManifestProperties($device_type_id, $version)

Get manifest properties

Get a Device Type's manifest properties for a specific version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\DeviceTypesApi();
$device_type_id = "device_type_id_example"; // string | Device Type ID.
$version = "version_example"; // string | Manifest Version.

try {
    $result = $api_instance->getManifestProperties($device_type_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceTypesApi->getManifestProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_type_id** | **string**| Device Type ID. |
 **version** | **string**| Manifest Version. |

### Return type

[**\ArtikCloud\ArtikCloud\Model\ManifestPropertiesEnvelope**](../Model/ManifestPropertiesEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

