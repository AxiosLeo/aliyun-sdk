<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class OmsClient
 *
 * @package aliyun\sdk\services
 * @method Oms20170821\V20170821 V20170821() static
 * @method Oms20160615\V20160615 V20160615() static
 * @method Oms20151225\V20151225 V20151225() static
 * @method Oms20150212\V20150212 V20150212() static
 */
class Oms extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Oms";

    protected $service_code = "oms";

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
            "ap-northeast-1" => "oms.ap-southeast-1.aliyuncs.com",
            "ap-south-1"     => "oms.ap-southeast-1.aliyuncs.com",
            "ap-southeast-1" => "oms.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "oms.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "oms.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5" => "oms.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "oms.aliyuncs.com",
            "cn-chengdu"     => "oms.aliyuncs.com",
            "cn-hangzhou"    => "oms.aliyuncs.com",
            "cn-hongkong"    => "oms.aliyuncs.com",
            "cn-huhehaote"   => "oms.aliyuncs.com",
            "cn-qingdao"     => "oms.aliyuncs.com",
            "cn-shanghai"    => "oms.aliyuncs.com",
            "cn-shenzhen"    => "oms.aliyuncs.com",
            "cn-zhangjiakou" => "oms.aliyuncs.com",
            "eu-central-1"   => "oms.ap-southeast-1.aliyuncs.com",
            "eu-west-1"      => "oms.ap-southeast-1.aliyuncs.com",
            "me-east-1"      => "oms.ap-southeast-1.aliyuncs.com",
            "us-east-1"      => "oms.ap-southeast-1.aliyuncs.com",
            "us-west-1"      => "oms.ap-southeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}