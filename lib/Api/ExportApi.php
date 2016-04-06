<?php
/**
 * ExportApi
 * PHP version 5
 *
 * @category Class
 * @package  ArtikCloud
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace ArtikCloud\Api;

use \ArtikCloud\Configuration;
use \ArtikCloud\ApiClient;
use \ArtikCloud\ApiException;
use \ArtikCloud\ObjectSerializer;

/**
 * ExportApi Class Doc Comment
 *
 * @category Class
 * @package  ArtikCloud
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExportApi
{

    /**
     * API Client
     * @var \ArtikCloud\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \ArtikCloud\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.artik.cloud/v1.1');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \ArtikCloud\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \ArtikCloud\ApiClient $apiClient set the API client
     * @return ExportApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * exportRequest
     *
     * Create Export Request
     *
     * @param \ArtikCloud\Model\ExportRequestInfo $export_request_info ExportRequest object that is passed in the body (required)
     * @return \ArtikCloud\Model\ExportRequestResponse
     * @throws \ArtikCloud\ApiException on non-2xx response
     */
    public function exportRequest($export_request_info)
    {
        list($response, $statusCode, $httpHeader) = $this->exportRequestWithHttpInfo ($export_request_info);
        return $response; 
    }


    /**
     * exportRequestWithHttpInfo
     *
     * Create Export Request
     *
     * @param \ArtikCloud\Model\ExportRequestInfo $export_request_info ExportRequest object that is passed in the body (required)
     * @return Array of \ArtikCloud\Model\ExportRequestResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ArtikCloud\ApiException on non-2xx response
     */
    public function exportRequestWithHttpInfo($export_request_info)
    {
        
        // verify the required parameter 'export_request_info' is set
        if ($export_request_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $export_request_info when calling exportRequest');
        }
  
        // parse inputs
        $resourcePath = "/messages/export";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($export_request_info)) {
            $_tempBody = $export_request_info;
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
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\ArtikCloud\Model\ExportRequestResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\ArtikCloud\ObjectSerializer::deserialize($response, '\ArtikCloud\Model\ExportRequestResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            default:
                $data = \ArtikCloud\ObjectSerializer::deserialize($e->getResponseBody(), '\ArtikCloud\Model\ExportRequestResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getExportHistory
     *
     * Get Export History
     *
     * @param string $trial_id Filter by trialId. (optional)
     * @param int $count Pagination count. (optional)
     * @param int $offset Pagination offset. (optional)
     * @return \ArtikCloud\Model\ExportHistoryResponse
     * @throws \ArtikCloud\ApiException on non-2xx response
     */
    public function getExportHistory($trial_id = null, $count = null, $offset = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getExportHistoryWithHttpInfo ($trial_id, $count, $offset);
        return $response; 
    }


    /**
     * getExportHistoryWithHttpInfo
     *
     * Get Export History
     *
     * @param string $trial_id Filter by trialId. (optional)
     * @param int $count Pagination count. (optional)
     * @param int $offset Pagination offset. (optional)
     * @return Array of \ArtikCloud\Model\ExportHistoryResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ArtikCloud\ApiException on non-2xx response
     */
    public function getExportHistoryWithHttpInfo($trial_id = null, $count = null, $offset = null)
    {
        
  
        // parse inputs
        $resourcePath = "/messages/export/history";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        
        if ($trial_id !== null) {
            $queryParams['trialId'] = $this->apiClient->getSerializer()->toQueryValue($trial_id);
        }// query params
        
        if ($count !== null) {
            $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($count);
        }// query params
        
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
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
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\ArtikCloud\Model\ExportHistoryResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\ArtikCloud\ObjectSerializer::deserialize($response, '\ArtikCloud\Model\ExportHistoryResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            default:
                $data = \ArtikCloud\ObjectSerializer::deserialize($e->getResponseBody(), '\ArtikCloud\Model\ExportHistoryResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getExportResult
     *
     * Get Export Result
     *
     * @param string $export_id Export ID of the export query. (required)
     * @return string
     * @throws \ArtikCloud\ApiException on non-2xx response
     */
    public function getExportResult($export_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getExportResultWithHttpInfo ($export_id);
        return $response; 
    }


    /**
     * getExportResultWithHttpInfo
     *
     * Get Export Result
     *
     * @param string $export_id Export ID of the export query. (required)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \ArtikCloud\ApiException on non-2xx response
     */
    public function getExportResultWithHttpInfo($export_id)
    {
        
        // verify the required parameter 'export_id' is set
        if ($export_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $export_id when calling getExportResult');
        }
  
        // parse inputs
        $resourcePath = "/messages/export/{exportId}/result";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($export_id !== null) {
            $resourcePath = str_replace(
                "{" . "exportId" . "}",
                $this->apiClient->getSerializer()->toPathValue($export_id),
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
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, 'string'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\ArtikCloud\ObjectSerializer::deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            default:
                $data = \ArtikCloud\ObjectSerializer::deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * getExportStatus
     *
     * Check Export Status
     *
     * @param string $export_id Export ID of the export query. (required)
     * @return \ArtikCloud\Model\ExportStatusResponse
     * @throws \ArtikCloud\ApiException on non-2xx response
     */
    public function getExportStatus($export_id)
    {
        list($response, $statusCode, $httpHeader) = $this->getExportStatusWithHttpInfo ($export_id);
        return $response; 
    }


    /**
     * getExportStatusWithHttpInfo
     *
     * Check Export Status
     *
     * @param string $export_id Export ID of the export query. (required)
     * @return Array of \ArtikCloud\Model\ExportStatusResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ArtikCloud\ApiException on non-2xx response
     */
    public function getExportStatusWithHttpInfo($export_id)
    {
        
        // verify the required parameter 'export_id' is set
        if ($export_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $export_id when calling getExportStatus');
        }
  
        // parse inputs
        $resourcePath = "/messages/export/{exportId}/status";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        // path params
        
        if ($export_id !== null) {
            $resourcePath = str_replace(
                "{" . "exportId" . "}",
                $this->apiClient->getSerializer()->toPathValue($export_id),
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
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\ArtikCloud\Model\ExportStatusResponse'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\ArtikCloud\ObjectSerializer::deserialize($response, '\ArtikCloud\Model\ExportStatusResponse', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            default:
                $data = \ArtikCloud\ObjectSerializer::deserialize($e->getResponseBody(), '\ArtikCloud\Model\ExportStatusResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
