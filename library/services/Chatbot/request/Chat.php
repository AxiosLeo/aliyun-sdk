<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setSessionId($SessionId)
 * @method string getSessionId()
 * @method $this setKnowledgeId($KnowledgeId)
 * @method string getKnowledgeId()
 * @method $this setSenderId($SenderId)
 * @method string getSenderId()
 * @method $this setSenderNick($SenderNick)
 * @method string getSenderNick()
 * @method $this setTag($Tag)
 * @method string getTag()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setUtterance($Utterance)
 * @method string getUtterance()
 * @method $this setPerspective($Perspective)
 * @method array getPerspective()
 */
final class Chat extends ChatbotCommon
{
    public $action = 'Chat';
}
