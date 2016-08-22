# ArtikCloud\TokensApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkToken**](TokensApi.md#checkToken) | **POST** /accounts/checkToken | Check Token
[**refreshToken**](TokensApi.md#refreshToken) | **POST** /accounts/token | Refresh Token


# **checkToken**
> \ArtikCloud\Model\CheckTokenResponse checkToken($token_info)

Check Token

Check Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\TokensApi();
$token_info = new \ArtikCloud\Model\TokenRequest(); // \ArtikCloud\Model\TokenRequest | Token object to be checked

try {
    $result = $api_instance->checkToken($token_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->checkToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_info** | [**\ArtikCloud\Model\TokenRequest**](../Model/\ArtikCloud\Model\TokenRequest.md)| Token object to be checked |

### Return type

[**\ArtikCloud\Model\CheckTokenResponse**](../Model/CheckTokenResponse.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refreshToken**
> \ArtikCloud\Model\RefreshTokenResponse refreshToken($grant_type, $refresh_token)

Refresh Token

Refresh Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\TokensApi();
$grant_type = "grant_type_example"; // string | Grant Type.
$refresh_token = "refresh_token_example"; // string | Refresh Token.

try {
    $result = $api_instance->refreshToken($grant_type, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->refreshToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**| Grant Type. |
 **refresh_token** | **string**| Refresh Token. |

### Return type

[**\ArtikCloud\Model\RefreshTokenResponse**](../Model/RefreshTokenResponse.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

