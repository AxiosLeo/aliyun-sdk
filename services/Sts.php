<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class StsClient
 *
 * @package aliyun\sdk\services
 * @method Sts20180520\V20180520 V20180520() static
 * @method Sts20171001\V20171001 V20171001() static
 * @method Sts20150401\V20150401 V20150401() static
 */
class Sts extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Sts";

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
            "ap-northeast-1" => "sts.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "sts.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "sts.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "sts.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "sts.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "sts.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "sts.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "sts.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "sts.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "sts.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "sts.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "sts.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "sts.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "sts.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "sts.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "sts.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "sts.eu-west-1.aliyuncs.com",
            "me-east-1"      => "sts.me-east-1.aliyuncs.com",
            "us-east-1"      => "sts.us-east-1.aliyuncs.com",
            "us-west-1"      => "sts.us-west-1.aliyuncs.com",
        ],
        "internal" => [
            "ap-northeast-1" => "sts-vpc.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "sts-vpc.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "sts-vpc.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "sts-vpc.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "sts-vpc.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "sts-vpc.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "sts-vpc.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "sts-vpc.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "sts-vpc.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "sts-vpc.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "sts-vpc.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "sts-vpc.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "sts-vpc.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "sts-vpc.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "sts-vpc.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "sts-vpc.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "sts-vpc.eu-west-1.aliyuncs.com",
            "me-east-1"      => "sts-vpc.me-east-1.aliyuncs.com",
            "us-east-1"      => "sts-vpc.us-east-1.aliyuncs.com",
            "us-west-1"      => "sts-vpc.us-west-1.aliyuncs.com",
        ]
    ];
}