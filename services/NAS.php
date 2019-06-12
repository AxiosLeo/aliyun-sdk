<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class NASClient
 *
 * @package aliyun\sdk\services
 * @method NAS20170626\V20170626 V20170626() static
 * @method NAS20160229\V20160229 V20160229() static
 */
class NAS extends ProductAbstract
{
    use ProductTrait;

    protected $product = "NAS";

    protected $service_code = "nas";

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
            "ap-northeast-1" => "nas.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "nas.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "nas.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "nas.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "nas.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "nas.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "nas.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "nas.aliyuncs.com",
            "cn-hangzhou"    => "nas.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "nas.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "nas.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "nas.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "nas.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "nas.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "nas.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "nas.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "nas.eu-west-1.aliyuncs.com",
            "me-east-1"      => "nas.ap-northeast-1.aliyuncs.com",
            "us-east-1"      => "nas.us-east-1.aliyuncs.com",
            "us-west-1"      => "nas.us-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}