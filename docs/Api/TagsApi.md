# ArtikCloud\TagsApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTagCategories**](TagsApi.md#getTagCategories) | **GET** /tags/categories | Get all categories
[**getTagSuggestions**](TagsApi.md#getTagSuggestions) | **GET** /tags/suggestions | Get tag suggestions
[**getTagsByCategories**](TagsApi.md#getTagsByCategories) | **GET** /tags | Get all tags of categories


# **getTagCategories**
> \ArtikCloud\Model\TagsEnvelope getTagCategories()

Get all categories

Get all tags marked as categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\TagsApi();

try {
    $result = $api_instance->getTagCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTagCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ArtikCloud\Model\TagsEnvelope**](../Model/TagsEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTagSuggestions**
> \ArtikCloud\Model\TagsEnvelope getTagSuggestions($entity_type, $tags, $name, $count)

Get tag suggestions

Get tag suggestions for applications, device types that have been most used with a group of tags.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\TagsApi();
$entity_type = "entity_type_example"; // string | Entity type name.
$tags = "tags_example"; // string | Comma separated list of tags.
$name = "name_example"; // string | Name of tags used for type ahead.
$count = 56; // int | Number of results to return. Max 10.

try {
    $result = $api_instance->getTagSuggestions($entity_type, $tags, $name, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTagSuggestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_type** | **string**| Entity type name. | [optional]
 **tags** | **string**| Comma separated list of tags. | [optional]
 **name** | **string**| Name of tags used for type ahead. | [optional]
 **count** | **int**| Number of results to return. Max 10. | [optional]

### Return type

[**\ArtikCloud\Model\TagsEnvelope**](../Model/TagsEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTagsByCategories**
> \ArtikCloud\Model\TagsEnvelope getTagsByCategories($categories)

Get all tags of categories

Get all tags related to the list of categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\TagsApi();
$categories = "categories_example"; // string | Comma separated list of categories.

try {
    $result = $api_instance->getTagsByCategories($categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTagsByCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categories** | **string**| Comma separated list of categories. | [optional]

### Return type

[**\ArtikCloud\Model\TagsEnvelope**](../Model/TagsEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

