<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class OtsClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Ots20180520\V20180520 V20180520() static
 * @method \aliyun\sdk\services\Ots20171111\V20171111 V20171111() static
 * @method \aliyun\sdk\services\Ots20160620\V20160620 V20160620() static
 * @method \aliyun\sdk\services\Ots20151230\V20151230 V20151230() static
 * @method \aliyun\sdk\services\Ots20151120\V20151120 V20151120() static
 * @method \aliyun\sdk\services\Ots20151103\V20151103 V20151103() static
 * @method \aliyun\sdk\services\Ots20130912\V20130912 V20130912() static
 */
class Ots extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Ots";

    protected $service_code = "ots";

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
            "ap-northeast-1" => "ots.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "ots.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "ots.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "ots.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "ots.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "ots.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "ots.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "ots.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "ots.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "ots.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "ots.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "ots.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "ots.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "ots.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "ots.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "ots.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "ots.eu-west-1.aliyuncs.com",
            "me-east-1"      => "ots.me-east-1.aliyuncs.com",
            "us-east-1"      => "ots.us-east-1.aliyuncs.com",
            "us-west-1"      => "ots.us-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}