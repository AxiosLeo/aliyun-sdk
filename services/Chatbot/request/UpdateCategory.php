<?php
namespace aliyun\sdk\services\Chatbot\request;

use aliyun\sdk\services\Chatbot\ChatbotCommon;

/**
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setCategoryId($CategoryId)
 * @method integer getCategoryId()
 */
final class UpdateCategory extends ChatbotCommon
{
    public $action = 'UpdateCategory';
}
