<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class LubancloudClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Lubancloud20180509\V20180509 V20180509() static
 */
class Lubancloud extends ProductAbstract
{
    use ProductTrait;

    protected $product = "lubancloud";

    protected $service_code = "luban";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-hangzhou",
            "cn-shanghai",
        ],
        "public"   => [
            "cn-hangzhou"    => "luban.cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "luban.cn-shanghai.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}