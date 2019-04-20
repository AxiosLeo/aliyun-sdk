<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class SafClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Saf20190128\V20190128 V20190128() static
 * @method \aliyun\sdk\services\Saf20190120\V20190120 V20190120() static
 * @method \aliyun\sdk\services\Saf20180919\V20180919 V20180919() static
 * @method \aliyun\sdk\services\Saf20171001\V20171001 V20171001() static
 * @method \aliyun\sdk\services\Saf20170331\V20170331 V20170331() static
 */
class Saf extends ProductAbstract
{
    use ProductTrait;

    protected $product = "saf";

    protected $service_code = "saf";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-southeast-1",
            "cn-beijing",
            "cn-hangzhou",
            "cn-hongkong",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
        ],
        "public"   => [
            "ap-southeast-1" => "saf.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "saf.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "saf.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "saf.cn-hongkong.aliyuncs.com",
            "cn-shanghai"    => "saf.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "saf.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "saf.cn-zhangjiakou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}