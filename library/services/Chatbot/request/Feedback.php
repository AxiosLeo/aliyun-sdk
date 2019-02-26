<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setSessionId($SessionId)
 * @method string getSessionId()
 * @method $this setMessageId($MessageId)
 * @method string getMessageId()
 * @method $this setFeedback($Feedback)
 * @method string getFeedback()
 */
final class Feedback extends ChatbotCommon
{
    public $action = 'Feedback';
}
