<?php
namespace aliyun\sdk\services\Chatbot;

use aliyun\sdk\core\lib\Request;

class ChatbotCommon extends Request
{
    use \aliyun\sdk\core\traits\Request;

    public $product = 'chatbot';

    public $version = '2017-10-11';

    public $locationServiceCode = 'beebot';

    public $locationEndpointType = 'openAPI';

    public $auth = false;

    public $regional_endpoints = [];
}
