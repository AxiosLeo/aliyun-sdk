<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setIntentDefinition($IntentDefinition)
 * @method string getIntentDefinition()
 * @method $this setDialogId($DialogId)
 * @method integer getDialogId()
 */
final class CreateIntent extends ChatbotCommon
{
    public $action = 'CreateIntent';
}
