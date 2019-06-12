<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class KmsClient
 *
 * @package aliyun\sdk\services
 * @method Kms20160120\V20160120 V20160120() static
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
            "ap-southeast-1",
            "cn-beijing",
            "cn-chengdu",
            "cn-hangzhou",
            "cn-hongkong",
            "cn-huhehaote",
            "cn-qingdao",
            "cn-shanghai",
        ],
        "public"   => [
            "ap-northeast-1" => "kms.ap-northeast-1.aliyuncs.com",
            "ap-southeast-1" => "kms.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "kms.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "kms.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "kms.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "kms.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "kms.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "kms.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "kms.cn-shanghai.aliyuncs.com",
        ],
        "internal" => [
            "ap-northeast-1" => "kms-vpc.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "kms-vpc.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "kms-vpc.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "kms-vpc.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "kms-vpc.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "kms-vpc.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "kms-vpc.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "kms-vpc.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "kms-vpc.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "kms-vpc.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "kms-vpc.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "kms-vpc.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "kms-vpc.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "kms-vpc.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "kms-vpc.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "kms-vpc.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "kms-vpc.eu-west-1.aliyuncs.com",
            "me-east-1"      => "kms-vpc.me-east-1.aliyuncs.com",
            "us-east-1"      => "kms-vpc.us-east-1.aliyuncs.com",
            "us-west-1"      => "kms-vpc.us-west-1.aliyuncs.com",
        ]
    ];
}