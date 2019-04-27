<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class ARMSClient
 *
 * @package aliyun\sdk\services
 * @method ARMS20190219\V20190219 V20190219() static
 * @method ARMS20181219\V20181219 V20181219() static
 * @method ARMS20181015\V20181015 V20181015() static
 * @method ARMS20180620\V20180620 V20180620() static
 * @method ARMS20170725\V20170725 V20170725() static
 * @method ARMS20161125\V20161125 V20161125() static
 * @method ARMS20161031\V20161031 V20161031() static
 * @method ARMS20160804\V20160804 V20160804() static
 */
class ARMS extends ProductAbstract
{
    use ProductTrait;

    protected $product = "ARMS";

    protected $service_code = "arms";

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
            "ap-northeast-1" => "arms.ap-southeast-1.aliyuncs.com",
            "ap-south-1"     => "arms.ap-southeast-1.aliyuncs.com",
            "ap-southeast-1" => "arms.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "arms.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "arms.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5" => "arms.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "arms.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "arms.aliyuncs.com",
            "cn-hangzhou"    => "arms.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "arms.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "arms.aliyuncs.com",
            "cn-qingdao"     => "arms.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "arms.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "arms.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "arms.aliyuncs.com",
            "eu-central-1"   => "arms.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "arms.ap-southeast-1.aliyuncs.com",
            "me-east-1"      => "arms.ap-southeast-1.aliyuncs.com",
            "us-east-1"      => "arms.ap-southeast-1.aliyuncs.com",
            "us-west-1"      => "arms.ap-southeast-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}