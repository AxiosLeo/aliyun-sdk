<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setDialogId($DialogId)
 * @method integer getDialogId()
 * @method $this setModuleDefinition($ModuleDefinition)
 * @method string getModuleDefinition()
 */
final class UpdateDialogFlow extends ChatbotCommon
{
    public $action = 'UpdateDialogFlow';
}
