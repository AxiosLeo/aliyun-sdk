<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class AlimtClient
 *
 * @package aliyun\sdk\services
 * @method Alimt20190107\V20190107 V20190107() static
 * @method Alimt20181012\V20181012 V20181012() static
 * @method Alimt20180807\V20180807 V20180807() static
 */
class Alimt extends ProductAbstract
{
    use ProductTrait;

    protected $product = "alimt";

    protected $service_code = "alimt";

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
            "ap-northeast-1" => "mt.ap-southeast-1.aliyuncs.com",
            "ap-south-1"     => "mt.ap-southeast-1.aliyuncs.com",
            "ap-southeast-1" => "mt.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "mt.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "mt.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5" => "mt.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "mt.aliyuncs.com",
            "cn-chengdu"     => "mt.aliyuncs.com",
            "cn-hangzhou"    => "mt.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "mt.aliyuncs.com",
            "cn-huhehaote"   => "mt.aliyuncs.com",
            "cn-qingdao"     => "mt.aliyuncs.com",
            "cn-shanghai"    => "mt.aliyuncs.com",
            "cn-shenzhen"    => "mt.aliyuncs.com",
            "cn-zhangjiakou" => "mt.aliyuncs.com",
            "eu-central-1"   => "mt.ap-southeast-1.aliyuncs.com",
            "eu-west-1"      => "mt.ap-southeast-1.aliyuncs.com",
            "me-east-1"      => "mt.ap-southeast-1.aliyuncs.com",
            "us-east-1"      => "mt.ap-southeast-1.aliyuncs.com",
            "us-west-1"      => "mt.ap-southeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}