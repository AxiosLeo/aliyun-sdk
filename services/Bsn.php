<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class BsnClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Bsn20181009\V20181009 V20181009() static
 * @method \aliyun\sdk\services\Bsn20150512\V20150512 V20150512() static
 */
class Bsn extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Bsn";

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
            "ap-northeast-1" => "bsn.aliyuncs.com",
            "ap-south-1"     => "bsn.aliyuncs.com",
            "ap-southeast-1" => "bsn.aliyuncs.com",
            "ap-southeast-2" => "bsn.aliyuncs.com",
            "ap-southeast-3" => "bsn.aliyuncs.com",
            "ap-southeast-5" => "bsn.aliyuncs.com",
            "cn-beijing"     => "bsn.aliyuncs.com",
            "cn-chengdu"     => "bsn.aliyuncs.com",
            "cn-hangzhou"    => "bsn.aliyuncs.com",
            "cn-hongkong"    => "bsn.aliyuncs.com",
            "cn-huhehaote"   => "bsn.aliyuncs.com",
            "cn-qingdao"     => "bsn.aliyuncs.com",
            "cn-shanghai"    => "bsn.aliyuncs.com",
            "cn-shenzhen"    => "bsn.aliyuncs.com",
            "cn-zhangjiakou" => "bsn.aliyuncs.com",
            "eu-central-1"   => "bsn.aliyuncs.com",
            "eu-west-1"      => "bsn.aliyuncs.com",
            "me-east-1"      => "bsn.aliyuncs.com",
            "us-east-1"      => "bsn.aliyuncs.com",
            "us-west-1"      => "bsn.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}