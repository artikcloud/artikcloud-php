# ArtikCloud\MessagesApi

All URIs are relative to *https://api.artik.cloud/v1.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAggregatesHistogram**](MessagesApi.md#getAggregatesHistogram) | **GET** /messages/analytics/histogram | Get Normalized Message Histogram
[**getFieldPresence**](MessagesApi.md#getFieldPresence) | **GET** /messages/presence | Get normalized message presence
[**getLastNormalizedMessages**](MessagesApi.md#getLastNormalizedMessages) | **GET** /messages/last | Get Last Normalized Message
[**getMessageAggregates**](MessagesApi.md#getMessageAggregates) | **GET** /messages/analytics/aggregates | Get Normalized Message Aggregates
[**getMessageSnapshots**](MessagesApi.md#getMessageSnapshots) | **GET** /messages/snapshots | Get Message Snapshots
[**getNormalizedActions**](MessagesApi.md#getNormalizedActions) | **GET** /actions | Get Normalized Actions
[**getNormalizedMessages**](MessagesApi.md#getNormalizedMessages) | **GET** /messages | Get Normalized Messages
[**sendActions**](MessagesApi.md#sendActions) | **POST** /actions | Send Actions
[**sendMessage**](MessagesApi.md#sendMessage) | **POST** /messages | Send Message


# **getAggregatesHistogram**
> \ArtikCloud\Model\AggregatesHistogramResponse getAggregatesHistogram($start_date, $end_date, $sdid, $field, $interval)

Get Normalized Message Histogram

Get Histogram on normalized messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MessagesApi();
$start_date = 789; // int | Timestamp of earliest message (in milliseconds since epoch).
$end_date = 789; // int | Timestamp of latest message (in milliseconds since epoch).
$sdid = "sdid_example"; // string | Source device ID of the messages being searched.
$field = "field_example"; // string | Message field being queried for building histogram.
$interval = "interval_example"; // string | Interval of time for building histogram blocks. (Valid values: minute, hour, day, month, year)

try {
    $result = $api_instance->getAggregatesHistogram($start_date, $end_date, $sdid, $field, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getAggregatesHistogram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **int**| Timestamp of earliest message (in milliseconds since epoch). |
 **end_date** | **int**| Timestamp of latest message (in milliseconds since epoch). |
 **sdid** | **string**| Source device ID of the messages being searched. | [optional]
 **field** | **string**| Message field being queried for building histogram. | [optional]
 **interval** | **string**| Interval of time for building histogram blocks. (Valid values: minute, hour, day, month, year) | [optional]

### Return type

[**\ArtikCloud\Model\AggregatesHistogramResponse**](../Model/AggregatesHistogramResponse.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFieldPresence**
> \ArtikCloud\Model\FieldPresenceEnvelope getFieldPresence($start_date, $end_date, $interval, $sdid, $field_presence)

Get normalized message presence

Get normalized message presence.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MessagesApi();
$start_date = 789; // int | startDate
$end_date = 789; // int | endDate
$interval = "interval_example"; // string | String representing grouping interval. One of: 'minute' (1 hour limit), 'hour' (1 day limit), 'day' (31 days limit), 'month' (1 year limit), or 'year' (10 years limit).
$sdid = "sdid_example"; // string | Source device ID of the messages being searched.
$field_presence = "field_presence_example"; // string | String representing a field from the specified device ID.

try {
    $result = $api_instance->getFieldPresence($start_date, $end_date, $interval, $sdid, $field_presence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getFieldPresence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **int**| startDate |
 **end_date** | **int**| endDate |
 **interval** | **string**| String representing grouping interval. One of: &#39;minute&#39; (1 hour limit), &#39;hour&#39; (1 day limit), &#39;day&#39; (31 days limit), &#39;month&#39; (1 year limit), or &#39;year&#39; (10 years limit). |
 **sdid** | **string**| Source device ID of the messages being searched. | [optional]
 **field_presence** | **string**| String representing a field from the specified device ID. | [optional]

### Return type

[**\ArtikCloud\Model\FieldPresenceEnvelope**](../Model/FieldPresenceEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLastNormalizedMessages**
> \ArtikCloud\Model\NormalizedMessagesEnvelope getLastNormalizedMessages($count, $sdids, $field_presence)

Get Last Normalized Message

Get last messages normalized.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MessagesApi();
$count = 56; // int | Number of items to return per query.
$sdids = "sdids_example"; // string | Comma separated list of source device IDs (minimum: 1).
$field_presence = "field_presence_example"; // string | String representing a field from the specified device ID.

try {
    $result = $api_instance->getLastNormalizedMessages($count, $sdids, $field_presence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getLastNormalizedMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| Number of items to return per query. | [optional]
 **sdids** | **string**| Comma separated list of source device IDs (minimum: 1). | [optional]
 **field_presence** | **string**| String representing a field from the specified device ID. | [optional]

### Return type

[**\ArtikCloud\Model\NormalizedMessagesEnvelope**](../Model/NormalizedMessagesEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageAggregates**
> \ArtikCloud\Model\AggregatesResponse getMessageAggregates($sdid, $field, $start_date, $end_date)

Get Normalized Message Aggregates

Get Aggregates on normalized messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MessagesApi();
$sdid = "sdid_example"; // string | Source device ID of the messages being searched.
$field = "field_example"; // string | Message field being queried for aggregates.
$start_date = 789; // int | Timestamp of earliest message (in milliseconds since epoch).
$end_date = 789; // int | Timestamp of latest message (in milliseconds since epoch).

try {
    $result = $api_instance->getMessageAggregates($sdid, $field, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessageAggregates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sdid** | **string**| Source device ID of the messages being searched. |
 **field** | **string**| Message field being queried for aggregates. |
 **start_date** | **int**| Timestamp of earliest message (in milliseconds since epoch). |
 **end_date** | **int**| Timestamp of latest message (in milliseconds since epoch). |

### Return type

[**\ArtikCloud\Model\AggregatesResponse**](../Model/AggregatesResponse.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageSnapshots**
> \ArtikCloud\Model\SnapshotResponses getMessageSnapshots($sdids, $include_timestamp)

Get Message Snapshots

Get message snapshots.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MessagesApi();
$sdids = "sdids_example"; // string | Device IDs for which the snapshots are requested. Max 100 device ids per call.
$include_timestamp = true; // bool | Indicates whether to return timestamps of the last update for each field.

try {
    $result = $api_instance->getMessageSnapshots($sdids, $include_timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessageSnapshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sdids** | **string**| Device IDs for which the snapshots are requested. Max 100 device ids per call. |
 **include_timestamp** | **bool**| Indicates whether to return timestamps of the last update for each field. | [optional]

### Return type

[**\ArtikCloud\Model\SnapshotResponses**](../Model/SnapshotResponses.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNormalizedActions**
> \ArtikCloud\Model\NormalizedActionsEnvelope getNormalizedActions($uid, $ddid, $mid, $offset, $count, $start_date, $end_date, $order)

Get Normalized Actions

Get the actions normalized

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MessagesApi();
$uid = "uid_example"; // string | User ID. If not specified, assume that of the current authenticated user. If specified, it must be that of a user for which the current authenticated user has read access to.
$ddid = "ddid_example"; // string | Destination device ID of the actions being searched.
$mid = "mid_example"; // string | The message ID being searched.
$offset = "offset_example"; // string | A string that represents the starting item, should be the value of 'next' field received in the last response. (required for pagination)
$count = 56; // int | count
$start_date = 789; // int | startDate
$end_date = 789; // int | endDate
$order = "order_example"; // string | Desired sort order: 'asc' or 'desc'

try {
    $result = $api_instance->getNormalizedActions($uid, $ddid, $mid, $offset, $count, $start_date, $end_date, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getNormalizedActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| User ID. If not specified, assume that of the current authenticated user. If specified, it must be that of a user for which the current authenticated user has read access to. | [optional]
 **ddid** | **string**| Destination device ID of the actions being searched. | [optional]
 **mid** | **string**| The message ID being searched. | [optional]
 **offset** | **string**| A string that represents the starting item, should be the value of &#39;next&#39; field received in the last response. (required for pagination) | [optional]
 **count** | **int**| count | [optional]
 **start_date** | **int**| startDate | [optional]
 **end_date** | **int**| endDate | [optional]
 **order** | **string**| Desired sort order: &#39;asc&#39; or &#39;desc&#39; | [optional]

### Return type

[**\ArtikCloud\Model\NormalizedActionsEnvelope**](../Model/NormalizedActionsEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNormalizedMessages**
> \ArtikCloud\Model\NormalizedMessagesEnvelope getNormalizedMessages($uid, $sdid, $mid, $field_presence, $filter, $offset, $count, $start_date, $end_date, $order)

Get Normalized Messages

Get the messages normalized

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MessagesApi();
$uid = "uid_example"; // string | User ID. If not specified, assume that of the current authenticated user. If specified, it must be that of a user for which the current authenticated user has read access to.
$sdid = "sdid_example"; // string | Source device ID of the messages being searched.
$mid = "mid_example"; // string | The message ID being searched.
$field_presence = "field_presence_example"; // string | String representing a field from the specified device ID.
$filter = "filter_example"; // string | Filter.
$offset = "offset_example"; // string | A string that represents the starting item, should be the value of 'next' field received in the last response. (required for pagination)
$count = 56; // int | count
$start_date = 789; // int | startDate
$end_date = 789; // int | endDate
$order = "order_example"; // string | Desired sort order: 'asc' or 'desc'

try {
    $result = $api_instance->getNormalizedMessages($uid, $sdid, $mid, $field_presence, $filter, $offset, $count, $start_date, $end_date, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getNormalizedMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid** | **string**| User ID. If not specified, assume that of the current authenticated user. If specified, it must be that of a user for which the current authenticated user has read access to. | [optional]
 **sdid** | **string**| Source device ID of the messages being searched. | [optional]
 **mid** | **string**| The message ID being searched. | [optional]
 **field_presence** | **string**| String representing a field from the specified device ID. | [optional]
 **filter** | **string**| Filter. | [optional]
 **offset** | **string**| A string that represents the starting item, should be the value of &#39;next&#39; field received in the last response. (required for pagination) | [optional]
 **count** | **int**| count | [optional]
 **start_date** | **int**| startDate | [optional]
 **end_date** | **int**| endDate | [optional]
 **order** | **string**| Desired sort order: &#39;asc&#39; or &#39;desc&#39; | [optional]

### Return type

[**\ArtikCloud\Model\NormalizedMessagesEnvelope**](../Model/NormalizedMessagesEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendActions**
> \ArtikCloud\Model\MessageIDEnvelope sendActions($data)

Send Actions

Send Actions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MessagesApi();
$data = new \ArtikCloud\Model\Actions(); // \ArtikCloud\Model\Actions | Actions that are passed in the body

try {
    $result = $api_instance->sendActions($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\ArtikCloud\Model\Actions**](../Model/\ArtikCloud\Model\Actions.md)| Actions that are passed in the body |

### Return type

[**\ArtikCloud\Model\MessageIDEnvelope**](../Model/MessageIDEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendMessage**
> \ArtikCloud\Model\MessageIDEnvelope sendMessage($data)

Send Message

Send a message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: artikcloud_oauth
ArtikCloud\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new ArtikCloud\Api\MessagesApi();
$data = new \ArtikCloud\Model\Message(); // \ArtikCloud\Model\Message | Message object that is passed in the body

try {
    $result = $api_instance->sendMessage($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\ArtikCloud\Model\Message**](../Model/\ArtikCloud\Model\Message.md)| Message object that is passed in the body |

### Return type

[**\ArtikCloud\Model\MessageIDEnvelope**](../Model/MessageIDEnvelope.md)

### Authorization

[artikcloud_oauth](../../README.md#artikcloud_oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

