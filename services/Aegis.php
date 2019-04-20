<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class AegisClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Aegis20161111\V20161111 V20161111() static
 */
class Aegis extends ProductAbstract
{
    use ProductTrait;

    protected $product = "aegis";

    protected $service_code = "vipaegis";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-southeast-3",
            "cn-hangzhou",
        ],
        "public"   => [
            "ap-southeast-3" => "aegis.ap-southeast-3.aliyuncs.com",
            "cn-hangzhou"    => "aegis.cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}