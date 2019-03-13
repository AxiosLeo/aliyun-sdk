<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setDialogName($DialogName)
 * @method string getDialogName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class CreateDialog extends ChatbotCommon
{
    public $action = 'CreateDialog';
}
