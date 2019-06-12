<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DmClient
 *
 * @package aliyun\sdk\services
 * @method Dm20170622\V20170622 V20170622() static
 * @method Dm20160825\V20160825 V20160825() static
 * @method Dm20151123\V20151123 V20151123() static
 */
class Dm extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Dm";

    protected $service_code = "dm";

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
            "ap-northeast-1" => "dm.aliyuncs.com",
            "ap-south-1"     => "dm.aliyuncs.com",
            "ap-southeast-1" => "dm.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "dm.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "dm.aliyuncs.com",
            "ap-southeast-5" => "dm.aliyuncs.com",
            "cn-beijing"     => "dm.aliyuncs.com",
            "cn-chengdu"     => "dm.aliyuncs.com",
            "cn-hangzhou"    => "dm.aliyuncs.com",
            "cn-hongkong"    => "dm.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "dm.aliyuncs.com",
            "cn-qingdao"     => "dm.aliyuncs.com",
            "cn-shanghai"    => "dm.aliyuncs.com",
            "cn-shenzhen"    => "dm.aliyuncs.com",
            "cn-zhangjiakou" => "dm.aliyuncs.com",
            "eu-central-1"   => "dm.aliyuncs.com",
            "eu-west-1"      => "dm.aliyuncs.com",
            "me-east-1"      => "dm.aliyuncs.com",
            "us-east-1"      => "dm.aliyuncs.com",
            "us-west-1"      => "dm.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}