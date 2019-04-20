<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class NlpClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Nlp20180408\V20180408 V20180408() static
 */
class Nlp extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Nlp";

    protected $service_code = "nlp";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-shanghai",
            "eu-central-1",
        ],
        "public"   => [
            "cn-shanghai"    => "nlp.cn-shanghai.aliyuncs.com",
            "eu-central-1"   => "nlp.eu-central-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}