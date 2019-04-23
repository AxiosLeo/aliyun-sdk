<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CrClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Cr20181201\V20181201 V20181201() static
 * @method \aliyun\sdk\services\Cr20160607\V20160607 V20160607() static
 * @method \aliyun\sdk\services\Cr20150506\V20150506 V20150506() static
 */
class Cr extends ProductAbstract
{
    use ProductTrait;

    protected $product = "cr";

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
            "ap-northeast-1" => "cr.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "cr.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "cr.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "cr.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "cr.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "cr.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "cr.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "cr.aliyuncs.com",
            "cn-hangzhou"    => "cr.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "cr.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "cr.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "cr.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "cr.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "cr.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "cr.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "cr.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "cr.eu-west-1.aliyuncs.com",
            "me-east-1"      => "cr.me-east-1.aliyuncs.com",
            "us-east-1"      => "cr.us-east-1.aliyuncs.com",
            "us-west-1"      => "cr.us-west-1.aliyuncs.com",
        ],
        "internal" => [
            "ap-northeast-1" => "cr-vpc.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "cr-vpc.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "cr-vpc.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "cr-vpc.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "cr-vpc.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "cr-vpc.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "cr-vpc.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "cr-vpc.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "cr-vpc.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "cr-vpc.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "cr-vpc.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "cr-vpc.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "cr-vpc.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "cr-vpc.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "cr-vpc.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "cr-vpc.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "cr-vpc.eu-west-1.aliyuncs.com",
            "me-east-1"      => "cr-vpc.me-east-1.aliyuncs.com",
            "us-east-1"      => "cr-vpc.us-east-1.aliyuncs.com",
            "us-west-1"      => "cr-vpc.us-west-1.aliyuncs.com",
        ]
    ];
}