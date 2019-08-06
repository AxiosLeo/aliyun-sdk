<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class PTSClient
 *
 * @package aliyun\sdk\services
 * @method PTS20181111\V20181111 V20181111() static
 * @method PTS20150801\V20150801 V20150801() static
 */
class PTS extends ProductAbstract
{
    use ProductTrait;

    protected $product = "PTS";

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
            "ap-northeast-1" => "pts.aliyuncs.com",
            "ap-south-1"     => "pts.aliyuncs.com",
            "ap-southeast-1" => "pts.aliyuncs.com",
            "ap-southeast-2" => "pts.aliyuncs.com",
            "ap-southeast-3" => "pts.aliyuncs.com",
            "ap-southeast-5" => "pts.aliyuncs.com",
            "cn-beijing"     => "pts.aliyuncs.com",
            "cn-chengdu"     => "pts.aliyuncs.com",
            "cn-hangzhou"    => "pts.aliyuncs.com",
            "cn-hongkong"    => "pts.aliyuncs.com",
            "cn-huhehaote"   => "pts.aliyuncs.com",
            "cn-qingdao"     => "pts.aliyuncs.com",
            "cn-shanghai"    => "pts.aliyuncs.com",
            "cn-shenzhen"    => "pts.aliyuncs.com",
            "cn-zhangjiakou" => "pts.aliyuncs.com",
            "eu-central-1"   => "pts.aliyuncs.com",
            "eu-west-1"      => "pts.aliyuncs.com",
            "me-east-1"      => "pts.aliyuncs.com",
            "us-east-1"      => "pts.aliyuncs.com",
            "us-west-1"      => "pts.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}