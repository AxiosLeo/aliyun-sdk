<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setParentCategoryId($ParentCategoryId)
 * @method integer getParentCategoryId()
 * @method $this setShowChildrens($ShowChildrens)
 * @method boolean getShowChildrens()
 */
final class QueryCategories extends ChatbotCommon
{
    public $action = 'QueryCategories';
}
