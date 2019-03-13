<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setKnowledgeTitle($KnowledgeTitle)
 * @method string getKnowledgeTitle()
 * @method $this setCoreWordName($CoreWordName)
 * @method string getCoreWordName()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryKnowledges extends ChatbotCommon
{
    public $action = 'QueryKnowledges';
}
