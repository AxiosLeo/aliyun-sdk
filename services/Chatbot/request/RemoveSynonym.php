<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setCoreWordName($CoreWordName)
 * @method string getCoreWordName()
 * @method $this setSynonym($Synonym)
 * @method string getSynonym()
 */
final class RemoveSynonym extends ChatbotCommon
{
    public $action = 'RemoveSynonym';
}
