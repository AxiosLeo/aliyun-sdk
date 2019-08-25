<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class SmartagClient
 *
 * @package aliyun\sdk\services
 * @method Smartag20180313\V20180313 V20180313() static
 */
class Smartag extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Smartag";

    protected $service_code = "smartag";

    protected $credential = "RpcCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-southeast-1",
            "ap-southeast-2",
            "cn-hangzhou",
            "cn-hongkong",
            "cn-shanghai",
        ],
        "public"   => [
            "ap-southeast-1" => "smartag.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "smartag.ap-southeast-2.aliyuncs.com",
            "cn-hangzhou"    => "smartag.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "smartag.cn-hongkong.aliyuncs.com",
            "cn-shanghai"    => "smartag.cn-shanghai.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
