<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class EssClient
 *
 * @package aliyun\sdk\services
 * @method Ess20160722\V20160722 V20160722() static
 * @method Ess20140828\V20140828 V20140828() static
 */
class Ess extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Ess";

    protected $service_code = "ess";

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
            "ap-northeast-1" => "ess.aliyuncs.com",
            "ap-south-1"     => "ess.aliyuncs.com",
            "ap-southeast-1" => "ess.aliyuncs.com",
            "ap-southeast-2" => "ess.aliyuncs.com",
            "ap-southeast-3" => "ess.aliyuncs.com",
            "ap-southeast-5" => "ess.aliyuncs.com",
            "cn-beijing"     => "ess.aliyuncs.com",
            "cn-chengdu"     => "ess.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "ess.aliyuncs.com",
            "cn-hongkong"    => "ess.aliyuncs.com",
            "cn-huhehaote"   => "ess.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "ess.aliyuncs.com",
            "cn-shanghai"    => "ess.aliyuncs.com",
            "cn-shenzhen"    => "ess.aliyuncs.com",
            "cn-zhangjiakou" => "ess.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "ess.aliyuncs.com",
            "eu-west-1"      => "ess.aliyuncs.com",
            "me-east-1"      => "ess.aliyuncs.com",
            "us-east-1"      => "ess.aliyuncs.com",
            "us-west-1"      => "ess.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
