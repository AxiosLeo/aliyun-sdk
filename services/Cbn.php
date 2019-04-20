<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CbnClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Cbn20170912\V20170912 V20170912() static
 */
class Cbn extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Cbn";

    protected $service_code = "cbn";

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
            "ap-northeast-1" => "cen.us-east-1.aliyuncs.com",
            "ap-south-1"     => "cen.us-east-1.aliyuncs.com",
            "ap-southeast-1" => "cen.us-east-1.aliyuncs.com",
            "ap-southeast-2" => "cen.us-east-1.aliyuncs.com",
            "ap-southeast-3" => "cen.us-east-1.aliyuncs.com",
            "ap-southeast-5" => "cen.us-east-1.aliyuncs.com",
            "cn-beijing"     => "cbn.aliyuncs.com",
            "cn-chengdu"     => "cbn.aliyuncs.com",
            "cn-hangzhou"    => "cbn.aliyuncs.com",
            "cn-hongkong"    => "cbn.aliyuncs.com",
            "cn-huhehaote"   => "cbn.aliyuncs.com",
            "cn-qingdao"     => "cbn.aliyuncs.com",
            "cn-shanghai"    => "cbn.aliyuncs.com",
            "cn-shenzhen"    => "cbn.aliyuncs.com",
            "cn-zhangjiakou" => "cbn.aliyuncs.com",
            "eu-central-1"   => "cen.us-east-1.aliyuncs.com",
            "eu-west-1"      => "cen.us-east-1.aliyuncs.com",
            "me-east-1"      => "cen.us-east-1.aliyuncs.com",
            "us-east-1"      => "cen.us-east-1.aliyuncs.com",
            "us-west-1"      => "cen.us-east-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}