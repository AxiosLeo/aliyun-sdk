<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class FoasClient
 *
 * @package aliyun\sdk\services
 * @method Foas20181111\V20181111 V20181111() static
 */
class Foas extends ProductAbstract
{
    use ProductTrait;

    protected $product = "foas";

    protected $service_code = "foas";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-northeast-1",
            "ap-southeast-1",
            "ap-southeast-3",
            "cn-beijing",
            "cn-hangzhou",
            "cn-qingdao",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
        ],
        "public"   => [
            "ap-northeast-1" => "foas.ap-northeast-1.aliyuncs.com",
            "ap-southeast-1" => "foas.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "foas.ap-southeast-3.aliyuncs.com",
            "cn-beijing"     => "foas.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "foas.cn-hangzhou.aliyuncs.com",
            "cn-qingdao"     => "foas.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "foas.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "foas.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "foas.cn-zhangjiakou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}