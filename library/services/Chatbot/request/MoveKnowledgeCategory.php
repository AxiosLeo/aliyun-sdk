<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setKnowledgeId($KnowledgeId)
 * @method integer getKnowledgeId()
 * @method $this setCategoryId($CategoryId)
 * @method integer getCategoryId()
 */
final class MoveKnowledgeCategory extends ChatbotCommon
{
    public $action = 'MoveKnowledgeCategory';
}
