<?php
/**
 * MessagesApiTest
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
 * MessagesApiTest Class Doc Comment
 *
 * @category Class
 * @package  ArtikCloud
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessagesApiTest extends ArtikTestCase
{

    public static $api_client;
    public static $messages_api;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
        self::$api_client = new ApiClient();
        self::$api_client->getConfig()->setAccessToken(static::$artikParams['user1']['token']);

        self::$messages_api = new Api\UsersApi(self::$api_client);
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
        self::$api_client = null;
        self::$messages_api = null;
    }

    /**
     * Test case for getAggregatesHistogram
     *
     * Get Histogram aggregates.
     *
     */
    public function testGetAggregatesHistogram()
    {
        // TODO uncomment below to test the method and replace null with proper value
        //$startDate = null;
        //$endDate = null;
        //$sdid = null;
        //$field = null;
        //$interval = null;
        //$aggregatesHistogramResponse = self::$messages_api->GetAggregatesHistogram($startDate, $endDate, $sdid, $field, $interval);
        //$this->assertInstanceOf('ArtikCloud\Model\AggregatesHistogramResponse', $aggregatesHistogramResponse, 'Response must be an instance of ArtikCloud\Model\AggregatesHistogramResponse');
    }

    /**
     * Test case for getFieldPresence
     *
     * Get normalized message presence.
     *
     */
    public function testGetFieldPresence()
    {
        // TODO uncomment below to test the method and replace null with proper value
        //$startDate = null;
        //$endDate = null;
        //$interval = null;
        //$sdid = null;
        //$fieldPresence = null;
        //$fieldPresenceEnvelope = self::$messages_api->GetFieldPresence($startDate, $endDate, $interval, $sdid, $fieldPresence);
        //$this->assertInstanceOf('ArtikCloud\Model\FieldPresenceEnvelope', $fieldPresenceEnvelope, 'Response must be an instance of ArtikCloud\Model\FieldPresenceEnvelope');
    }

    /**
     * Test case for getLastNormalizedMessages
     *
     * Get Last Normalized Message.
     *
     */
    public function testGetLastNormalizedMessages()
    {
        // TODO uncomment below to test the method and replace null with proper value
        //$count = null;
        //$sdids = null;
        //$fieldPresence = null;
        //$normalizedMessagesEnvelope = self::$messages_api->GetLastNormalizedMessages($count, $sdids, $fieldPresence);
        //$this->assertInstanceOf('ArtikCloud\Model\NormalizedMessagesEnvelope', $normalizedMessagesEnvelope, 'Response must be an instance of ArtikCloud\Model\NormalizedMessagesEnvelope');
    }

    /**
     * Test case for getMessageAggregates
     *
     * Get Normalized Message Aggregates.
     *
     */
    public function testGetMessageAggregates()
    {

    }

    /**
     * Test case for getMessageSnapshots
     *
     * Get Message Snapshots.
     *
     */
    public function testGetMessageSnapshots()
    {

    }

    /**
     * Test case for getNormalizedMessages
     *
     * Get Normalized Messages.
     *
     */
    public function testGetNormalizedMessages()
    {

    }

    /**
     * Test case for sendMessageAction
     *
     * Send Message Action
     *
     */
    public function test_sendMessage() {
      $device_token = 'dc43d12e2b59495daf94631e6ddfe3e8';
      $device_sdid = '19da42ee01414722a6ad1224097c38d4';

      $api_client = new ApiClient();
      $api_client->getConfig()->setAccessToken($device_token);
      //$api_client->getConfig()->setDebug(true);
      $messages_api = new Api\MessagesApi($api_client);

      $message = new Model\Message();
      $message->setSdid($device_sdid);
      $message->setTs(round(microtime(true) * 1000));
      $message->setType("message");

      //$message_data = [ "volume" => 5];
      $message_data = array("steps" => 5 );
      $message->setData($message_data);

      $message_id_env = $messages_api->sendMessage($message);
      $this->assertInstanceOf('ArtikCloud\Model\MessageIDEnvelope', $message_id_env);

      $message_id = $message_id_env->getData()->getMid();

      sleep(2);

      $normalized_messages = $messages_api->getNormalizedMessages(null, null, $message_id, null, null, null, null, null, null, null);
      $this->assertInstanceOf('ArtikCloud\Model\NormalizedMessagesEnvelope', $normalized_messages);
      $this->assertSame($normalized_messages->getSize(), 1);

      $normalized = $normalized_messages->getData()[0];
      $this->assertSame($normalized->getMid(), $message_id);

      // Get Scalar Values from Normalized Message
      $steps = $normalized->getData()["steps"][0];
      $this->assertSame($steps, 5);
    }

}
