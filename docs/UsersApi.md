# ArtikCloud\UsersApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUserProperties**](UsersApi.md#createUserProperties) | **POST** /users/{userId}/properties | Create User Application Properties
[**deleteUserProperties**](UsersApi.md#deleteUserProperties) | **DELETE** /users/{userId}/properties | Delete User Application Properties
[**getSelf**](UsersApi.md#getSelf) | **GET** /users/self | Get Current User Profile
[**getUserDeviceTypes**](UsersApi.md#getUserDeviceTypes) | **GET** /users/{userId}/devicetypes | Get User Device Types
[**getUserDevices**](UsersApi.md#getUserDevices) | **GET** /users/{userId}/devices | Get User Devices
[**getUserProperties**](UsersApi.md#getUserProperties) | **GET** /users/{userId}/properties | Get User application properties
[**getUserRules**](UsersApi.md#getUserRules) | **GET** /users/{userId}/rules | Get User Rules
[**updateUserProperties**](UsersApi.md#updateUserProperties) | **PUT** /users/{userId}/properties | Update User Application Properties


# **createUserProperties**
> \ArtikCloud\Model\PropertiesEnvelope createUserProperties($user_id, $properties, $aid)

Create User Application Properties

Create application properties for a user

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\UsersApi();
$user_id = "user_id_example"; // string | User Id
$properties = new \ArtikCloud\Model\AppProperties(); // \ArtikCloud\Model\AppProperties | Properties to be updated
$aid = "aid_example"; // string | Application ID

try { 
    $result = $api_instance->createUserProperties($user_id, $properties, $aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUserProperties: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User Id | 
 **properties** | [**\ArtikCloud\Model\AppProperties**](\ArtikCloud\Model\AppProperties.md)| Properties to be updated | 
 **aid** | **string**| Application ID | [optional] 

### Return type

[**\ArtikCloud\Model\PropertiesEnvelope**](PropertiesEnvelope.md)

### Authorization

[artikcloud_oauth](../README.md#artikcloud_oauth)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteUserProperties**
> \ArtikCloud\Model\PropertiesEnvelope deleteUserProperties($user_id, $aid)

Delete User Application Properties

Deletes a user's application properties

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\UsersApi();
$user_id = "user_id_example"; // string | User Id
$aid = "aid_example"; // string | Application ID

try { 
    $result = $api_instance->deleteUserProperties($user_id, $aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUserProperties: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User Id | 
 **aid** | **string**| Application ID | [optional] 

### Return type

[**\ArtikCloud\Model\PropertiesEnvelope**](PropertiesEnvelope.md)

### Authorization

[artikcloud_oauth](../README.md#artikcloud_oauth)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getSelf**
> \ArtikCloud\Model\UserEnvelope getSelf()

Get Current User Profile

Get's the current user's profile

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\UsersApi();

try { 
    $result = $api_instance->getSelf();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getSelf: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ArtikCloud\Model\UserEnvelope**](UserEnvelope.md)

### Authorization

[artikcloud_oauth](../README.md#artikcloud_oauth)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getUserDeviceTypes**
> \ArtikCloud\Model\DeviceTypesEnvelope getUserDeviceTypes($user_id, $offset, $count, $include_shared)

Get User Device Types

Retrieve User's Device Types

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\UsersApi();
$user_id = "user_id_example"; // string | User ID.
$offset = 56; // int | Offset for pagination.
$count = 56; // int | Desired count of items in the result set
$include_shared = true; // bool | Optional. Boolean (true/false) - If false, only return the user's device types. If true, also return device types shared by other users.

try { 
    $result = $api_instance->getUserDeviceTypes($user_id, $offset, $count, $include_shared);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserDeviceTypes: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User ID. | 
 **offset** | **int**| Offset for pagination. | [optional] 
 **count** | **int**| Desired count of items in the result set | [optional] 
 **include_shared** | **bool**| Optional. Boolean (true/false) - If false, only return the user&#39;s device types. If true, also return device types shared by other users. | [optional] 

### Return type

[**\ArtikCloud\Model\DeviceTypesEnvelope**](DeviceTypesEnvelope.md)

### Authorization

[artikcloud_oauth](../README.md#artikcloud_oauth)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getUserDevices**
> \ArtikCloud\Model\DevicesEnvelope getUserDevices($user_id, $offset, $count, $include_properties)

Get User Devices

Retrieve User's Devices

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\UsersApi();
$user_id = "user_id_example"; // string | User ID
$offset = 56; // int | Offset for pagination.
$count = 56; // int | Desired count of items in the result set
$include_properties = true; // bool | Optional. Boolean (true/false) - If false, only return the user's device types. If true, also return device types shared by other users.

try { 
    $result = $api_instance->getUserDevices($user_id, $offset, $count, $include_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserDevices: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User ID | 
 **offset** | **int**| Offset for pagination. | [optional] 
 **count** | **int**| Desired count of items in the result set | [optional] 
 **include_properties** | **bool**| Optional. Boolean (true/false) - If false, only return the user&#39;s device types. If true, also return device types shared by other users. | [optional] 

### Return type

[**\ArtikCloud\Model\DevicesEnvelope**](DevicesEnvelope.md)

### Authorization

[artikcloud_oauth](../README.md#artikcloud_oauth)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getUserProperties**
> \ArtikCloud\Model\PropertiesEnvelope getUserProperties($user_id, $aid)

Get User application properties

Get application properties of a user

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\UsersApi();
$user_id = "user_id_example"; // string | User Id
$aid = "aid_example"; // string | Application ID

try { 
    $result = $api_instance->getUserProperties($user_id, $aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserProperties: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User Id | 
 **aid** | **string**| Application ID | [optional] 

### Return type

[**\ArtikCloud\Model\PropertiesEnvelope**](PropertiesEnvelope.md)

### Authorization

[artikcloud_oauth](../README.md#artikcloud_oauth)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getUserRules**
> \ArtikCloud\Model\RulesEnvelope getUserRules($user_id, $exclude_disabled, $other_applications, $count, $offset)

Get User Rules

Retrieve User's Rules

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\UsersApi();
$user_id = "user_id_example"; // string | User ID.
$exclude_disabled = true; // bool | Exclude disabled rules in the result.
$other_applications = true; // bool | List rules of other applications if current application id has full read access
$count = 56; // int | Desired count of items in the result set.
$offset = 56; // int | Offset for pagination.

try { 
    $result = $api_instance->getUserRules($user_id, $exclude_disabled, $other_applications, $count, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserRules: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User ID. | 
 **exclude_disabled** | **bool**| Exclude disabled rules in the result. | [optional] 
 **other_applications** | **bool**| List rules of other applications if current application id has full read access | [optional] 
 **count** | [**int**](.md)| Desired count of items in the result set. | [optional] 
 **offset** | [**int**](.md)| Offset for pagination. | [optional] 

### Return type

[**\ArtikCloud\Model\RulesEnvelope**](RulesEnvelope.md)

### Authorization

[artikcloud_oauth](../README.md#artikcloud_oauth)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateUserProperties**
> \ArtikCloud\Model\PropertiesEnvelope updateUserProperties($user_id, $properties, $aid)

Update User Application Properties

Updates application properties of a user

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\UsersApi();
$user_id = "user_id_example"; // string | User Id
$properties = new \ArtikCloud\Model\AppProperties(); // \ArtikCloud\Model\AppProperties | Properties to be updated
$aid = "aid_example"; // string | Application ID

try { 
    $result = $api_instance->updateUserProperties($user_id, $properties, $aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUserProperties: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| User Id | 
 **properties** | [**\ArtikCloud\Model\AppProperties**](\ArtikCloud\Model\AppProperties.md)| Properties to be updated | 
 **aid** | **string**| Application ID | [optional] 

### Return type

[**\ArtikCloud\Model\PropertiesEnvelope**](PropertiesEnvelope.md)

### Authorization

[artikcloud_oauth](../README.md#artikcloud_oauth)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

