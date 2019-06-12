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
            "ap-southeast-1",
            "cn-hangzhou",
        ],
        "public"   => [
            "ap-southeast-1" => "ddoscoo.ap-southeast-1.aliyuncs.com",
            "cn-hangzhou"    => "ddoscoo.cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}