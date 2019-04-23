<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class ImmClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Imm20170906\V20170906 V20170906() static
 */
class Imm extends ProductAbstract
{
    use ProductTrait;

    protected $product = "imm";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-southeast-1",
            "cn-beijing",
            "cn-hangzhou",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
        ],
        "public"   => [
            "ap-southeast-1" => "imm.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "imm.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "imm.cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "imm.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "imm.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "imm.cn-zhangjiakou.aliyuncs.com",
        ],
        "internal" => [
            "ap-northeast-1" => "imm-vpc.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "imm-vpc.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "imm-vpc.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "imm-vpc.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "imm-vpc.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "imm-vpc.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "imm-vpc.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "imm-vpc.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "imm-vpc.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "imm-vpc.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "imm-vpc.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "imm-vpc.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "imm-vpc.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "imm-vpc.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "imm-vpc.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "imm-vpc.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "imm-vpc.eu-west-1.aliyuncs.com",
            "me-east-1"      => "imm-vpc.me-east-1.aliyuncs.com",
            "us-east-1"      => "imm-vpc.us-east-1.aliyuncs.com",
            "us-west-1"      => "imm-vpc.us-west-1.aliyuncs.com",
        ]
    ];
}