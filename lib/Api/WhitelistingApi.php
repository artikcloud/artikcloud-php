<?php
/**
 * WhitelistingApi
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
 * WhitelistingApi Class Doc Comment
 *
 * @category Class
 * @package  ArtikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WhitelistingApi
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
     * @return WhitelistingApi
     */
    public function setApiClient(\ArtikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteVdid
     *
     * Delete a vdid from the devicetype whitelist.
     *
     * @param string $dtid Device Type ID. (required)
     * @param string $vdid Vendor Device ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\WhitelistEnvelope
     */
    public function deleteVdid($dtid, $vdid)
    {
        list($response) = $this->deleteVdidWithHttpInfo($dtid, $vdid);
        return $response;
    }

    /**
     * Operation deleteVdidWithHttpInfo
     *
     * Delete a vdid from the devicetype whitelist.
     *
     * @param string $dtid Device Type ID. (required)
     * @param string $vdid Vendor Device ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\WhitelistEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteVdidWithHttpInfo($dtid, $vdid)
    {
        // verify the required parameter 'dtid' is set
        if ($dtid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dtid when calling deleteVdid');
        }
        // verify the required parameter 'vdid' is set
        if ($vdid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $vdid when calling deleteVdid');
        }
        // parse inputs
        $resourcePath = "/devicetypes/{dtid}/whitelist/{vdid}";
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
        if ($dtid !== null) {
            $resourcePath = str_replace(
                "{" . "dtid" . "}",
                $this->apiClient->getSerializer()->toPathValue($dtid),
                $resourcePath
            );
        }
        // path params
        if ($vdid !== null) {
            $resourcePath = str_replace(
                "{" . "vdid" . "}",
                $this->apiClient->getSerializer()->toPathValue($vdid),
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
                '\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope',
                '/devicetypes/{dtid}/whitelist/{vdid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteWhitelistCertificate
     *
     * Delete a whitelist certificate associated with a devicetype.
     *
     * @param string $dtid Device Type ID. (required)
     * @param string $cid Certificate ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\WhitelistEnvelope
     */
    public function deleteWhitelistCertificate($dtid, $cid)
    {
        list($response) = $this->deleteWhitelistCertificateWithHttpInfo($dtid, $cid);
        return $response;
    }

    /**
     * Operation deleteWhitelistCertificateWithHttpInfo
     *
     * Delete a whitelist certificate associated with a devicetype.
     *
     * @param string $dtid Device Type ID. (required)
     * @param string $cid Certificate ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\WhitelistEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWhitelistCertificateWithHttpInfo($dtid, $cid)
    {
        // verify the required parameter 'dtid' is set
        if ($dtid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dtid when calling deleteWhitelistCertificate');
        }
        // verify the required parameter 'cid' is set
        if ($cid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cid when calling deleteWhitelistCertificate');
        }
        // parse inputs
        $resourcePath = "/devicetypes/{dtid}/whitelist/certificates/{cid}";
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
        if ($dtid !== null) {
            $resourcePath = str_replace(
                "{" . "dtid" . "}",
                $this->apiClient->getSerializer()->toPathValue($dtid),
                $resourcePath
            );
        }
        // path params
        if ($cid !== null) {
            $resourcePath = str_replace(
                "{" . "cid" . "}",
                $this->apiClient->getSerializer()->toPathValue($cid),
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
                '\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope',
                '/devicetypes/{dtid}/whitelist/certificates/{cid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation enableWhitelist
     *
     * Enable or disble whitelist feature of a device type
     *
     * @param string $dtid Device Type ID. (required)
     * @param \ArtikCloud\ArtikCloud\Model\DeviceTypeUpdateInput $device_type_update_info Device type update input. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\WhitelistEnvelope
     */
    public function enableWhitelist($dtid, $device_type_update_info)
    {
        list($response) = $this->enableWhitelistWithHttpInfo($dtid, $device_type_update_info);
        return $response;
    }

    /**
     * Operation enableWhitelistWithHttpInfo
     *
     * Enable or disble whitelist feature of a device type
     *
     * @param string $dtid Device Type ID. (required)
     * @param \ArtikCloud\ArtikCloud\Model\DeviceTypeUpdateInput $device_type_update_info Device type update input. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\WhitelistEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function enableWhitelistWithHttpInfo($dtid, $device_type_update_info)
    {
        // verify the required parameter 'dtid' is set
        if ($dtid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dtid when calling enableWhitelist');
        }
        // verify the required parameter 'device_type_update_info' is set
        if ($device_type_update_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_type_update_info when calling enableWhitelist');
        }
        // parse inputs
        $resourcePath = "/devicetypes/:dtid/whitelist/enable";
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
        if ($dtid !== null) {
            $resourcePath = str_replace(
                "{" . "dtid" . "}",
                $this->apiClient->getSerializer()->toPathValue($dtid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($device_type_update_info)) {
            $_tempBody = $device_type_update_info;
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
                '\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope',
                '/devicetypes/:dtid/whitelist/enable'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getRejectedRowList
     *
     * Get the list of rejected rows for an uploaded CSV file.
     *
     * @param string $dtid Device type id related to the uploaded CSV file. (required)
     * @param string $upload_id Upload id related to the uploaded CSV file. (required)
     * @param int $count Max results count. (optional)
     * @param int $offset Result starting offset. (optional)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\RejectedCSVRowsEnvelope
     */
    public function getRejectedRowList($dtid, $upload_id, $count = null, $offset = null)
    {
        list($response) = $this->getRejectedRowListWithHttpInfo($dtid, $upload_id, $count, $offset);
        return $response;
    }

    /**
     * Operation getRejectedRowListWithHttpInfo
     *
     * Get the list of rejected rows for an uploaded CSV file.
     *
     * @param string $dtid Device type id related to the uploaded CSV file. (required)
     * @param string $upload_id Upload id related to the uploaded CSV file. (required)
     * @param int $count Max results count. (optional)
     * @param int $offset Result starting offset. (optional)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\RejectedCSVRowsEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function getRejectedRowListWithHttpInfo($dtid, $upload_id, $count = null, $offset = null)
    {
        // verify the required parameter 'dtid' is set
        if ($dtid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dtid when calling getRejectedRowList');
        }
        // verify the required parameter 'upload_id' is set
        if ($upload_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $upload_id when calling getRejectedRowList');
        }
        // parse inputs
        $resourcePath = "/devicetypes/{dtid}/whitelist/{uploadId}/rejectedRows";
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
        if ($dtid !== null) {
            $resourcePath = str_replace(
                "{" . "dtid" . "}",
                $this->apiClient->getSerializer()->toPathValue($dtid),
                $resourcePath
            );
        }
        // path params
        if ($upload_id !== null) {
            $resourcePath = str_replace(
                "{" . "uploadId" . "}",
                $this->apiClient->getSerializer()->toPathValue($upload_id),
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
                '\ArtikCloud\ArtikCloud\Model\RejectedCSVRowsEnvelope',
                '/devicetypes/{dtid}/whitelist/{uploadId}/rejectedRows'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\RejectedCSVRowsEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\RejectedCSVRowsEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUploadStatus
     *
     * Get the status of a uploaded CSV file.
     *
     * @param string $dtid Device type id related to the uploaded CSV file. (required)
     * @param string $upload_id Upload id related to the uploaded CSV file. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\UploadStatusEnvelope
     */
    public function getUploadStatus($dtid, $upload_id)
    {
        list($response) = $this->getUploadStatusWithHttpInfo($dtid, $upload_id);
        return $response;
    }

    /**
     * Operation getUploadStatusWithHttpInfo
     *
     * Get the status of a uploaded CSV file.
     *
     * @param string $dtid Device type id related to the uploaded CSV file. (required)
     * @param string $upload_id Upload id related to the uploaded CSV file. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\UploadStatusEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUploadStatusWithHttpInfo($dtid, $upload_id)
    {
        // verify the required parameter 'dtid' is set
        if ($dtid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dtid when calling getUploadStatus');
        }
        // verify the required parameter 'upload_id' is set
        if ($upload_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $upload_id when calling getUploadStatus');
        }
        // parse inputs
        $resourcePath = "/devicetypes/{dtid}/whitelist/{uploadId}/status";
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
        if ($dtid !== null) {
            $resourcePath = str_replace(
                "{" . "dtid" . "}",
                $this->apiClient->getSerializer()->toPathValue($dtid),
                $resourcePath
            );
        }
        // path params
        if ($upload_id !== null) {
            $resourcePath = str_replace(
                "{" . "uploadId" . "}",
                $this->apiClient->getSerializer()->toPathValue($upload_id),
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
                '\ArtikCloud\ArtikCloud\Model\UploadStatusEnvelope',
                '/devicetypes/{dtid}/whitelist/{uploadId}/status'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\UploadStatusEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\UploadStatusEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getWhitelist
     *
     * Get whitelisted vdids of a device type.
     *
     * @param string $dtid Device Type ID. (required)
     * @param int $count Max results count. (optional)
     * @param int $offset Result starting offset. (optional)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\WhitelistResultEnvelope
     */
    public function getWhitelist($dtid, $count = null, $offset = null)
    {
        list($response) = $this->getWhitelistWithHttpInfo($dtid, $count, $offset);
        return $response;
    }

    /**
     * Operation getWhitelistWithHttpInfo
     *
     * Get whitelisted vdids of a device type.
     *
     * @param string $dtid Device Type ID. (required)
     * @param int $count Max results count. (optional)
     * @param int $offset Result starting offset. (optional)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\WhitelistResultEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWhitelistWithHttpInfo($dtid, $count = null, $offset = null)
    {
        // verify the required parameter 'dtid' is set
        if ($dtid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dtid when calling getWhitelist');
        }
        // parse inputs
        $resourcePath = "/devicetypes/{dtid}/whitelist";
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
        if ($dtid !== null) {
            $resourcePath = str_replace(
                "{" . "dtid" . "}",
                $this->apiClient->getSerializer()->toPathValue($dtid),
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
                '\ArtikCloud\ArtikCloud\Model\WhitelistResultEnvelope',
                '/devicetypes/{dtid}/whitelist'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\WhitelistResultEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\WhitelistResultEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getWhitelistCertificate
     *
     * Get whitelist certificate of device type.
     *
     * @param string $dtid Device Type ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\CertificateEnvelope
     */
    public function getWhitelistCertificate($dtid)
    {
        list($response) = $this->getWhitelistCertificateWithHttpInfo($dtid);
        return $response;
    }

    /**
     * Operation getWhitelistCertificateWithHttpInfo
     *
     * Get whitelist certificate of device type.
     *
     * @param string $dtid Device Type ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\CertificateEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWhitelistCertificateWithHttpInfo($dtid)
    {
        // verify the required parameter 'dtid' is set
        if ($dtid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dtid when calling getWhitelistCertificate');
        }
        // parse inputs
        $resourcePath = "/devicetypes/{dtid}/whitelist/certificates";
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
        if ($dtid !== null) {
            $resourcePath = str_replace(
                "{" . "dtid" . "}",
                $this->apiClient->getSerializer()->toPathValue($dtid),
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
                '\ArtikCloud\ArtikCloud\Model\CertificateEnvelope',
                '/devicetypes/{dtid}/whitelist/certificates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\CertificateEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\CertificateEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getWhitelistStatus
     *
     * Get the status of whitelist feature (enabled/disabled) of a device type.
     *
     * @param string $dtid Device Type ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\WhitelistEnvelope
     */
    public function getWhitelistStatus($dtid)
    {
        list($response) = $this->getWhitelistStatusWithHttpInfo($dtid);
        return $response;
    }

    /**
     * Operation getWhitelistStatusWithHttpInfo
     *
     * Get the status of whitelist feature (enabled/disabled) of a device type.
     *
     * @param string $dtid Device Type ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\WhitelistEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWhitelistStatusWithHttpInfo($dtid)
    {
        // verify the required parameter 'dtid' is set
        if ($dtid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dtid when calling getWhitelistStatus');
        }
        // parse inputs
        $resourcePath = "/devicetypes/{dtid}/whitelist/status";
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
        if ($dtid !== null) {
            $resourcePath = str_replace(
                "{" . "dtid" . "}",
                $this->apiClient->getSerializer()->toPathValue($dtid),
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
                '\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope',
                '/devicetypes/{dtid}/whitelist/status'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\WhitelistEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation uploadCSV
     *
     * Upload a CSV file related to the Device Type.
     *
     * @param string $dtid Device Type ID. (required)
     * @param string $file Device Type ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\UploadIdEnvelope
     */
    public function uploadCSV($dtid, $file)
    {
        list($response) = $this->uploadCSVWithHttpInfo($dtid, $file);
        return $response;
    }

    /**
     * Operation uploadCSVWithHttpInfo
     *
     * Upload a CSV file related to the Device Type.
     *
     * @param string $dtid Device Type ID. (required)
     * @param string $file Device Type ID. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\UploadIdEnvelope, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadCSVWithHttpInfo($dtid, $file)
    {
        // verify the required parameter 'dtid' is set
        if ($dtid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dtid when calling uploadCSV');
        }
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling uploadCSV');
        }
        // parse inputs
        $resourcePath = "/devicetypes/{dtid}/whitelist";
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
        if ($dtid !== null) {
            $resourcePath = str_replace(
                "{" . "dtid" . "}",
                $this->apiClient->getSerializer()->toPathValue($dtid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($file)) {
            $_tempBody = $file;
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
                '\ArtikCloud\ArtikCloud\Model\UploadIdEnvelope',
                '/devicetypes/{dtid}/whitelist'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\UploadIdEnvelope', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\UploadIdEnvelope', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
