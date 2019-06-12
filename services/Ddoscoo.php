<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DdoscooClient
 *
 * @package aliyun\sdk\services
 * @method Ddoscoo20171228\V20171228 V20171228() static
 */
class Ddoscoo extends ProductAbstract
{
    use ProductTrait;

    protected $product = "ddoscoo";

    protected $service_code = "ddoscoo";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-south-1",
            "ap-southeast-1",
            "ap-southeast-2",
            "cn-hangzhou",
        ],
        "public"   => [
            "ap-south-1"     => "ddoscoo.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "ddoscoo.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "ddoscoo.ap-southeast-2.aliyuncs.com",
            "cn-hangzhou"    => "ddoscoo.cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}