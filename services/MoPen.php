<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class MoPenClient
 *
 * @package aliyun\sdk\services
 * @method MoPen20180211\V20180211 V20180211() static
 */
class MoPen extends ProductAbstract
{
    use ProductTrait;

    protected $product = "MoPen";

    protected $service_code = "mopen";

    protected $credential = "RpcCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-shanghai",
        ],
        "public"   => [
            "cn-shanghai"    => "iot-mopen.cn-shanghai.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
