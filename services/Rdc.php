<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class RdcClient
 *
 * @package aliyun\sdk\services
 * @method Rdc20180821\V20180821 V20180821() static
 * @method Rdc20180816\V20180816 V20180816() static
 */
class Rdc extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Rdc";

    protected $service_code = "";

    protected $credential = "RpcCredential";

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