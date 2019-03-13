<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setDialogId($DialogId)
 * @method integer getDialogId()
 * @method $this setDialogName($DialogName)
 * @method string getDialogName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class UpdateDialog extends ChatbotCommon
{
    public $action = 'UpdateDialog';
}
