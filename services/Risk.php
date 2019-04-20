<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class RiskClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Risk20160713\V20160713 V20160713() static
 * @method \aliyun\sdk\services\Risk20150804\V20150804 V20150804() static
 * @method \aliyun\sdk\services\Risk20150323\V20150323 V20150323() static
 */
class Risk extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Risk";

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
            "ap-northeast-1" => "riskcontrol.ap-southeast-1.aliyuncs.com",
            "ap-south-1"     => "riskcontrol.ap-southeast-1.aliyuncs.com",
            "ap-southeast-1" => "riskcontrol.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "riskcontrol.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "riskcontrol.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5" => "riskcontrol.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "risk-cn-hangzhou.aliyuncs.com",
            "cn-chengdu"     => "risk-cn-hangzhou.aliyuncs.com",
            "cn-hangzhou"    => "risk-cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "risk-cn-hangzhou.aliyuncs.com",
            "cn-huhehaote"   => "risk-cn-hangzhou.aliyuncs.com",
            "cn-qingdao"     => "risk-cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "risk-cn-hangzhou.aliyuncs.com",
            "cn-shenzhen"    => "risk-cn-hangzhou.aliyuncs.com",
            "cn-zhangjiakou" => "risk-cn-hangzhou.aliyuncs.com",
            "eu-central-1"   => "riskcontrol.ap-southeast-1.aliyuncs.com",
            "eu-west-1"      => "riskcontrol.ap-southeast-1.aliyuncs.com",
            "me-east-1"      => "riskcontrol.ap-southeast-1.aliyuncs.com",
            "us-east-1"      => "riskcontrol.ap-southeast-1.aliyuncs.com",
            "us-west-1"      => "riskcontrol.ap-southeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}