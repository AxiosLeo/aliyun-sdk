<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class SasClient
 *
 * @package aliyun\sdk\services
 * @method Sas20181203\V20181203 V20181203() static
 * @method Sas20170713\V20170713 V20170713() static
 * @method Sas20161219\V20161219 V20161219() static
 * @method Sas20160316\V20160316 V20160316() static
 */
class Sas extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Sas";

    protected $service_code = "sas";

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
            "ap-northeast-1" => "tds.aliyuncs.com",
            "ap-south-1"     => "tds.aliyuncs.com",
            "ap-southeast-1" => "tds.aliyuncs.com",
            "ap-southeast-2" => "tds.aliyuncs.com",
            "ap-southeast-3" => "tds.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "tds.aliyuncs.com",
            "cn-beijing"     => "tds.aliyuncs.com",
            "cn-chengdu"     => "tds.aliyuncs.com",
            "cn-hangzhou"    => "tds.aliyuncs.com",
            "cn-hongkong"    => "tds.aliyuncs.com",
            "cn-huhehaote"   => "tds.aliyuncs.com",
            "cn-qingdao"     => "tds.aliyuncs.com",
            "cn-shanghai"    => "tds.aliyuncs.com",
            "cn-shenzhen"    => "tds.aliyuncs.com",
            "cn-zhangjiakou" => "tds.aliyuncs.com",
            "eu-central-1"   => "tds.aliyuncs.com",
            "eu-west-1"      => "tds.aliyuncs.com",
            "me-east-1"      => "tds.aliyuncs.com",
            "us-east-1"      => "tds.aliyuncs.com",
            "us-west-1"      => "tds.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}