<?php
/**
 * RulesApiTest
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
 * RulesApiTest Class Doc Comment
 *
 * @category Class
 * @package  ArtikCloud
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RulesApiTest extends ArtikTestCase
{

    public static $api_client;
    public static $rules_api;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
        $accessToken = static::$artikParams['user1']['token'];

        self::$api_client = new ApiClient();
        self::$api_client->getConfig()->setAccessToken($accessToken);
        self::$rules_api = new Api\RulesApi(self::$api_client);
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
        static::$rules_api = null;
    }

    /**
     * Test case for createRule
     *
     * Create Rule.
     *
     */
    public function testCreateRule()
    {
        // TODO uncomment below to test the method and replace null with proper value
        //$ruleInfo = null;
        //$userId = null;
        //$ruleEnvelope = static::$rules_api->CreateRule($ruleInfo, $userId);
        //$this->assertInstanceOf('ArtikCloud\Model\RuleEnvelope, $ruleEnvelope, 'Response must be an instance of ArtikCloud\Model\DeviceTokenEnvelope');
    }

    /**
     * Test case for deleteRule
     *
     * Delete Rule.
     *
     */
    public function testDeleteRule()
    {
        // TODO uncomment below to test the method and replace null with proper value
        //$ruleId = null;
        //$ruleEnvelope = static::$rules_api->DeleteRule($ruleId);
        //$this->assertInstanceOf('ArtikCloud\Model\RuleEnvelope, $ruleEnvelope, 'Response must be an instance of ArtikCloud\Model\DeviceTokenEnvelope');
    }

    /**
     * Test case for getRule
     *
     * Get Rule.
     *
     */
    public function testGetRule()
    {

    }

    /**
     * Test case for updateRule
     *
     * Update Rule.
     *
     */
    public function testUpdateRule()
    {

    }

}
