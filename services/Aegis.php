<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class AegisClient
 *
 * @package aliyun\sdk\services
 * @method Aegis20161111\V20161111 V20161111() static
 */
class Aegis extends ProductAbstract
{
    use ProductTrait;

    protected $product = "aegis";

    protected $service_code = "vipaegis";

    protected $credential = "RpcCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-hangzhou",
        ],
        "public"   => [
            "cn-hangzhou"    => "aegis.cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}