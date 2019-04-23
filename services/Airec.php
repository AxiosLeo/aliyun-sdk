<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class AirecClient
 *
 * @package aliyun\sdk\services
 * @method Airec20181012\V20181012 V20181012() static
 */
class Airec extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Airec";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-beijing",
            "cn-hangzhou",
        ],
        "public"   => [
            "cn-beijing"     => "airec.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "airec.cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}