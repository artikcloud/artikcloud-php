<?php
/**
 * DevicesSharesApi
 * PHP version 5
 *
 * @category Class
 * @package  ArtikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ARTIK Cloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ArtikCloud\ArtikCloud\Api;

use \ArtikCloud\ApiClient;
use \ArtikCloud\ApiException;
use \ArtikCloud\Configuration;
use \ArtikCloud\ObjectSerializer;

/**
 * DevicesSharesApi Class Doc Comment
 *
 * @category Class
 * @package  ArtikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DevicesSharesApi
{
    /**
     * API Client
     *
     * @var \ArtikCloud\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ArtikCloud\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ArtikCloud\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ArtikCloud\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ArtikCloud\ApiClient $apiClient set the API client
     *
     * @return DevicesSharesApi
     */
    public function setApiClient(\ArtikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createShareForDevice
     *
     * Share a device
     *
     * @param string $device_id Device ID. (required)
     * @param \ArtikCloud\ArtikCloud\Model\DeviceShareInfo $device_share_info Device object that needs to be added (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\DeviceSharingId
     */
    public function createShareForDevice($device_id, $device_share_info)
    {
        list($response) = $this->createShareForDeviceWithHttpInfo($device_id, $device_share_info);
        return $response;
    }

    /**
     * Operation createShareForDeviceWithHttpInfo
     *
     * Share a device
     *
     * @param string $device_id Device ID. (required)
     * @param \ArtikCloud\ArtikCloud\Model\DeviceShareInfo $device_share_info Device object that needs to be added (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\DeviceSharingId, HTTP status code, HTTP response headers (array of strings)
     */
    public function createShareForDeviceWithHttpInfo($device_id, $device_share_info)
    {
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling createShareForDevice');
        }
        // verify the required parameter 'device_share_info' is set
        if ($device_share_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_share_info when calling createShareForDevice');
        }
        // parse inputs
        $resourcePath = "/devices/{deviceId}/shares";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($device_id !== null) {
            $resourcePath = str_replace(
                "{" . "deviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($device_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($device_share_info)) {
            $_tempBody = $device_share_info;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ArtikCloud\ArtikCloud\Model\DeviceSharingId',
                '/devices/{deviceId}/shares'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\DeviceSharingId', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\DeviceSharingId', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteSharingForDevice
     *
     * Delete specific share of the given device id
     *
     * @param string $device_id Device ID. (required)
     * @param string $share_id Share ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\DeviceSharingId
     */
    public function deleteSharingForDevice($device_id, $share_id)
    {
        list($response) = $this->deleteSharingForDeviceWithHttpInfo($device_id, $share_id);
        return $response;
    }

    /**
     * Operation deleteSharingForDeviceWithHttpInfo
     *
     * Delete specific share of the given device id
     *
     * @param string $device_id Device ID. (required)
     * @param string $share_id Share ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\DeviceSharingId, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSharingForDeviceWithHttpInfo($device_id, $share_id)
    {
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling deleteSharingForDevice');
        }
        // verify the required parameter 'share_id' is set
        if ($share_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $share_id when calling deleteSharingForDevice');
        }
        // parse inputs
        $resourcePath = "/devices/{deviceId}/shares/{shareId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($device_id !== null) {
            $resourcePath = str_replace(
                "{" . "deviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($device_id),
                $resourcePath
            );
        }
        // path params
        if ($share_id !== null) {
            $resourcePath = str_replace(
                "{" . "shareId" . "}",
                $this->apiClient->getSerializer()->toPathValue($share_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ArtikCloud\ArtikCloud\Model\DeviceSharingId',
                '/devices/{deviceId}/shares/{shareId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\DeviceSharingId', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\DeviceSharingId', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAllSharesForDevice
     *
     * List all shares for the given device id
     *
     * @param string $device_id Device ID. (required)
     * @param int $count Desired count of items in the result set. (optional)
     * @param int $offset Offset for pagination. (optional)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\DeviceSharingEnvelope
     */
    public function getAllSharesForDevice($device_id, $count = null, $offset = null)
    {
        list($response) = $this->getAllSharesForDeviceWithHttpInfo($device_id, $count, $offset);
        return $response;
    }

    /**
     * Operation getAllSharesForDeviceWithHttpInfo
     *
     * List all shares for the given device id
     *
     * @param string $device_id Device ID. (required)
     * @param int $count Desired count of items in the result set. (optional)
     * @param int $offset Offset for pagination. (optional)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\DeviceSharingEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllSharesForDeviceWithHttpInfo($device_id, $count = null, $offset = null)
    {
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling getAllSharesForDevice');
        }
        // parse inputs
        $resourcePath = "/devices/{deviceId}/shares";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // path params
        if ($device_id !== null) {
            $resourcePath = str_replace(
                "{" . "deviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($device_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ArtikCloud\ArtikCloud\Model\DeviceSharingEnvelope',
                '/devices/{deviceId}/shares'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\DeviceSharingEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\DeviceSharingEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSharingForDevice
     *
     * Get specific share of the given device id
     *
     * @param string $device_id Device ID. (required)
     * @param string $share_id Share ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\DeviceSharing
     */
    public function getSharingForDevice($device_id, $share_id)
    {
        list($response) = $this->getSharingForDeviceWithHttpInfo($device_id, $share_id);
        return $response;
    }

    /**
     * Operation getSharingForDeviceWithHttpInfo
     *
     * Get specific share of the given device id
     *
     * @param string $device_id Device ID. (required)
     * @param string $share_id Share ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\DeviceSharing, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSharingForDeviceWithHttpInfo($device_id, $share_id)
    {
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling getSharingForDevice');
        }
        // verify the required parameter 'share_id' is set
        if ($share_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $share_id when calling getSharingForDevice');
        }
        // parse inputs
        $resourcePath = "/devices/{deviceId}/shares/{shareId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($device_id !== null) {
            $resourcePath = str_replace(
                "{" . "deviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($device_id),
                $resourcePath
            );
        }
        // path params
        if ($share_id !== null) {
            $resourcePath = str_replace(
                "{" . "shareId" . "}",
                $this->apiClient->getSerializer()->toPathValue($share_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ArtikCloud\ArtikCloud\Model\DeviceSharing',
                '/devices/{deviceId}/shares/{shareId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\DeviceSharing', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\DeviceSharing', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}