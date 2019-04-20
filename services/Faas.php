<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class FaasClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Faas20170824\V20170824 V20170824() static
 */
class Faas extends ProductAbstract
{
    use ProductTrait;

    protected $product = "faas";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-beijing",
            "cn-hangzhou",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
        ],
        "public"   => [
            "cn-beijing"     => "faas.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "faas.cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "faas.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "faas.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "faas.cn-zhangjiakou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}