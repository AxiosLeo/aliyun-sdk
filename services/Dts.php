<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class DtsClient
 *
 * @package aliyun\sdk\services
 * @method Dts20180801\V20180801 V20180801() static
 * @method Dts20170601\V20170601 V20170601() static
 * @method Dts20160801\V20160801 V20160801() static
 * @method Dts20151124\V20151124 V20151124() static
 * @method Dts20150629\V20150629 V20150629() static
 */
class Dts extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Dts";

    protected $service_code = "dts";

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
            "ap-northeast-1" => "dts.aliyuncs.com",
            "ap-south-1"     => "dts.aliyuncs.com",
            "ap-southeast-1" => "dts.aliyuncs.com",
            "ap-southeast-2" => "dts.aliyuncs.com",
            "ap-southeast-3" => "dts.aliyuncs.com",
            "ap-southeast-5" => "dts.aliyuncs.com",
            "cn-beijing"     => "dts.aliyuncs.com",
            "cn-chengdu"     => "dts.aliyuncs.com",
            "cn-hangzhou"    => "dts.aliyuncs.com",
            "cn-hongkong"    => "dts.aliyuncs.com",
            "cn-huhehaote"   => "dts.aliyuncs.com",
            "cn-qingdao"     => "dts.aliyuncs.com",
            "cn-shanghai"    => "dts.aliyuncs.com",
            "cn-shenzhen"    => "dts.aliyuncs.com",
            "cn-zhangjiakou" => "dts.aliyuncs.com",
            "eu-central-1"   => "dts.aliyuncs.com",
            "eu-west-1"      => "dts.aliyuncs.com",
            "me-east-1"      => "dts.aliyuncs.com",
            "us-east-1"      => "dts.aliyuncs.com",
            "us-west-1"      => "dts.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}