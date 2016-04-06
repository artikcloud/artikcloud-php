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

 require_once('autoload.php');

/**
 * MessagesApiTest Class Doc Comment
 *
 * @category Class
 * @package  ArtikCloud
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessagesApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running each test case
     */
    public static function setUpBeforeClass() {

    }

    /**
     * Clean up after running each test case
     */
    public static function tearDownAfterClass() {

    }

    /**
     * Test case for sendMessageAction
     *
     * Send Message Action
     *
     */
    public function test_sendMessageAction() {
      $device_token = '1eef3e3251e147d1ac707a57f6779c49';
      $device_sdid = '993925c3cd994bf7a51c620884be65e9';

      $api_client = new ArtikCloud\ApiClient();
      $api_client->getConfig()->setAccessToken($device_token);
      //$api_client->getConfig()->setDebug(true);
      $messages_api = new ArtikCloud\Api\MessagesApi($api_client);

      $message = new ArtikCloud\Model\MessageAction();
      $message->setSdid('993925c3cd994bf7a51c620884be65e9');
      $message->setTs(round(microtime(true) * 1000));
      $message->setType("message");

      //$message_data = [ "volume" => 5];
      $message_data = array("volume" => 5 );
      $message->setData($message_data);

      $message_id_env = $messages_api->sendMessageAction($message);
      $this->assertInstanceOf('ArtikCloud\Model\MessageIDEnvelope', $message_id_env);

      $message_id = $message_id_env->getData()->getMid();

      sleep(2);

      $normalized_messages = $messages_api->getNormalizedMessages(null, null, $message_id, null, null, null, null, null, null, null);
      $this->assertInstanceOf('ArtikCloud\Model\NormalizedMessagesEnvelope', $normalized_messages);
      $this->assertSame($normalized_messages->getSize(), 1);

      $normalized = $normalized_messages->getData()[0];
      $this->assertSame($normalized->getMid(), $message_id);

      // Get Scalar Values from Normalized Message
      $volume = $normalized->getData()["volume"][0];
      $this->assertSame($volume, 5);
    }
}
