<?php
/**
 * RegistrationsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  ArtikCloud
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ARTIK Cloud API
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace ArtikCloud;

use \ArtikCloud\Configuration;
use \ArtikCloud\ApiClient;
use \ArtikCloud\ApiException;
use \ArtikCloud\ObjectSerializer;
use \ArtikCloudTests\ArtikTestCase;

/**
 * RegistrationsApiTest Class Doc Comment
 *
 * @category Class
 * @package  ArtikCloud
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RegistrationsApiTest extends ArtikTestCase
{

    public static $api_client;
    public static $registrations_api;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
        $accessToken = static::$artikParams['user1']['token'];

        self::$api_client = new ApiClient();
        self::$api_client->getConfig()->setAccessToken($accessToken);
        self::$registrations_api = new Api\RegistrationsApi(self::$api_client);
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
        static::$api_client = null;
        static::$registrations_api = null;
    }

    /**
     * Test case for confirmUser
     *
     * Confirm User.
     *
     */
    public function testConfirmUser()
    {
        // TODO uncomment below to test the method and replace null with proper value
        //$registrationInfo = null;
        //$deviceRegConfirmUserResponseEnvelope static::$registrations_api->ConfirmUser($registrationInfo);
        //$this->assertInstanceOf('ArtikCloud\Model\DeviceRegConfirmUserResponseEnvelope', $deviceRegConfirmUserResponseEnvelope, 'Response must be an instance of ArtikCloud\Model\DeviceRegConfirmUserResponseEnvelope');
    }

    /**
     * Test case for getRequestStatusForUser
     *
     * Get Request Status For User.
     *
     */
    public function testGetRequestStatusForUser()
    {
        // TODO uncomment below to test the method and replace null with proper value
        //$requestId = null;
        //$deviceRegStatusResponseEnvelope static::$registrations_api->GetRequestStatusForUser($requestId);
        //$this->assertInstanceOf('ArtikCloud\Model\DeviceRegStatusResponseEnvelope', $deviceRegStatusResponseEnvelope, 'Response must be an instance of ArtikCloud\Model\DeviceRegStatusResponseEnvelope');
    }

    /**
     * Test case for unregisterDevice
     *
     * Unregister Device.
     *
     */
    public function testUnregisterDevice()
    {
        // TODO uncomment below to test the method and replace null with proper value
        //$deviceId = null;
        //$unregisterDeviceResponseEnvelope static::$registrations_api->UnregisterDevice($deviceId);
        //$this->assertInstanceOf('ArtikCloud\Model\UnregisterDeviceResponseEnvelope', $unregisterDeviceResponseEnvelope, 'Response must be an instance of ArtikCloud\Model\UnregisterDeviceResponseEnvelope');
    }

}
