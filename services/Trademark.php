<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class TrademarkClient
 *
 * @package aliyun\sdk\services
 * @method Trademark20180724\V20180724 V20180724() static
 */
class Trademark extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Trademark";

    protected $service_code = "trademark";

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
            "ap-northeast-1" => "trademark.aliyuncs.com",
            "ap-south-1"     => "trademark.aliyuncs.com",
            "ap-southeast-1" => "trademark.aliyuncs.com",
            "ap-southeast-2" => "trademark.aliyuncs.com",
            "ap-southeast-3" => "trademark.aliyuncs.com",
            "ap-southeast-5" => "trademark.aliyuncs.com",
            "cn-beijing"     => "trademark.aliyuncs.com",
            "cn-chengdu"     => "trademark.aliyuncs.com",
            "cn-hangzhou"    => "trademark.aliyuncs.com",
            "cn-hongkong"    => "trademark.aliyuncs.com",
            "cn-huhehaote"   => "trademark.aliyuncs.com",
            "cn-qingdao"     => "trademark.aliyuncs.com",
            "cn-shanghai"    => "trademark.aliyuncs.com",
            "cn-shenzhen"    => "trademark.aliyuncs.com",
            "cn-zhangjiakou" => "trademark.aliyuncs.com",
            "eu-central-1"   => "trademark.aliyuncs.com",
            "eu-west-1"      => "trademark.aliyuncs.com",
            "me-east-1"      => "trademark.aliyuncs.com",
            "us-east-1"      => "trademark.aliyuncs.com",
            "us-west-1"      => "trademark.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}