# ArtikCloud\RulesApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRule**](RulesApi.md#createRule) | **POST** /rules | Create Rule
[**deleteRule**](RulesApi.md#deleteRule) | **DELETE** /rules/{ruleId} | Delete Rule
[**getRule**](RulesApi.md#getRule) | **GET** /rules/{ruleId} | Get Rule
[**updateRule**](RulesApi.md#updateRule) | **PUT** /rules/{ruleId} | Update Rule


# **createRule**
> \ArtikCloud\Model\RuleEnvelope createRule($rule_info, $user_id)

Create Rule

Create a new Rule

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\RulesApi();
$rule_info = new \ArtikCloud\Model\RuleCreationInfo(); // \ArtikCloud\Model\RuleCreationInfo | Rule object that needs to be added
$user_id = "user_id_example"; // string | User ID

try { 
    $result = $api_instance->createRule($rule_info, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->createRule: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_info** | [**\ArtikCloud\Model\RuleCreationInfo**](\ArtikCloud\Model\RuleCreationInfo.md)| Rule object that needs to be added | 
 **user_id** | **string**| User ID | 

### Return type

[**\ArtikCloud\Model\RuleEnvelope**](RuleEnvelope.md)

### Authorization

[artikcloud_oauth](../README.md#artikcloud_oauth)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteRule**
> \ArtikCloud\Model\RuleEnvelope deleteRule($rule_id)

Delete Rule

Delete a Rule

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\RulesApi();
$rule_id = "rule_id_example"; // string | Rule ID.

try { 
    $result = $api_instance->deleteRule($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->deleteRule: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **string**| Rule ID. | 

### Return type

[**\ArtikCloud\Model\RuleEnvelope**](RuleEnvelope.md)

### Authorization

[artikcloud_oauth](../README.md#artikcloud_oauth)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRule**
> \ArtikCloud\Model\RuleEnvelope getRule($rule_id)

Get Rule

Get a rule using the Rule ID

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\RulesApi();
$rule_id = "rule_id_example"; // string | Rule ID.

try { 
    $result = $api_instance->getRule($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->getRule: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **string**| Rule ID. | 

### Return type

[**\ArtikCloud\Model\RuleEnvelope**](RuleEnvelope.md)

### Authorization

[artikcloud_oauth](../README.md#artikcloud_oauth)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateRule**
> \ArtikCloud\Model\RuleEnvelope updateRule($rule_id, $rule_info)

Update Rule

Update an existing Rule

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\RulesApi();
$rule_id = "rule_id_example"; // string | Rule ID.
$rule_info = new \ArtikCloud\Model\RuleUpdateInfo(); // \ArtikCloud\Model\RuleUpdateInfo | Rule object that needs to be updated

try { 
    $result = $api_instance->updateRule($rule_id, $rule_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->updateRule: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **string**| Rule ID. | 
 **rule_info** | [**\ArtikCloud\Model\RuleUpdateInfo**](\ArtikCloud\Model\RuleUpdateInfo.md)| Rule object that needs to be updated | 

### Return type

[**\ArtikCloud\Model\RuleEnvelope**](RuleEnvelope.md)

### Authorization

[artikcloud_oauth](../README.md#artikcloud_oauth)

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

