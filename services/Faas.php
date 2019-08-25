<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class FaasClient
 *
 * @package aliyun\sdk\services
 * @method Faas20170824\V20170824 V20170824() static
 */
class Faas extends ProductAbstract
{
    use ProductTrait;

    protected $product = "faas";

    protected $service_code = "";

    protected $credential = "RpcCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-beijing",
            "cn-hangzhou",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
        ],
        "public"   => [
            "cn-beijing"     => "faas.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "faas.cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "faas.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "faas.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "faas.cn-zhangjiakou.aliyuncs.com",
        ],
        "internal" => [
            "ap-northeast-1" => "faas-vpc.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "faas-vpc.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "faas-vpc.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "faas-vpc.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "faas-vpc.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "faas-vpc.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "faas-vpc.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "faas-vpc.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "faas-vpc.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "faas-vpc.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "faas-vpc.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "faas-vpc.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "faas-vpc.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "faas-vpc.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "faas-vpc.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "faas-vpc.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "faas-vpc.eu-west-1.aliyuncs.com",
            "me-east-1"      => "faas-vpc.me-east-1.aliyuncs.com",
            "us-east-1"      => "faas-vpc.us-east-1.aliyuncs.com",
            "us-west-1"      => "faas-vpc.us-west-1.aliyuncs.com",
        ]
    ];
}
