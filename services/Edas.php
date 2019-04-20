<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class EdasClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Edas20180131\V20180131 V20180131() static
 * @method \aliyun\sdk\services\Edas20170801\V20170801 V20170801() static
 * @method \aliyun\sdk\services\Edas20170405\V20170405 V20170405() static
 * @method \aliyun\sdk\services\Edas20160816\V20160816 V20160816() static
 */
class Edas extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Edas";

    protected $service_code = "edas";

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
            "ap-northeast-1" => "edas.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "edas.ap-northeast-1.aliyuncs.com",
            "ap-southeast-1" => "edas.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "edas.ap-northeast-1.aliyuncs.com",
            "ap-southeast-3" => "edas.ap-northeast-1.aliyuncs.com",
            "ap-southeast-5" => "edas.ap-northeast-1.aliyuncs.com",
            "cn-beijing"     => "edas.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "edas.aliyuncs.com",
            "cn-hangzhou"    => "edas.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "edas.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "edas.aliyuncs.com",
            "cn-qingdao"     => "edas.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "edas.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "edas.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "edas.aliyuncs.com",
            "eu-central-1"   => "edas.ap-northeast-1.aliyuncs.com",
            "eu-west-1"      => "edas.eu-west-1.aliyuncs.com",
            "me-east-1"      => "edas.ap-northeast-1.aliyuncs.com",
            "us-east-1"      => "edas.ap-northeast-1.aliyuncs.com",
            "us-west-1"      => "edas.ap-northeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}