<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class PetaDataClient
 *
 * @package aliyun\sdk\services
 * @method PetaData20160101\V20160101 V20160101() static
 */
class PetaData extends ProductAbstract
{
    use ProductTrait;

    protected $product = "PetaData";

    protected $service_code = "petadata";

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
            "ap-northeast-1" => "petadata.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "petadata.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "petadata.aliyuncs.com",
            "ap-southeast-2" => "petadata.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "petadata.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "petadata.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "petadata.aliyuncs.com",
            "cn-chengdu"     => "petadata.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "petadata.aliyuncs.com",
            "cn-hongkong"    => "petadata.aliyuncs.com",
            "cn-huhehaote"   => "petadata.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "petadata.aliyuncs.com",
            "cn-shanghai"    => "petadata.aliyuncs.com",
            "cn-shenzhen"    => "petadata.aliyuncs.com",
            "cn-zhangjiakou" => "petadata.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "petadata.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "petadata.eu-west-1.aliyuncs.com",
            "me-east-1"      => "petadata.aliyuncs.com",
            "us-east-1"      => "petadata.aliyuncs.com",
            "us-west-1"      => "petadata.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}