<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setEntityName($EntityName)
 * @method string getEntityName()
 * @method $this setDialogId($DialogId)
 * @method integer getDialogId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryEntities extends ChatbotCommon
{
    public $action = 'QueryEntities';
}
