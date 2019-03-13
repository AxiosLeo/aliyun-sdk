<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setEntityId($EntityId)
 * @method integer getEntityId()
 * @method $this setRemoveType($RemoveType)
 * @method string getRemoveType()
 * @method $this setMember($Member)
 * @method string getMember()
 */
final class RemoveEntityMember extends ChatbotCommon
{
    public $action = 'RemoveEntityMember';
}
