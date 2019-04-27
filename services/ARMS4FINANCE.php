<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class ARMS4FINANCEClient
 *
 * @package aliyun\sdk\services
 * @method ARMS4FINANCE20171130\V20171130 V20171130() static
 */
class ARMS4FINANCE extends ProductAbstract
{
    use ProductTrait;

    protected $product = "ARMS4FINANCE";

    protected $service_code = "arms4finance";

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
            "ap-northeast-1" => "arms4finance.aliyuncs.com",
            "ap-south-1"     => "arms4finance.aliyuncs.com",
            "ap-southeast-1" => "arms4finance.aliyuncs.com",
            "ap-southeast-2" => "arms4finance.aliyuncs.com",
            "ap-southeast-3" => "arms4finance.aliyuncs.com",
            "ap-southeast-5" => "arms4finance.aliyuncs.com",
            "cn-beijing"     => "arms4finance.aliyuncs.com",
            "cn-chengdu"     => "arms4finance.aliyuncs.com",
            "cn-hangzhou"    => "arms4finance.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "arms4finance.aliyuncs.com",
            "cn-huhehaote"   => "arms4finance.aliyuncs.com",
            "cn-qingdao"     => "arms4finance.aliyuncs.com",
            "cn-shanghai"    => "arms4finance.aliyuncs.com",
            "cn-shenzhen"    => "arms4finance.aliyuncs.com",
            "cn-zhangjiakou" => "arms4finance.aliyuncs.com",
            "eu-central-1"   => "arms4finance.aliyuncs.com",
            "eu-west-1"      => "arms4finance.aliyuncs.com",
            "me-east-1"      => "arms4finance.aliyuncs.com",
            "us-east-1"      => "arms4finance.aliyuncs.com",
            "us-west-1"      => "arms4finance.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}