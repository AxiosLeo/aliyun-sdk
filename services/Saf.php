<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class SafClient
 *
 * @package aliyun\sdk\services
 * @method Saf20190128\V20190128 V20190128() static
 * @method Saf20190120\V20190120 V20190120() static
 * @method Saf20180919\V20180919 V20180919() static
 * @method Saf20171001\V20171001 V20171001() static
 * @method Saf20170331\V20170331 V20170331() static
 */
class Saf extends ProductAbstract
{
    use ProductTrait;

    protected $product = "saf";

    protected $service_code = "saf";

    protected $credential = "RpcCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-beijing",
            "cn-hangzhou",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
        ],
        "public"   => [
            "cn-beijing"     => "saf.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "saf.cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "saf.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "saf.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "saf.cn-zhangjiakou.aliyuncs.com",
        ],
        "internal" => [
            "ap-northeast-1" => "saf-vpc.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "saf-vpc.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "saf-vpc.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "saf-vpc.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "saf-vpc.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "saf-vpc.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "saf-vpc.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "saf-vpc.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "saf-vpc.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "saf-vpc.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "saf-vpc.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "saf-vpc.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "saf-vpc.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "saf-vpc.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "saf-vpc.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "saf-vpc.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "saf-vpc.eu-west-1.aliyuncs.com",
            "me-east-1"      => "saf-vpc.me-east-1.aliyuncs.com",
            "us-east-1"      => "saf-vpc.us-east-1.aliyuncs.com",
            "us-west-1"      => "saf-vpc.us-west-1.aliyuncs.com",
        ]
    ];
}
