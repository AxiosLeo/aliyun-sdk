<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class OpenanalyticsClient
 *
 * @package aliyun\sdk\services
 */
class Openanalytics extends ProductAbstract
{
    use ProductTrait;

    protected $product = "openanalytics";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-southeast-1",
            "ap-southeast-3",
            "cn-beijing",
            "cn-hangzhou",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
            "eu-west-1",
        ],
        "public"   => [
            "ap-southeast-1" => "openanalytics.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "openanalytics.ap-southeast-3.aliyuncs.com",
            "cn-beijing"     => "openanalytics.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "openanalytics.cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "openanalytics.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "openanalytics.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "openanalytics.cn-zhangjiakou.aliyuncs.com",
            "eu-west-1"      => "openanalytics.eu-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}