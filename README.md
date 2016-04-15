ARTIK Cloud PHP SDK
================

This SDK helps you connect your PHP scripts to ARTIK Cloud. The SDK exposes a number of methods to easily execute REST API calls to ARTIK Cloud.

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/artikcloud/artikcloud-php.git"
    }
  ],
  "require": {
    "artikcloud/artikcloud-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/./autoload.php');
```

## Tests 

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
    echo 'Exception when calling DeviceTypesApi->getAvailableManifestVersions: ', $e->getMessage(), "\n";
}

?>
```


## Documentation for API Endpoints

All URIs are relative to *https://api.artik.cloud/v1.1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DeviceTypesApi* | [**getAvailableManifestVersions**](docs/DeviceTypesApi.md#getavailablemanifestversions) | **GET** /devicetypes/{deviceTypeId}/availablemanifestversions | Get Available Manifest Versions
*DeviceTypesApi* | [**getDeviceType**](docs/DeviceTypesApi.md#getdevicetype) | **GET** /devicetypes/{deviceTypeId} | Get Device Type
*DeviceTypesApi* | [**getDeviceTypes**](docs/DeviceTypesApi.md#getdevicetypes) | **GET** /devicetypes | Get Device Types
*DeviceTypesApi* | [**getLatestManifestProperties**](docs/DeviceTypesApi.md#getlatestmanifestproperties) | **GET** /devicetypes/{deviceTypeId}/manifests/latest/properties | Get Latest Manifest Properties
*DeviceTypesApi* | [**getManifestProperties**](docs/DeviceTypesApi.md#getmanifestproperties) | **GET** /devicetypes/{deviceTypeId}/manifests/{version}/properties | Get manifest properties
*DevicesApi* | [**addDevice**](docs/DevicesApi.md#adddevice) | **POST** /devices | Add Device
*DevicesApi* | [**deleteDevice**](docs/DevicesApi.md#deletedevice) | **DELETE** /devices/{deviceId} | Delete Device
*DevicesApi* | [**deleteDeviceToken**](docs/DevicesApi.md#deletedevicetoken) | **DELETE** /devices/{deviceId}/tokens | Delete Device Token
*DevicesApi* | [**getDevice**](docs/DevicesApi.md#getdevice) | **GET** /devices/{deviceId} | Get Device
*DevicesApi* | [**getDeviceToken**](docs/DevicesApi.md#getdevicetoken) | **GET** /devices/{deviceId}/tokens | Get Device Token
*DevicesApi* | [**updateDevice**](docs/DevicesApi.md#updatedevice) | **PUT** /devices/{deviceId} | Update Device
*DevicesApi* | [**updateDeviceToken**](docs/DevicesApi.md#updatedevicetoken) | **PUT** /devices/{deviceId}/tokens | Update Device Token
*ExportApi* | [**exportRequest**](docs/ExportApi.md#exportrequest) | **POST** /messages/export | Create Export Request
*ExportApi* | [**getExportHistory**](docs/ExportApi.md#getexporthistory) | **GET** /messages/export/history | Get Export History
*ExportApi* | [**getExportResult**](docs/ExportApi.md#getexportresult) | **GET** /messages/export/{exportId}/result | Get Export Result
*ExportApi* | [**getExportStatus**](docs/ExportApi.md#getexportstatus) | **GET** /messages/export/{exportId}/status | Check Export Status
*MessagesApi* | [**getAggregatesHistogram**](docs/MessagesApi.md#getaggregateshistogram) | **GET** /messages/analytics/histogram | Get Histogram aggregates
*MessagesApi* | [**getFieldPresence**](docs/MessagesApi.md#getfieldpresence) | **GET** /messages/presence | Get normalized message presence
*MessagesApi* | [**getLastNormalizedMessages**](docs/MessagesApi.md#getlastnormalizedmessages) | **GET** /messages/last | Get Last Normalized Message
*MessagesApi* | [**getMessageAggregates**](docs/MessagesApi.md#getmessageaggregates) | **GET** /messages/analytics/aggregates | Get Normalized Message Aggregates
*MessagesApi* | [**getNormalizedMessages**](docs/MessagesApi.md#getnormalizedmessages) | **GET** /messages | Get Normalized Messages
*MessagesApi* | [**sendMessageAction**](docs/MessagesApi.md#sendmessageaction) | **POST** /messages | Send Message Action
*RegistrationsApi* | [**confirmUser**](docs/RegistrationsApi.md#confirmuser) | **PUT** /devices/registrations/pin | Confirm User
*RegistrationsApi* | [**getRequestStatusForUser**](docs/RegistrationsApi.md#getrequeststatusforuser) | **GET** /devices/registrations/{requestId}/status | Get Request Status For User
*RegistrationsApi* | [**unregisterDevice**](docs/RegistrationsApi.md#unregisterdevice) | **DELETE** /devices/{deviceId}/registrations | Unregister Device
*RulesApi* | [**createRule**](docs/RulesApi.md#createrule) | **POST** /rules | Create Rule
*RulesApi* | [**deleteRule**](docs/RulesApi.md#deleterule) | **DELETE** /rules/{ruleId} | Delete Rule
*RulesApi* | [**getRule**](docs/RulesApi.md#getrule) | **GET** /rules/{ruleId} | Get Rule
*RulesApi* | [**updateRule**](docs/RulesApi.md#updaterule) | **PUT** /rules/{ruleId} | Update Rule
*TagsApi* | [**getTagCategories**](docs/TagsApi.md#gettagcategories) | **GET** /tags/categories | Get all categories
*TagsApi* | [**getTagSuggestions**](docs/TagsApi.md#gettagsuggestions) | **GET** /tags/suggestions | Get tag suggestions
*TagsApi* | [**getTagsByCategories**](docs/TagsApi.md#gettagsbycategories) | **GET** /tags | Get all tags of categories
*TokensApi* | [**checkToken**](docs/TokensApi.md#checktoken) | **POST** /checkToken | Check Token
*TokensApi* | [**refreshToken**](docs/TokensApi.md#refreshtoken) | **POST** /token | Refresh Token
*UsersApi* | [**createUserProperties**](docs/UsersApi.md#createuserproperties) | **POST** /users/{userId}/properties | Create User Application Properties
*UsersApi* | [**deleteUserProperties**](docs/UsersApi.md#deleteuserproperties) | **DELETE** /users/{userId}/properties | Delete User Application Properties
*UsersApi* | [**getSelf**](docs/UsersApi.md#getself) | **GET** /users/self | Get Current User Profile
*UsersApi* | [**getUserDeviceTypes**](docs/UsersApi.md#getuserdevicetypes) | **GET** /users/{userId}/devicetypes | Get User Device Types
*UsersApi* | [**getUserDevices**](docs/UsersApi.md#getuserdevices) | **GET** /users/{userId}/devices | Get User Devices
*UsersApi* | [**getUserProperties**](docs/UsersApi.md#getuserproperties) | **GET** /users/{userId}/properties | Get User application properties
*UsersApi* | [**getUserRules**](docs/UsersApi.md#getuserrules) | **GET** /users/{userId}/rules | Get User Rules
*UsersApi* | [**updateUserProperties**](docs/UsersApi.md#updateuserproperties) | **PUT** /users/{userId}/properties | Update User Application Properties


## Documentation For Models

 - [AckEnvelope](docs/AckEnvelope.md)
 - [Acknowledgement](docs/Acknowledgement.md)
 - [ActionDetails](docs/ActionDetails.md)
 - [ActionDetailsArray](docs/ActionDetailsArray.md)
 - [ActionIn](docs/ActionIn.md)
 - [ActionOut](docs/ActionOut.md)
 - [AggregateData](docs/AggregateData.md)
 - [AggregatesHistogramData](docs/AggregatesHistogramData.md)
 - [AggregatesHistogramResponse](docs/AggregatesHistogramResponse.md)
 - [AggregatesResponse](docs/AggregatesResponse.md)
 - [AppProperties](docs/AppProperties.md)
 - [CheckTokenMessage](docs/CheckTokenMessage.md)
 - [CheckTokenResponse](docs/CheckTokenResponse.md)
 - [Device](docs/Device.md)
 - [DeviceArray](docs/DeviceArray.md)
 - [DeviceEnvelope](docs/DeviceEnvelope.md)
 - [DeviceRegCompleteRequest](docs/DeviceRegCompleteRequest.md)
 - [DeviceRegConfirmUserRequest](docs/DeviceRegConfirmUserRequest.md)
 - [DeviceRegConfirmUserResponse](docs/DeviceRegConfirmUserResponse.md)
 - [DeviceRegConfirmUserResponseEnvelope](docs/DeviceRegConfirmUserResponseEnvelope.md)
 - [DeviceRegStatusResponse](docs/DeviceRegStatusResponse.md)
 - [DeviceRegStatusResponseEnvelope](docs/DeviceRegStatusResponseEnvelope.md)
 - [DeviceToken](docs/DeviceToken.md)
 - [DeviceTokenEnvelope](docs/DeviceTokenEnvelope.md)
 - [DeviceType](docs/DeviceType.md)
 - [DeviceTypeArray](docs/DeviceTypeArray.md)
 - [DeviceTypeEnvelope](docs/DeviceTypeEnvelope.md)
 - [DeviceTypesEnvelope](docs/DeviceTypesEnvelope.md)
 - [DevicesEnvelope](docs/DevicesEnvelope.md)
 - [ErrorEnvelope](docs/ErrorEnvelope.md)
 - [ExportData](docs/ExportData.md)
 - [ExportDataArray](docs/ExportDataArray.md)
 - [ExportHistoryResponse](docs/ExportHistoryResponse.md)
 - [ExportNormalizedMessagesResponse](docs/ExportNormalizedMessagesResponse.md)
 - [ExportRequest](docs/ExportRequest.md)
 - [ExportRequestData](docs/ExportRequestData.md)
 - [ExportRequestInfo](docs/ExportRequestInfo.md)
 - [ExportRequestResponse](docs/ExportRequestResponse.md)
 - [ExportResponse](docs/ExportResponse.md)
 - [ExportStatusResponse](docs/ExportStatusResponse.md)
 - [FieldPath](docs/FieldPath.md)
 - [FieldPresence](docs/FieldPresence.md)
 - [FieldPresenceEnvelope](docs/FieldPresenceEnvelope.md)
 - [FieldsActions](docs/FieldsActions.md)
 - [ManifestProperties](docs/ManifestProperties.md)
 - [ManifestPropertiesEnvelope](docs/ManifestPropertiesEnvelope.md)
 - [ManifestVersions](docs/ManifestVersions.md)
 - [ManifestVersionsEnvelope](docs/ManifestVersionsEnvelope.md)
 - [MessageAction](docs/MessageAction.md)
 - [MessageID](docs/MessageID.md)
 - [MessageIDEnvelope](docs/MessageIDEnvelope.md)
 - [MessageIn](docs/MessageIn.md)
 - [MessageOut](docs/MessageOut.md)
 - [NonEmptyString](docs/NonEmptyString.md)
 - [NormalizedMessage](docs/NormalizedMessage.md)
 - [NormalizedMessagesEnvelope](docs/NormalizedMessagesEnvelope.md)
 - [OutputRule](docs/OutputRule.md)
 - [PropertiesEnvelope](docs/PropertiesEnvelope.md)
 - [RefreshTokenResponse](docs/RefreshTokenResponse.md)
 - [RegisterMessage](docs/RegisterMessage.md)
 - [RuleArray](docs/RuleArray.md)
 - [RuleCreationInfo](docs/RuleCreationInfo.md)
 - [RuleEnvelope](docs/RuleEnvelope.md)
 - [RuleError](docs/RuleError.md)
 - [RuleUpdateInfo](docs/RuleUpdateInfo.md)
 - [RuleWarningOutput](docs/RuleWarningOutput.md)
 - [RulesEnvelope](docs/RulesEnvelope.md)
 - [Tag](docs/Tag.md)
 - [TagArray](docs/TagArray.md)
 - [TagsEnvelope](docs/TagsEnvelope.md)
 - [Token](docs/Token.md)
 - [TokenRequest](docs/TokenRequest.md)
 - [TokenResponse](docs/TokenResponse.md)
 - [UnregisterDeviceResponse](docs/UnregisterDeviceResponse.md)
 - [UnregisterDeviceResponseEnvelope](docs/UnregisterDeviceResponseEnvelope.md)
 - [User](docs/User.md)
 - [UserEnvelope](docs/UserEnvelope.md)
 - [WebSocketError](docs/WebSocketError.md)


## Documentation For Authorization

## artikcloud_oauth

- **Type**: OAuth
- **Flow**: implicit
- **Authorizatoin URL**: https://accounts.artik.cloud/authorize
- **Scopes**: 
 - **read:artikcloud**: Read from Artik Cloud
 - **write:artikcloud**: Write from Artik Cloud

More about ARTIK Cloud
-------------------------

If you are not familiar with ARTIK Cloud, we have extensive documentation at https://developer.artik.cloud/documentation

The full ARTIK Cloud API specification can be found at https://developer.artik.cloud/documentation/api-spec

Check out advanced sample applications at https://developer.artik.cloud/documentation/samples/

To create and manage your services and devices on ARTIK Cloud, create an account at https://developer.artik.cloud

Also see the ARTIK Cloud blog for tutorials, updates, and more: http://artik.io/blog

License and Copyright
---------------------

Licensed under the Apache License. See [LICENCE](https://github.com/artikcloud/artikcloud-php/blob/master/LICENSE).

Copyright (c) 2016 Samsung Electronics Co., Ltd.
