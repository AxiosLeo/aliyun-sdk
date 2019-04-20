<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DrcloudClient
 *
 * @package aliyun\sdk\services
 */
class Drcloud extends ProductAbstract
{
    use ProductTrait;

    protected $product = "drcloud";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-hangzhou",
        ],
        "public"   => [
            "cn-hangzhou"    => "drcloud.cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}