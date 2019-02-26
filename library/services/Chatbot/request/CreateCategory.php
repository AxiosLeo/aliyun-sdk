<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setParentCategoryId($ParentCategoryId)
 * @method integer getParentCategoryId()
 * @method $this setName($Name)
 * @method string getName()
 */
final class CreateCategory extends ChatbotCommon
{
    public $action = 'CreateCategory';
}
