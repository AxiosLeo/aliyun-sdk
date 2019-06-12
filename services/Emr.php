<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class EmrClient
 *
 * @package aliyun\sdk\services
 * @method Emr20160408\V20160408 V20160408() static
 * @method Emr20160110\V20160110 V20160110() static
 * @method Emr20150910\V20150910 V20150910() static
 * @method Emr20150810\V20150810 V20150810() static
 */
class Emr extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Emr";

    protected $service_code = "emr";

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
            "ap-northeast-1" => "emr.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "emr.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "emr.aliyuncs.com",
            "ap-southeast-2" => "emr.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "emr.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "emr.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "emr.aliyuncs.com",
            "cn-chengdu"     => "emr.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "emr.aliyuncs.com",
            "cn-hongkong"    => "emr.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "emr.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "emr.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "emr.aliyuncs.com",
            "cn-shenzhen"    => "emr.aliyuncs.com",
            "cn-zhangjiakou" => "emr.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "emr.aliyuncs.com",
            "eu-west-1"      => "emr.eu-west-1.aliyuncs.com",
            "me-east-1"      => "emr.aliyuncs.com",
            "us-east-1"      => "emr.us-east-1.aliyuncs.com",
            "us-west-1"      => "emr.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}