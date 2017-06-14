<?php
/**
 * TokensApi
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
 * TokensApi Class Doc Comment
 *
 * @category Class
 * @package  ArtikCloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TokensApi
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
     * @return TokensApi
     */
    public function setApiClient(\ArtikCloud\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation checkToken
     *
     * Check Token
     *
     * @param \ArtikCloud\ArtikCloud\Model\TokenRequest $token_info Token object to be checked (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\CheckTokenResponse
     */
    public function checkToken($token_info)
    {
        list($response) = $this->checkTokenWithHttpInfo($token_info);
        return $response;
    }

    /**
     * Operation checkTokenWithHttpInfo
     *
     * Check Token
     *
     * @param \ArtikCloud\ArtikCloud\Model\TokenRequest $token_info Token object to be checked (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\CheckTokenResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkTokenWithHttpInfo($token_info)
    {
        // verify the required parameter 'token_info' is set
        if ($token_info === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token_info when calling checkToken');
        }
        // parse inputs
        $resourcePath = "/accounts/checkToken";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($token_info)) {
            $_tempBody = $token_info;
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
                '\ArtikCloud\ArtikCloud\Model\CheckTokenResponse',
                '/accounts/checkToken'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\CheckTokenResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\CheckTokenResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation refreshToken
     *
     * Refresh Token
     *
     * @param string $grant_type Grant Type. (required)
     * @param string $refresh_token Refresh Token. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\RefreshTokenResponse
     */
    public function refreshToken($grant_type, $refresh_token)
    {
        list($response) = $this->refreshTokenWithHttpInfo($grant_type, $refresh_token);
        return $response;
    }

    /**
     * Operation refreshTokenWithHttpInfo
     *
     * Refresh Token
     *
     * @param string $grant_type Grant Type. (required)
     * @param string $refresh_token Refresh Token. (required)
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\RefreshTokenResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function refreshTokenWithHttpInfo($grant_type, $refresh_token)
    {
        // verify the required parameter 'grant_type' is set
        if ($grant_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_type when calling refreshToken');
        }
        // verify the required parameter 'refresh_token' is set
        if ($refresh_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $refresh_token when calling refreshToken');
        }
        // parse inputs
        $resourcePath = "/accounts/token";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = $this->apiClient->getSerializer()->toFormValue($grant_type);
        }
        // form params
        if ($refresh_token !== null) {
            $formParams['refresh_token'] = $this->apiClient->getSerializer()->toFormValue($refresh_token);
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
                '\ArtikCloud\ArtikCloud\Model\RefreshTokenResponse',
                '/accounts/token'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\RefreshTokenResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\RefreshTokenResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation tokenInfo
     *
     * Token Info
     *
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return \ArtikCloud\ArtikCloud\Model\TokenInfoSuccessResponse
     */
    public function tokenInfo()
    {
        list($response) = $this->tokenInfoWithHttpInfo();
        return $response;
    }

    /**
     * Operation tokenInfoWithHttpInfo
     *
     * Token Info
     *
     * @throws \ArtikCloud\ApiException on non-2xx response
     * @return array of \ArtikCloud\ArtikCloud\Model\TokenInfoSuccessResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function tokenInfoWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/accounts/tokenInfo";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

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
                '\ArtikCloud\ArtikCloud\Model\TokenInfoSuccessResponse',
                '/accounts/tokenInfo'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\ArtikCloud\ArtikCloud\Model\TokenInfoSuccessResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ArtikCloud\ArtikCloud\Model\TokenInfoSuccessResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
