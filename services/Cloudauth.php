<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CloudauthClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Cloudauth20180916\V20180916 V20180916() static
 * @method \aliyun\sdk\services\Cloudauth20180807\V20180807 V20180807() static
 * @method \aliyun\sdk\services\Cloudauth20180703\V20180703 V20180703() static
 * @method \aliyun\sdk\services\Cloudauth20180504\V20180504 V20180504() static
 * @method \aliyun\sdk\services\Cloudauth20171117\V20171117 V20171117() static
 * @method \aliyun\sdk\services\Cloudauth20171010\V20171010 V20171010() static
 * @method \aliyun\sdk\services\Cloudauth20170912\V20170912 V20170912() static
 */
class Cloudauth extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Cloudauth";

    protected $service_code = "cloudauth";

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
            "ap-northeast-1" => "cloudauth.aliyuncs.com",
            "ap-south-1"     => "cloudauth.aliyuncs.com",
            "ap-southeast-1" => "cloudauth.aliyuncs.com",
            "ap-southeast-2" => "cloudauth.aliyuncs.com",
            "ap-southeast-3" => "cloudauth.aliyuncs.com",
            "ap-southeast-5" => "cloudauth.aliyuncs.com",
            "cn-beijing"     => "cloudauth.aliyuncs.com",
            "cn-chengdu"     => "cloudauth.aliyuncs.com",
            "cn-hangzhou"    => "cloudauth.aliyuncs.com",
            "cn-hongkong"    => "cloudauth.aliyuncs.com",
            "cn-huhehaote"   => "cloudauth.aliyuncs.com",
            "cn-qingdao"     => "cloudauth.aliyuncs.com",
            "cn-shanghai"    => "cloudauth.aliyuncs.com",
            "cn-shenzhen"    => "cloudauth.aliyuncs.com",
            "cn-zhangjiakou" => "cloudauth.aliyuncs.com",
            "eu-central-1"   => "cloudauth.aliyuncs.com",
            "eu-west-1"      => "cloudauth.aliyuncs.com",
            "me-east-1"      => "cloudauth.aliyuncs.com",
            "us-east-1"      => "cloudauth.aliyuncs.com",
            "us-west-1"      => "cloudauth.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}