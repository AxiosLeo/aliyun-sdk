<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class OcsClient
 *
 * @package aliyun\sdk\services
 * @method Ocs20150301\V20150301 V20150301() static
 */
class Ocs extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Ocs";

    protected $service_code = "ocs";

    protected $credential = "RpcCredential";

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
            "ap-northeast-1" => "pop-ocs.aliyuncs.com",
            "ap-south-1"     => "pop-ocs.aliyuncs.com",
            "ap-southeast-1" => "pop-ocs.aliyuncs.com",
            "ap-southeast-2" => "pop-ocs.aliyuncs.com",
            "ap-southeast-3" => "pop-ocs.aliyuncs.com",
            "ap-southeast-5" => "pop-ocs.aliyuncs.com",
            "cn-beijing"     => "pop-ocs.aliyuncs.com",
            "cn-chengdu"     => "pop-ocs.aliyuncs.com",
            "cn-hangzhou"    => "pop-ocs.aliyuncs.com",
            "cn-hongkong"    => "pop-ocs.aliyuncs.com",
            "cn-huhehaote"   => "pop-ocs.aliyuncs.com",
            "cn-qingdao"     => "pop-ocs.aliyuncs.com",
            "cn-shanghai"    => "pop-ocs.aliyuncs.com",
            "cn-shenzhen"    => "pop-ocs.aliyuncs.com",
            "cn-zhangjiakou" => "pop-ocs.aliyuncs.com",
            "eu-central-1"   => "pop-ocs.aliyuncs.com",
            "eu-west-1"      => "pop-ocs.aliyuncs.com",
            "me-east-1"      => "pop-ocs.aliyuncs.com",
            "us-east-1"      => "pop-ocs.aliyuncs.com",
            "us-west-1"      => "pop-ocs.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}