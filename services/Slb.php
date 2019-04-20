<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class SlbClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Slb20140515\V20140515 V20140515() static
 * @method \aliyun\sdk\services\Slb20130221\V20130221 V20130221() static
 */
class Slb extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Slb";

    protected $service_code = "slb";

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
            "ap-northeast-1" => "slb.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "slb.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "slb.ap-northeast-1.aliyuncs.com",
            "ap-southeast-2" => "slb.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "slb.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "slb.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "slb.aliyuncs.com",
            "cn-chengdu"     => "slb.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "slb.aliyuncs.com",
            "cn-hongkong"    => "slb.aliyuncs.com",
            "cn-huhehaote"   => "slb.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "slb.aliyuncs.com",
            "cn-shanghai"    => "slb.aliyuncs.com",
            "cn-shenzhen"    => "slb.aliyuncs.com",
            "cn-zhangjiakou" => "slb.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "slb.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "slb.eu-west-1.aliyuncs.com",
            "me-east-1"      => "slb.me-east-1.aliyuncs.com",
            "us-east-1"      => "slb.ap-northeast-1.aliyuncs.com",
            "us-west-1"      => "slb.ap-northeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}