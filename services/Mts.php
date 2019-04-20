<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class MtsClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Mts20180528\V20180528 V20180528() static
 * @method \aliyun\sdk\services\Mts20180201\V20180201 V20180201() static
 * @method \aliyun\sdk\services\Mts20140618\V20140618 V20140618() static
 */
class Mts extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Mts";

    protected $service_code = "mts";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-northeast-1",
            "ap-south-1",
            "ap-southeast-1",
            "ap-southeast-2",
            "ap-southeast-3",
            "ap-southeast-5",
            "cn-beijing",
            "cn-chengdu",
            "cn-hangzhou",
            "cn-hongkong",
            "cn-huhehaote",
            "cn-qingdao",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
            "eu-central-1",
            "eu-west-1",
            "me-east-1",
            "us-east-1",
            "us-west-1",
        ],
        "public"   => [
            "ap-northeast-1" => "mts.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "mts.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "mts.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "mts.ap-northeast-1.aliyuncs.com",
            "ap-southeast-3" => "mts.ap-northeast-1.aliyuncs.com",
            "ap-southeast-5" => "mts.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "mts.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "mts.aliyuncs.com",
            "cn-hangzhou"    => "mts.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "mts.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "mts.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "mts.aliyuncs.com",
            "cn-shanghai"    => "mts.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "mts.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "mts.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "mts.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "mts.eu-west-1.aliyuncs.com",
            "me-east-1"      => "mts.ap-northeast-1.aliyuncs.com",
            "us-east-1"      => "mts.ap-northeast-1.aliyuncs.com",
            "us-west-1"      => "mts.us-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}