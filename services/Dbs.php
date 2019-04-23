<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DbsClient
 *
 * @package aliyun\sdk\services
 * @method Dbs20190306\V20190306 V20190306() static
 */
class Dbs extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Dbs";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-northeast-1",
            "ap-southeast-1",
            "cn-hangzhou",
        ],
        "public"   => [
            "ap-northeast-1" => "dbs-api.ap-northeast-1.aliyuncs.com",
            "ap-southeast-1" => "dbs-api.ap-southeast-1.aliyuncs.com",
            "cn-hangzhou"    => "dbs-api.cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}