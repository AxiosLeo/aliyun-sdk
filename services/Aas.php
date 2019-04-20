<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class AasClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Aas20150701\V20150701 V20150701() static
 */
class Aas extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Aas";

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
            "ap-northeast-1" => "aas.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "aas.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "aas.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "aas.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "aas.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "aas.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "aas.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "aas.aliyuncs.com",
            "cn-hangzhou"    => "aas.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "aas.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "aas.aliyuncs.com",
            "cn-qingdao"     => "aas.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "aas-vpc.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "aas.aliyuncs.com",
            "cn-zhangjiakou" => "aas.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "aas.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "aas.eu-west-1.aliyuncs.com",
            "me-east-1"      => "aas.me-east-1.aliyuncs.com",
            "us-east-1"      => "aas.ap-northeast-1.aliyuncs.com",
            "us-west-1"      => "aas.us-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}