<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setDialogId($DialogId)
 * @method integer getDialogId()
 * @method $this setEntityName($EntityName)
 * @method string getEntityName()
 * @method $this setEntityType($EntityType)
 * @method string getEntityType()
 * @method $this setRegex($Regex)
 * @method string getRegex()
 * @method $this setMembers($Members)
 * @method string getMembers()
 */
final class CreateEntity extends ChatbotCommon
{
    public $action = 'CreateEntity';
}
