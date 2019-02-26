<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setEntityId($EntityId)
 * @method integer getEntityId()
 * @method $this setApplyType($ApplyType)
 * @method string getApplyType()
 * @method $this setMember($Member)
 * @method string getMember()
 */
final class AppendEntityMember extends ChatbotCommon
{
    public $action = 'AppendEntityMember';
}
