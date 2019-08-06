<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CFClient
 *
 * @package aliyun\sdk\services
 * @method CF20170204\V20170204 V20170204() static
 * @method CF20151208\V20151208 V20151208() static
 * @method CF20151127\V20151127 V20151127() static
 */
class CF extends ProductAbstract
{
    use ProductTrait;

    protected $product = "CF";

    protected $service_code = "cf";

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
            "ap-northeast-1" => "cf.aliyuncs.com",
            "ap-south-1"     => "cf.aliyuncs.com",
            "ap-southeast-1" => "cf.aliyuncs.com",
            "ap-southeast-2" => "cf.aliyuncs.com",
            "ap-southeast-3" => "cf.aliyuncs.com",
            "ap-southeast-5" => "cf.aliyuncs.com",
            "cn-beijing"     => "cf.aliyuncs.com",
            "cn-chengdu"     => "cf.aliyuncs.com",
            "cn-hangzhou"    => "cf.aliyuncs.com",
            "cn-hongkong"    => "cf.aliyuncs.com",
            "cn-huhehaote"   => "cf.aliyuncs.com",
            "cn-qingdao"     => "cf.aliyuncs.com",
            "cn-shanghai"    => "cf.aliyuncs.com",
            "cn-shenzhen"    => "cf.aliyuncs.com",
            "cn-zhangjiakou" => "cf.aliyuncs.com",
            "eu-central-1"   => "cf.aliyuncs.com",
            "eu-west-1"      => "cf.aliyuncs.com",
            "me-east-1"      => "cf.aliyuncs.com",
            "us-east-1"      => "cf.aliyuncs.com",
            "us-west-1"      => "cf.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}