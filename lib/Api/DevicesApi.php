<?php
/**
 * DevicesApi
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
 * DevicesApi Class Doc Comment
 *
 * @category Class
 * @package  ArtikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DevicesApi
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
     * @return DevicesApi
     */
    public function setApiClient(\ArtikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addDevice
     *
     * Add Device
     *
     * @param \ArtikCloud\ArtikCloud\Model\Device $device Device to be added to the user (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\DeviceEnvelope
     */
    public function addDevice($device)
    {
        list($response) = $this->addDeviceWithHttpInfo($device);
        return $response;
    }

    /**
     * Operation addDeviceWithHttpInfo
     *
     * Add Device
     *
     * @param \ArtikCloud\ArtikCloud\Model\Device $device Device to be added to the user (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\DeviceEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function addDeviceWithHttpInfo($device)
    {
        // verify the required parameter 'device' is set
        if ($device === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device when calling addDevice');
        }
        // parse inputs
        $resourcePath = "/devices";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($device)) {
            $_tempBody = $device;
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
                '\ArtikCloud\ArtikCloud\Model\DeviceEnvelope',
                '/devices'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\DeviceEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\DeviceEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteDevice
     *
     * Delete Device
     *
     * @param string $device_id deviceId (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\DeviceEnvelope
     */
    public function deleteDevice($device_id)
    {
        list($response) = $this->deleteDeviceWithHttpInfo($device_id);
        return $response;
    }

    /**
     * Operation deleteDeviceWithHttpInfo
     *
     * Delete Device
     *
     * @param string $device_id deviceId (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\DeviceEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDeviceWithHttpInfo($device_id)
    {
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling deleteDevice');
        }
        // parse inputs
        $resourcePath = "/devices/{deviceId}";
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
                '\ArtikCloud\ArtikCloud\Model\DeviceEnvelope',
                '/devices/{deviceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\DeviceEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\DeviceEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteDeviceToken
     *
     * Delete Device Token
     *
     * @param string $device_id deviceId (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope
     */
    public function deleteDeviceToken($device_id)
    {
        list($response) = $this->deleteDeviceTokenWithHttpInfo($device_id);
        return $response;
    }

    /**
     * Operation deleteDeviceTokenWithHttpInfo
     *
     * Delete Device Token
     *
     * @param string $device_id deviceId (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDeviceTokenWithHttpInfo($device_id)
    {
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling deleteDeviceToken');
        }
        // parse inputs
        $resourcePath = "/devices/{deviceId}/tokens";
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
                '\ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope',
                '/devices/{deviceId}/tokens'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getDevice
     *
     * Get Device
     *
     * @param string $device_id deviceId (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\DeviceEnvelope
     */
    public function getDevice($device_id)
    {
        list($response) = $this->getDeviceWithHttpInfo($device_id);
        return $response;
    }

    /**
     * Operation getDeviceWithHttpInfo
     *
     * Get Device
     *
     * @param string $device_id deviceId (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\DeviceEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDeviceWithHttpInfo($device_id)
    {
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling getDevice');
        }
        // parse inputs
        $resourcePath = "/devices/{deviceId}";
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
                '\ArtikCloud\ArtikCloud\Model\DeviceEnvelope',
                '/devices/{deviceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\DeviceEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\DeviceEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getDevicePresence
     *
     * Get device presence information
     *
     * @param string $device_id Device ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\PresenceEnvelope
     */
    public function getDevicePresence($device_id)
    {
        list($response) = $this->getDevicePresenceWithHttpInfo($device_id);
        return $response;
    }

    /**
     * Operation getDevicePresenceWithHttpInfo
     *
     * Get device presence information
     *
     * @param string $device_id Device ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\PresenceEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDevicePresenceWithHttpInfo($device_id)
    {
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling getDevicePresence');
        }
        // parse inputs
        $resourcePath = "/devices/{deviceId}/presence";
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
                '\ArtikCloud\ArtikCloud\Model\PresenceEnvelope',
                '/devices/{deviceId}/presence'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\PresenceEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\PresenceEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getDeviceToken
     *
     * Get Device Token
     *
     * @param string $device_id deviceId (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope
     */
    public function getDeviceToken($device_id)
    {
        list($response) = $this->getDeviceTokenWithHttpInfo($device_id);
        return $response;
    }

    /**
     * Operation getDeviceTokenWithHttpInfo
     *
     * Get Device Token
     *
     * @param string $device_id deviceId (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDeviceTokenWithHttpInfo($device_id)
    {
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling getDeviceToken');
        }
        // parse inputs
        $resourcePath = "/devices/{deviceId}/tokens";
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
                '\ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope',
                '/devices/{deviceId}/tokens'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateDevice
     *
     * Update Device
     *
     * @param string $device_id deviceId (required)
     * @param \ArtikCloud\ArtikCloud\Model\Device $device Device to be updated (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\DeviceEnvelope
     */
    public function updateDevice($device_id, $device)
    {
        list($response) = $this->updateDeviceWithHttpInfo($device_id, $device);
        return $response;
    }

    /**
     * Operation updateDeviceWithHttpInfo
     *
     * Update Device
     *
     * @param string $device_id deviceId (required)
     * @param \ArtikCloud\ArtikCloud\Model\Device $device Device to be updated (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\DeviceEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDeviceWithHttpInfo($device_id, $device)
    {
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling updateDevice');
        }
        // verify the required parameter 'device' is set
        if ($device === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device when calling updateDevice');
        }
        // parse inputs
        $resourcePath = "/devices/{deviceId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
        if (isset($device)) {
            $_tempBody = $device;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ArtikCloud\ArtikCloud\Model\DeviceEnvelope',
                '/devices/{deviceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\DeviceEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\DeviceEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateDeviceToken
     *
     * Update Device Token
     *
     * @param string $device_id deviceId (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope
     */
    public function updateDeviceToken($device_id)
    {
        list($response) = $this->updateDeviceTokenWithHttpInfo($device_id);
        return $response;
    }

    /**
     * Operation updateDeviceTokenWithHttpInfo
     *
     * Update Device Token
     *
     * @param string $device_id deviceId (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDeviceTokenWithHttpInfo($device_id)
    {
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling updateDeviceToken');
        }
        // parse inputs
        $resourcePath = "/devices/{deviceId}/tokens";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['text/plain']);

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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope',
                '/devices/{deviceId}/tokens'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\DeviceTokenEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
