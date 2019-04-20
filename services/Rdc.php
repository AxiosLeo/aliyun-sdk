<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class RdcClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Rdc20180821\V20180821 V20180821() static
 * @method \aliyun\sdk\services\Rdc20180816\V20180816 V20180816() static
 * @method \aliyun\sdk\services\Rdc20180426\V20180426 V20180426() static
 * @method \aliyun\sdk\services\Rdc20180104\V20180104 V20180104() static
 */
class Rdc extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Rdc";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-beijing",
        ],
        "public"   => [
            "cn-beijing"     => "rdc.cn-beijing.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}