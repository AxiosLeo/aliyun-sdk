<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setIntentDefinition($IntentDefinition)
 * @method string getIntentDefinition()
 * @method $this setIntentId($IntentId)
 * @method integer getIntentId()
 */
final class UpdateIntent extends ChatbotCommon
{
    public $action = 'UpdateIntent';
}
