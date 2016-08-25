ARTIK Cloud PHP SDK
===================

[![Build Status](https://travis-ci.org/artikcloud/artikcloud-php.svg?branch=master)](https://travis-ci.org/artikcloud/artikcloud-php)

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
    echo 'Exception when calling DeviceTypesApi->getAvailableManifestVersions: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.artik.cloud/v1.1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DeviceTypesApi* | [**getAvailableManifestVersions**](docs/Api/DeviceTypesApi.md#getavailablemanifestversions) | **GET** /devicetypes/{deviceTypeId}/availablemanifestversions | Get Available Manifest Versions
*DeviceTypesApi* | [**getDeviceType**](docs/Api/DeviceTypesApi.md#getdevicetype) | **GET** /devicetypes/{deviceTypeId} | Get Device Type
*DeviceTypesApi* | [**getDeviceTypes**](docs/Api/DeviceTypesApi.md#getdevicetypes) | **GET** /devicetypes | Get Device Types
*DeviceTypesApi* | [**getLatestManifestProperties**](docs/Api/DeviceTypesApi.md#getlatestmanifestproperties) | **GET** /devicetypes/{deviceTypeId}/manifests/latest/properties | Get Latest Manifest Properties
*DeviceTypesApi* | [**getManifestProperties**](docs/Api/DeviceTypesApi.md#getmanifestproperties) | **GET** /devicetypes/{deviceTypeId}/manifests/{version}/properties | Get manifest properties
*DevicesApi* | [**addDevice**](docs/Api/DevicesApi.md#adddevice) | **POST** /devices | Add Device
*DevicesApi* | [**deleteDevice**](docs/Api/DevicesApi.md#deletedevice) | **DELETE** /devices/{deviceId} | Delete Device
*DevicesApi* | [**deleteDeviceToken**](docs/Api/DevicesApi.md#deletedevicetoken) | **DELETE** /devices/{deviceId}/tokens | Delete Device Token
*DevicesApi* | [**getDevice**](docs/Api/DevicesApi.md#getdevice) | **GET** /devices/{deviceId} | Get Device
*DevicesApi* | [**getDevicePresence**](docs/Api/DevicesApi.md#getdevicepresence) | **GET** /devices/{deviceId}/presence | Get device presence information
*DevicesApi* | [**getDeviceToken**](docs/Api/DevicesApi.md#getdevicetoken) | **GET** /devices/{deviceId}/tokens | Get Device Token
*DevicesApi* | [**updateDevice**](docs/Api/DevicesApi.md#updatedevice) | **PUT** /devices/{deviceId} | Update Device
*DevicesApi* | [**updateDeviceToken**](docs/Api/DevicesApi.md#updatedevicetoken) | **PUT** /devices/{deviceId}/tokens | Update Device Token
*ExportApi* | [**exportRequest**](docs/Api/ExportApi.md#exportrequest) | **POST** /messages/export | Create Export Request
*ExportApi* | [**getExportHistory**](docs/Api/ExportApi.md#getexporthistory) | **GET** /messages/export/history | Get Export History
*ExportApi* | [**getExportResult**](docs/Api/ExportApi.md#getexportresult) | **GET** /messages/export/{exportId}/result | Get Export Result
*ExportApi* | [**getExportStatus**](docs/Api/ExportApi.md#getexportstatus) | **GET** /messages/export/{exportId}/status | Check Export Status
*MessagesApi* | [**getAggregatesHistogram**](docs/Api/MessagesApi.md#getaggregateshistogram) | **GET** /messages/analytics/histogram | Get Normalized Message Histogram
*MessagesApi* | [**getFieldPresence**](docs/Api/MessagesApi.md#getfieldpresence) | **GET** /messages/presence | Get normalized message presence
*MessagesApi* | [**getLastNormalizedMessages**](docs/Api/MessagesApi.md#getlastnormalizedmessages) | **GET** /messages/last | Get Last Normalized Message
*MessagesApi* | [**getMessageAggregates**](docs/Api/MessagesApi.md#getmessageaggregates) | **GET** /messages/analytics/aggregates | Get Normalized Message Aggregates
*MessagesApi* | [**getMessageSnapshots**](docs/Api/MessagesApi.md#getmessagesnapshots) | **GET** /messages/snapshots | Get Message Snapshots
*MessagesApi* | [**getNormalizedActions**](docs/Api/MessagesApi.md#getnormalizedactions) | **GET** /actions | Get Normalized Actions
*MessagesApi* | [**getNormalizedMessages**](docs/Api/MessagesApi.md#getnormalizedmessages) | **GET** /messages | Get Normalized Messages
*MessagesApi* | [**sendActions**](docs/Api/MessagesApi.md#sendactions) | **POST** /actions | Send Actions
*MessagesApi* | [**sendMessage**](docs/Api/MessagesApi.md#sendmessage) | **POST** /messages | Send Message
*RegistrationsApi* | [**confirmUser**](docs/Api/RegistrationsApi.md#confirmuser) | **PUT** /devices/registrations/pin | Confirm User
*RegistrationsApi* | [**getRequestStatusForUser**](docs/Api/RegistrationsApi.md#getrequeststatusforuser) | **GET** /devices/registrations/{requestId}/status | Get Request Status For User
*RegistrationsApi* | [**unregisterDevice**](docs/Api/RegistrationsApi.md#unregisterdevice) | **DELETE** /devices/{deviceId}/registrations | Unregister Device
*RulesApi* | [**createRule**](docs/Api/RulesApi.md#createrule) | **POST** /rules | Create Rule
*RulesApi* | [**deleteRule**](docs/Api/RulesApi.md#deleterule) | **DELETE** /rules/{ruleId} | Delete Rule
*RulesApi* | [**getRule**](docs/Api/RulesApi.md#getrule) | **GET** /rules/{ruleId} | Get Rule
*RulesApi* | [**updateRule**](docs/Api/RulesApi.md#updaterule) | **PUT** /rules/{ruleId} | Update Rule
*TagsApi* | [**getTagCategories**](docs/Api/TagsApi.md#gettagcategories) | **GET** /tags/categories | Get all categories
*TagsApi* | [**getTagSuggestions**](docs/Api/TagsApi.md#gettagsuggestions) | **GET** /tags/suggestions | Get tag suggestions
*TagsApi* | [**getTagsByCategories**](docs/Api/TagsApi.md#gettagsbycategories) | **GET** /tags | Get all tags of categories
*TokensApi* | [**checkToken**](docs/Api/TokensApi.md#checktoken) | **POST** /accounts/checkToken | Check Token
*TokensApi* | [**refreshToken**](docs/Api/TokensApi.md#refreshtoken) | **POST** /accounts/token | Refresh Token
*TokensApi* | [**tokenInfo**](docs/Api/TokensApi.md#tokeninfo) | **GET** /accounts/tokenInfo | Token Info
*UsersApi* | [**createUserProperties**](docs/Api/UsersApi.md#createuserproperties) | **POST** /users/{userId}/properties | Create User Application Properties
*UsersApi* | [**deleteUserProperties**](docs/Api/UsersApi.md#deleteuserproperties) | **DELETE** /users/{userId}/properties | Delete User Application Properties
*UsersApi* | [**getSelf**](docs/Api/UsersApi.md#getself) | **GET** /users/self | Get Current User Profile
*UsersApi* | [**getUserDeviceTypes**](docs/Api/UsersApi.md#getuserdevicetypes) | **GET** /users/{userId}/devicetypes | Get User Device Types
*UsersApi* | [**getUserDevices**](docs/Api/UsersApi.md#getuserdevices) | **GET** /users/{userId}/devices | Get User Devices
*UsersApi* | [**getUserProperties**](docs/Api/UsersApi.md#getuserproperties) | **GET** /users/{userId}/properties | Get User application properties
*UsersApi* | [**getUserRules**](docs/Api/UsersApi.md#getuserrules) | **GET** /users/{userId}/rules | Get User Rules
*UsersApi* | [**updateUserProperties**](docs/Api/UsersApi.md#updateuserproperties) | **PUT** /users/{userId}/properties | Update User Application Properties


## Documentation For Models

 - [AckEnvelope](docs/Model/AckEnvelope.md)
 - [Acknowledgement](docs/Model/Acknowledgement.md)
 - [Action](docs/Model/Action.md)
 - [ActionArray](docs/Model/ActionArray.md)
 - [ActionDetails](docs/Model/ActionDetails.md)
 - [ActionDetailsArray](docs/Model/ActionDetailsArray.md)
 - [ActionIn](docs/Model/ActionIn.md)
 - [ActionOut](docs/Model/ActionOut.md)
 - [Actions](docs/Model/Actions.md)
 - [AggregateData](docs/Model/AggregateData.md)
 - [AggregatesHistogramData](docs/Model/AggregatesHistogramData.md)
 - [AggregatesHistogramResponse](docs/Model/AggregatesHistogramResponse.md)
 - [AggregatesResponse](docs/Model/AggregatesResponse.md)
 - [AppProperties](docs/Model/AppProperties.md)
 - [CheckTokenMessage](docs/Model/CheckTokenMessage.md)
 - [CheckTokenResponse](docs/Model/CheckTokenResponse.md)
 - [Device](docs/Model/Device.md)
 - [DeviceArray](docs/Model/DeviceArray.md)
 - [DeviceEnvelope](docs/Model/DeviceEnvelope.md)
 - [DeviceRegCompleteRequest](docs/Model/DeviceRegCompleteRequest.md)
 - [DeviceRegConfirmUserRequest](docs/Model/DeviceRegConfirmUserRequest.md)
 - [DeviceRegConfirmUserResponse](docs/Model/DeviceRegConfirmUserResponse.md)
 - [DeviceRegConfirmUserResponseEnvelope](docs/Model/DeviceRegConfirmUserResponseEnvelope.md)
 - [DeviceRegStatusResponse](docs/Model/DeviceRegStatusResponse.md)
 - [DeviceRegStatusResponseEnvelope](docs/Model/DeviceRegStatusResponseEnvelope.md)
 - [DeviceToken](docs/Model/DeviceToken.md)
 - [DeviceTokenEnvelope](docs/Model/DeviceTokenEnvelope.md)
 - [DeviceType](docs/Model/DeviceType.md)
 - [DeviceTypeArray](docs/Model/DeviceTypeArray.md)
 - [DeviceTypeEnvelope](docs/Model/DeviceTypeEnvelope.md)
 - [DeviceTypesEnvelope](docs/Model/DeviceTypesEnvelope.md)
 - [DevicesEnvelope](docs/Model/DevicesEnvelope.md)
 - [ErrorEnvelope](docs/Model/ErrorEnvelope.md)
 - [ExportData](docs/Model/ExportData.md)
 - [ExportDataArray](docs/Model/ExportDataArray.md)
 - [ExportHistoryResponse](docs/Model/ExportHistoryResponse.md)
 - [ExportNormalizedMessagesResponse](docs/Model/ExportNormalizedMessagesResponse.md)
 - [ExportRequest](docs/Model/ExportRequest.md)
 - [ExportRequestData](docs/Model/ExportRequestData.md)
 - [ExportRequestInfo](docs/Model/ExportRequestInfo.md)
 - [ExportRequestResponse](docs/Model/ExportRequestResponse.md)
 - [ExportResponse](docs/Model/ExportResponse.md)
 - [ExportStatusResponse](docs/Model/ExportStatusResponse.md)
 - [FieldPath](docs/Model/FieldPath.md)
 - [FieldPresence](docs/Model/FieldPresence.md)
 - [FieldPresenceEnvelope](docs/Model/FieldPresenceEnvelope.md)
 - [FieldsActions](docs/Model/FieldsActions.md)
 - [ManifestProperties](docs/Model/ManifestProperties.md)
 - [ManifestPropertiesEnvelope](docs/Model/ManifestPropertiesEnvelope.md)
 - [ManifestVersions](docs/Model/ManifestVersions.md)
 - [ManifestVersionsEnvelope](docs/Model/ManifestVersionsEnvelope.md)
 - [Message](docs/Model/Message.md)
 - [MessageAction](docs/Model/MessageAction.md)
 - [MessageID](docs/Model/MessageID.md)
 - [MessageIDEnvelope](docs/Model/MessageIDEnvelope.md)
 - [MessageIn](docs/Model/MessageIn.md)
 - [MessageOut](docs/Model/MessageOut.md)
 - [NonEmptyString](docs/Model/NonEmptyString.md)
 - [NormalizedAction](docs/Model/NormalizedAction.md)
 - [NormalizedActionsEnvelope](docs/Model/NormalizedActionsEnvelope.md)
 - [NormalizedMessage](docs/Model/NormalizedMessage.md)
 - [NormalizedMessagesEnvelope](docs/Model/NormalizedMessagesEnvelope.md)
 - [OutputRule](docs/Model/OutputRule.md)
 - [PresenceEnvelope](docs/Model/PresenceEnvelope.md)
 - [PresenceModel](docs/Model/PresenceModel.md)
 - [PropertiesEnvelope](docs/Model/PropertiesEnvelope.md)
 - [RefreshTokenResponse](docs/Model/RefreshTokenResponse.md)
 - [RegisterMessage](docs/Model/RegisterMessage.md)
 - [RuleArray](docs/Model/RuleArray.md)
 - [RuleCreationInfo](docs/Model/RuleCreationInfo.md)
 - [RuleEnvelope](docs/Model/RuleEnvelope.md)
 - [RuleError](docs/Model/RuleError.md)
 - [RuleUpdateInfo](docs/Model/RuleUpdateInfo.md)
 - [RuleWarningOutput](docs/Model/RuleWarningOutput.md)
 - [RulesEnvelope](docs/Model/RulesEnvelope.md)
 - [SnapshotResponse](docs/Model/SnapshotResponse.md)
 - [SnapshotResponses](docs/Model/SnapshotResponses.md)
 - [SnapshotsResponseEnvelope](docs/Model/SnapshotsResponseEnvelope.md)
 - [Tag](docs/Model/Tag.md)
 - [TagArray](docs/Model/TagArray.md)
 - [TagsEnvelope](docs/Model/TagsEnvelope.md)
 - [Token](docs/Model/Token.md)
 - [TokenInfo](docs/Model/TokenInfo.md)
 - [TokenInfoSuccessResponse](docs/Model/TokenInfoSuccessResponse.md)
 - [TokenRequest](docs/Model/TokenRequest.md)
 - [TokenResponse](docs/Model/TokenResponse.md)
 - [UnregisterDeviceResponse](docs/Model/UnregisterDeviceResponse.md)
 - [UnregisterDeviceResponseEnvelope](docs/Model/UnregisterDeviceResponseEnvelope.md)
 - [User](docs/Model/User.md)
 - [UserEnvelope](docs/Model/UserEnvelope.md)
 - [WebSocketError](docs/Model/WebSocketError.md)


## Documentation For Authorization


## artikcloud_oauth

- **Type**: OAuth
- **Flow**: implicit
- **Authorization URL**: https://accounts.artik.cloud/authorize
- **Scopes**:
 - **read:artikcloud**: Read from ARTIK Cloud
 - **write:artikcloud**: Write from ARTIK Cloud

 Usage
 ------

 Peek into [tests](https://github.com/artikcloud/artikcloud-php/tree/master/test/Api) for examples about how to use the SDK.


 More about ARTIK Cloud
 -------------------------

 If you are not familiar with ARTIK Cloud, we have extensive documentation at https://developer.artik.cloud/documentation

 The full ARTIK Cloud API specification can be found at https://developer.artik.cloud/documentation/api-reference/

 Check out advanced sample applications at https://developer.artik.cloud/documentation/samples/

 To create and manage your services and devices on ARTIK Cloud, create an account at https://developer.artik.cloud

 Also see the ARTIK Cloud blog for tutorials, updates, and more: http://artik.io/blog

 License and Copyright
 ---------------------

 Licensed under the Apache License. See [LICENSE](https://github.com/artikcloud/artikcloud-php/blob/master/LICENSE).
