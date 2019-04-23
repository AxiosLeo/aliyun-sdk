<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class LubanrulerClient
 *
 * @package aliyun\sdk\services
 * @method Lubanruler20171228\V20171228 V20171228() static
 */
class Lubanruler extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Lubanruler";

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
            "ap-northeast-1" => "ruler.cn-beijing.aliyuncs.com",
            "ap-south-1"     => "ruler.cn-beijing.aliyuncs.com",
            "ap-southeast-1" => "ruler.cn-beijing.aliyuncs.com",
            "ap-southeast-2" => "ruler.cn-beijing.aliyuncs.com",
            "ap-southeast-3" => "ruler.cn-beijing.aliyuncs.com",
            "ap-southeast-5" => "ruler.cn-beijing.aliyuncs.com",
            "cn-beijing"     => "ruler.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "ruler.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "ruler.cn-beijing.aliyuncs.com",
            "cn-hongkong"    => "ruler.cn-beijing.aliyuncs.com",
            "cn-huhehaote"   => "ruler.cn-beijing.aliyuncs.com",
            "cn-qingdao"     => "ruler.cn-beijing.aliyuncs.com",
            "cn-shanghai"    => "ruler.cn-beijing.aliyuncs.com",
            "cn-shenzhen"    => "ruler.cn-beijing.aliyuncs.com",
            "cn-zhangjiakou" => "ruler.cn-beijing.aliyuncs.com",
            "eu-central-1"   => "ruler.cn-beijing.aliyuncs.com",
            "eu-west-1"      => "ruler.cn-beijing.aliyuncs.com",
            "me-east-1"      => "ruler.cn-beijing.aliyuncs.com",
            "us-east-1"      => "ruler.cn-beijing.aliyuncs.com",
            "us-west-1"      => "ruler.cn-beijing.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}