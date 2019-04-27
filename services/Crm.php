<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CrmClient
 *
 * @package aliyun\sdk\services
 * @method Crm20150408\V20150408 V20150408() static
 */
class Crm extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Crm";

    protected $service_code = "crm";

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
            "ap-northeast-1" => "crm-cn-hangzhou.aliyuncs.com",
            "ap-south-1"     => "crm-cn-hangzhou.aliyuncs.com",
            "ap-southeast-1" => "crm-cn-hangzhou.aliyuncs.com",
            "ap-southeast-2" => "crm-cn-hangzhou.aliyuncs.com",
            "ap-southeast-3" => "crm-cn-hangzhou.aliyuncs.com",
            "ap-southeast-5" => "crm-cn-hangzhou.aliyuncs.com",
            "cn-beijing"     => "crm-cn-hangzhou.aliyuncs.com",
            "cn-chengdu"     => "crm-cn-hangzhou.aliyuncs.com",
            "cn-hangzhou"    => "crm-cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "crm-cn-hangzhou.aliyuncs.com",
            "cn-huhehaote"   => "crm-cn-hangzhou.aliyuncs.com",
            "cn-qingdao"     => "crm-cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "crm-cn-hangzhou.aliyuncs.com",
            "cn-shenzhen"    => "crm-cn-hangzhou.aliyuncs.com",
            "cn-zhangjiakou" => "crm-cn-hangzhou.aliyuncs.com",
            "eu-central-1"   => "crm-cn-hangzhou.aliyuncs.com",
            "eu-west-1"      => "crm-cn-hangzhou.aliyuncs.com",
            "me-east-1"      => "crm-cn-hangzhou.aliyuncs.com",
            "us-east-1"      => "crm-cn-hangzhou.aliyuncs.com",
            "us-west-1"      => "crm-cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}