<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class ImmClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Imm20170906\V20170906 V20170906() static
 */
class Imm extends ProductAbstract
{
    use ProductTrait;

    protected $product = "imm";

    protected $service_code = "imm";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-southeast-1",
            "cn-beijing",
            "cn-hangzhou",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
        ],
        "public"   => [
            "ap-southeast-1" => "imm.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "imm.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "imm.cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "imm.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "imm.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "imm.cn-zhangjiakou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}