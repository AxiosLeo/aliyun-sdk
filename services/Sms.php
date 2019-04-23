<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class SmsClient
 *
 * @package aliyun\sdk\services
 * @method Sms20170525\V20170525 V20170525() static
 * @method Sms20170228\V20170228 V20170228() static
 * @method Sms20170104\V20170104 V20170104() static
 * @method Sms20161229\V20161229 V20161229() static
 * @method Sms20160927\V20160927 V20160927() static
 */
class Sms extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Sms";

    protected $service_code = "";

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
            "ap-northeast-1" => "sms.aliyuncs.com",
            "ap-south-1"     => "sms.aliyuncs.com",
            "ap-southeast-1" => "sms.aliyuncs.com",
            "ap-southeast-2" => "sms.aliyuncs.com",
            "ap-southeast-3" => "sms.aliyuncs.com",
            "ap-southeast-5" => "sms.aliyuncs.com",
            "cn-beijing"     => "sms.aliyuncs.com",
            "cn-chengdu"     => "sms.aliyuncs.com",
            "cn-hangzhou"    => "sms.aliyuncs.com",
            "cn-hongkong"    => "sms.aliyuncs.com",
            "cn-huhehaote"   => "sms.aliyuncs.com",
            "cn-qingdao"     => "sms.aliyuncs.com",
            "cn-shanghai"    => "sms.aliyuncs.com",
            "cn-shenzhen"    => "sms.aliyuncs.com",
            "cn-zhangjiakou" => "sms.aliyuncs.com",
            "eu-central-1"   => "sms.aliyuncs.com",
            "eu-west-1"      => "sms.aliyuncs.com",
            "me-east-1"      => "sms.aliyuncs.com",
            "us-east-1"      => "sms.aliyuncs.com",
            "us-west-1"      => "sms.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}