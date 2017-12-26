# ArtikCloud\MonetizationApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPricingTiers**](MonetizationApi.md#createPricingTiers) | **POST** /pricing/devicetypes/{dtid}/pricingtiers | Define devicetype&#39;s pricing tiers.
[**getPricingTiers**](MonetizationApi.md#getPricingTiers) | **GET** /pricing/devices/{did}/pricingtiers | Get a device&#39;s pricing tiers
[**getThePricingTiers**](MonetizationApi.md#getThePricingTiers) | **GET** /pricing/devicetypes/{dtid}/pricingtiers | Get devicetype&#39;s pricing tiers.
[**getUpgradePath**](MonetizationApi.md#getUpgradePath) | **GET** /pricing/devices/{did}/revenueshare/upgradepath | Get upgrade path
[**setPricingTier**](MonetizationApi.md#setPricingTier) | **PUT** /pricing/devices/{did}/pricingtiers | Set a device&#39;s pricing tier


# **createPricingTiers**
> \ArtikCloud\ArtikCloud\Model\DeviceTypePricingTier createPricingTiers($dtid, $pricing_tier_info)

Define devicetype's pricing tiers.

Define devicetype's pricing tiers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MonetizationApi();
$dtid = "dtid_example"; // string | DeviceType ID
$pricing_tier_info = new \ArtikCloud\ArtikCloud\Model\DeviceTypePricingTier(); // \ArtikCloud\ArtikCloud\Model\DeviceTypePricingTier | Pricing tier info

try {
    $result = $api_instance->createPricingTiers($dtid, $pricing_tier_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonetizationApi->createPricingTiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| DeviceType ID |
 **pricing_tier_info** | [**\ArtikCloud\ArtikCloud\Model\DeviceTypePricingTier**](../Model/\ArtikCloud\ArtikCloud\Model\DeviceTypePricingTier.md)| Pricing tier info |

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceTypePricingTier**](../Model/DeviceTypePricingTier.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPricingTiers**
> \ArtikCloud\ArtikCloud\Model\DevicePricingTiersEnvelope getPricingTiers($did, $active)

Get a device's pricing tiers

Get a device's pricing tiers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MonetizationApi();
$did = "did_example"; // string | Device ID
$active = true; // bool | Filter by active

try {
    $result = $api_instance->getPricingTiers($did, $active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonetizationApi->getPricingTiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **did** | **string**| Device ID |
 **active** | **bool**| Filter by active | [optional]

### Return type

[**\ArtikCloud\ArtikCloud\Model\DevicePricingTiersEnvelope**](../Model/DevicePricingTiersEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getThePricingTiers**
> \ArtikCloud\ArtikCloud\Model\DeviceTypePricingTiersEnvelope getThePricingTiers($dtid, $version)

Get devicetype's pricing tiers.

Get devicetype's pricing tiers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MonetizationApi();
$dtid = "dtid_example"; // string | DeviceType ID
$version = 56; // int | Version

try {
    $result = $api_instance->getThePricingTiers($dtid, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonetizationApi->getThePricingTiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dtid** | **string**| DeviceType ID |
 **version** | **int**| Version |

### Return type

[**\ArtikCloud\ArtikCloud\Model\DeviceTypePricingTiersEnvelope**](../Model/DeviceTypePricingTiersEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUpgradePath**
> \ArtikCloud\ArtikCloud\Model\UpgradePathEnvelope getUpgradePath($did, $action)

Get upgrade path

Get upgrade path

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MonetizationApi();
$did = "did_example"; // string | Device ID
$action = "action_example"; // string | Action to perform

try {
    $result = $api_instance->getUpgradePath($did, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonetizationApi->getUpgradePath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **did** | **string**| Device ID |
 **action** | **string**| Action to perform |

### Return type

[**\ArtikCloud\ArtikCloud\Model\UpgradePathEnvelope**](../Model/UpgradePathEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPricingTier**
> \ArtikCloud\ArtikCloud\Model\DevicePricingTierEnvelope setPricingTier($did, $pricing_tier)

Set a device's pricing tier

Set a device's pricing tier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MonetizationApi();
$did = "did_example"; // string | Device ID
$pricing_tier = new \ArtikCloud\ArtikCloud\Model\DevicePricingTierRequest(); // \ArtikCloud\ArtikCloud\Model\DevicePricingTierRequest | Pricing tier

try {
    $result = $api_instance->setPricingTier($did, $pricing_tier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonetizationApi->setPricingTier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **did** | **string**| Device ID |
 **pricing_tier** | [**\ArtikCloud\ArtikCloud\Model\DevicePricingTierRequest**](../Model/\ArtikCloud\ArtikCloud\Model\DevicePricingTierRequest.md)| Pricing tier |

### Return type

[**\ArtikCloud\ArtikCloud\Model\DevicePricingTierEnvelope**](../Model/DevicePricingTierEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

