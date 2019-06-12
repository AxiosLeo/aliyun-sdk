<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class ChatbotClient
 *
 * @package aliyun\sdk\services
 * @method Chatbot20171011\V20171011 V20171011() static
 */
class Chatbot extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Chatbot";

    protected $service_code = "beebot";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-shanghai",
        ],
        "public"   => [
            "cn-shanghai"    => "chatbot.cn-shanghai.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}