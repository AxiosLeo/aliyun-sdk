<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class IotClient
 *
 * @package aliyun\sdk\services
 * @method Iot20181120\V20181120 V20181120() static
 * @method Iot20180120\V20180120 V20180120() static
 * @method Iot20170820\V20170820 V20170820() static
 * @method Iot20170720\V20170720 V20170720() static
 * @method Iot20170620\V20170620 V20170620() static
 * @method Iot20170420\V20170420 V20170420() static
 * @method Iot20160530\V20160530 V20160530() static
 * @method Iot20160104\V20160104 V20160104() static
 */
class Iot extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Iot";

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
            "ap-northeast-1" => "iot.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "iot.ap-northeast-1.aliyuncs.com",
            "ap-southeast-1" => "iot.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "iot.ap-northeast-1.aliyuncs.com",
            "ap-southeast-3" => "iot.ap-northeast-1.aliyuncs.com",
            "ap-southeast-5" => "iot.ap-northeast-1.aliyuncs.com",
            "cn-beijing"     => "iot.aliyuncs.com",
            "cn-chengdu"     => "iot.aliyuncs.com",
            "cn-hangzhou"    => "iot-vpc.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "iot.aliyuncs.com",
            "cn-huhehaote"   => "iot.aliyuncs.com",
            "cn-qingdao"     => "iot.aliyuncs.com",
            "cn-shanghai"    => "iot.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "iot.aliyuncs.com",
            "cn-zhangjiakou" => "iot.aliyuncs.com",
            "eu-central-1"   => "iot.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "iot.ap-northeast-1.aliyuncs.com",
            "me-east-1"      => "iot.ap-northeast-1.aliyuncs.com",
            "us-east-1"      => "iot.us-east-1.aliyuncs.com",
            "us-west-1"      => "iot.us-west-1.aliyuncs.com",
        ],
        "internal" => [
            "ap-northeast-1" => "iot-vpc.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "iot-vpc.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "iot-vpc.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "iot-vpc.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "iot-vpc.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "iot-vpc.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "iot-vpc.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "iot-vpc.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "iot-vpc.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "iot-vpc.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "iot-vpc.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "iot-vpc.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "iot-vpc.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "iot-vpc.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "iot-vpc.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "iot-vpc.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "iot-vpc.eu-west-1.aliyuncs.com",
            "me-east-1"      => "iot-vpc.me-east-1.aliyuncs.com",
            "us-east-1"      => "iot-vpc.us-east-1.aliyuncs.com",
            "us-west-1"      => "iot-vpc.us-west-1.aliyuncs.com",
        ]
    ];
}