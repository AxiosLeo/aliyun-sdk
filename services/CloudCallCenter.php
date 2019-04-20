<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CloudCallCenterClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\CloudCallCenter20170705\V20170705 V20170705() static
 */
class CloudCallCenter extends ProductAbstract
{
    use ProductTrait;

    protected $product = "CloudCallCenter";

    protected $service_code = "ccc";

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