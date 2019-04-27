<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class YundunClient
 *
 * @package aliyun\sdk\services
 * @method Yundun20150416\V20150416 V20150416() static
 */
class Yundun extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Yundun";

    protected $service_code = "yundun";

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
            "ap-northeast-1" => "yundun-cn-hangzhou.aliyuncs.com",
            "ap-south-1"     => "yundun-cn-hangzhou.aliyuncs.com",
            "ap-southeast-1" => "yundun-cn-hangzhou.aliyuncs.com",
            "ap-southeast-2" => "yundun-cn-hangzhou.aliyuncs.com",
            "ap-southeast-3" => "yundun-cn-hangzhou.aliyuncs.com",
            "ap-southeast-5" => "yundun-cn-hangzhou.aliyuncs.com",
            "cn-beijing"     => "yundun-cn-hangzhou.aliyuncs.com",
            "cn-chengdu"     => "yundun-cn-hangzhou.aliyuncs.com",
            "cn-hangzhou"    => "yundun-cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "yundun-cn-hangzhou.aliyuncs.com",
            "cn-huhehaote"   => "yundun-cn-hangzhou.aliyuncs.com",
            "cn-qingdao"     => "yundun-cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "yundun-cn-hangzhou.aliyuncs.com",
            "cn-shenzhen"    => "yundun-cn-hangzhou.aliyuncs.com",
            "cn-zhangjiakou" => "yundun-cn-hangzhou.aliyuncs.com",
            "eu-central-1"   => "yundun-cn-hangzhou.aliyuncs.com",
            "eu-west-1"      => "yundun-cn-hangzhou.aliyuncs.com",
            "me-east-1"      => "yundun-cn-hangzhou.aliyuncs.com",
            "us-east-1"      => "yundun-cn-hangzhou.aliyuncs.com",
            "us-west-1"      => "yundun-cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}