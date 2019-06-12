<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CSBClient
 *
 * @package aliyun\sdk\services
 * @method CSB20171118\V20171118 V20171118() static
 */
class CSB extends ProductAbstract
{
    use ProductTrait;

    protected $product = "CSB";

    protected $service_code = "csb";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-beijing",
            "cn-hangzhou",
            "cn-shanghai",
            "cn-shenzhen",
        ],
        "public"   => [
            "cn-beijing"     => "csb.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "csb.cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "csb.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "csb.cn-shenzhen.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}