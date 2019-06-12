<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DrdsClient
 *
 * @package aliyun\sdk\services
 * @method Drds20190123\V20190123 V20190123() static
 * @method Drds20171016\V20171016 V20171016() static
 * @method Drds20161213\V20161213 V20161213() static
 * @method Drds20150413\V20150413 V20150413() static
 */
class Drds extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Drds";

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
            "ap-northeast-1" => "drds.aliyuncs.com",
            "ap-south-1"     => "drds.aliyuncs.com",
            "ap-southeast-1" => "drds.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "drds.aliyuncs.com",
            "ap-southeast-3" => "drds.aliyuncs.com",
            "ap-southeast-5" => "drds.aliyuncs.com",
            "cn-beijing"     => "drds.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "drds.aliyuncs.com",
            "cn-hangzhou"    => "drds.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "drds.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "drds.aliyuncs.com",
            "cn-qingdao"     => "drds.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "drds.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "drds.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "drds.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "drds.aliyuncs.com",
            "eu-west-1"      => "drds.aliyuncs.com",
            "me-east-1"      => "drds.aliyuncs.com",
            "us-east-1"      => "drds.aliyuncs.com",
            "us-west-1"      => "drds.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}