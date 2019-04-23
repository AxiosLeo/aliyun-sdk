<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CCCClient
 *
 * @package aliyun\sdk\services
 * @method CCC20170705\V20170705 V20170705() static
 */
class CCC extends ProductAbstract
{
    use ProductTrait;

    protected $product = "CCC";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-hangzhou",
            "cn-shanghai",
        ],
        "public"   => [
            "cn-hangzhou"    => "ccc.cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "ccc.cn-shanghai.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}