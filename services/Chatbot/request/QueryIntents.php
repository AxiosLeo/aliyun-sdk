<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setIntentName($IntentName)
 * @method string getIntentName()
 * @method $this setDialogId($DialogId)
 * @method integer getDialogId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryIntents extends ChatbotCommon
{
    public $action = 'QueryIntents';
}
