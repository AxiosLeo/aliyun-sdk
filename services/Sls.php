<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class SlsClient
 *
 * @package aliyun\sdk\services
 * @method Sls20180613\V20180613 V20180613() static
 * @method Sls20160801\V20160801 V20160801() static
 */
class Sls extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Sls";

    protected $service_code = "";

    protected $credential = "RpcCredential";

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
            "ap-northeast-1" => "sls.aliyuncs.com",
            "ap-south-1"     => "sls.aliyuncs.com",
            "ap-southeast-1" => "sls.aliyuncs.com",
            "ap-southeast-2" => "sls.aliyuncs.com",
            "ap-southeast-3" => "sls.aliyuncs.com",
            "ap-southeast-5" => "sls.aliyuncs.com",
            "cn-beijing"     => "sls.aliyuncs.com",
            "cn-chengdu"     => "sls.aliyuncs.com",
            "cn-hangzhou"    => "sls.aliyuncs.com",
            "cn-hongkong"    => "sls.aliyuncs.com",
            "cn-huhehaote"   => "sls.aliyuncs.com",
            "cn-qingdao"     => "sls.aliyuncs.com",
            "cn-shanghai"    => "sls.aliyuncs.com",
            "cn-shenzhen"    => "sls.aliyuncs.com",
            "cn-zhangjiakou" => "sls.aliyuncs.com",
            "eu-central-1"   => "sls.aliyuncs.com",
            "eu-west-1"      => "sls.aliyuncs.com",
            "me-east-1"      => "sls.aliyuncs.com",
            "us-east-1"      => "sls.aliyuncs.com",
            "us-west-1"      => "sls.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}