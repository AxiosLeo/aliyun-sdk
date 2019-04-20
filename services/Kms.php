<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class KmsClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Kms20160120\V20160120 V20160120() static
 */
class Kms extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Kms";

    protected $service_code = "kms";

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
            "ap-northeast-1" => "kms.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "kms.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "kms.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "kms.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "kms.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "kms.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "kms.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "kms.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "kms.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "kms.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "kms.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "kms.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "kms.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "kms.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "kms.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "kms.eu-west-1.aliyuncs.com",
            "me-east-1"      => "kms.me-east-1.aliyuncs.com",
            "us-east-1"      => "kms.us-east-1.aliyuncs.com",
            "us-west-1"      => "kms.us-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}