<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class OnsClient
 *
 * @package aliyun\sdk\services
 * @method Ons20190214\V20190214 V20190214() static
 * @method Ons20180628\V20180628 V20180628() static
 * @method Ons20180516\V20180516 V20180516() static
 * @method Ons20170918\V20170918 V20170918() static
 * @method Ons20160503\V20160503 V20160503() static
 * @method Ons20160405\V20160405 V20160405() static
 * @method Ons20151214\V20151214 V20151214() static
 * @method Ons20151020\V20151020 V20151020() static
 */
class Ons extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Ons";

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
            "ap-northeast-1" => "ons.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "ons.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "ons.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "ons.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "ons.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "ons.ap-northeast-1.aliyuncs.com",
            "cn-beijing"     => "ons.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "ons.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "ons.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "ons.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "ons.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "ons.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "ons.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "ons.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "ons.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "ons.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "ons.eu-west-1.aliyuncs.com",
            "me-east-1"      => "ons.me-east-1.aliyuncs.com",
            "us-east-1"      => "ons.us-east-1.aliyuncs.com",
            "us-west-1"      => "ons.us-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}