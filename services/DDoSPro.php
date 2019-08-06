<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DDoSProClient
 *
 * @package aliyun\sdk\services
 * @method DDoSPro20180101\V20180101 V20180101() static
 * @method DDoSPro20171220\V20171220 V20171220() static
 * @method DDoSPro20170726\V20170726 V20170726() static
 * @method DDoSPro20170725\V20170725 V20170725() static
 */
class DDoSPro extends ProductAbstract
{
    use ProductTrait;

    protected $product = "DDoSPro";

    protected $service_code = "";

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
            "ap-northeast-1" => "ddospro.aliyuncs.com",
            "ap-south-1"     => "ddospro.aliyuncs.com",
            "ap-southeast-1" => "ddospro.aliyuncs.com",
            "ap-southeast-2" => "ddospro.aliyuncs.com",
            "ap-southeast-3" => "ddospro.aliyuncs.com",
            "ap-southeast-5" => "ddospro.aliyuncs.com",
            "cn-beijing"     => "ddospro.aliyuncs.com",
            "cn-chengdu"     => "ddospro.aliyuncs.com",
            "cn-hangzhou"    => "ddospro.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "ddospro.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "ddospro.aliyuncs.com",
            "cn-qingdao"     => "ddospro.aliyuncs.com",
            "cn-shanghai"    => "ddospro.aliyuncs.com",
            "cn-shenzhen"    => "ddospro.aliyuncs.com",
            "cn-zhangjiakou" => "ddospro.aliyuncs.com",
            "eu-central-1"   => "ddospro.aliyuncs.com",
            "eu-west-1"      => "ddospro.aliyuncs.com",
            "me-east-1"      => "ddospro.aliyuncs.com",
            "us-east-1"      => "ddospro.aliyuncs.com",
            "us-west-1"      => "ddospro.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}