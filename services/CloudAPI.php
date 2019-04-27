<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CloudAPIClient
 *
 * @package aliyun\sdk\services
 * @method CloudAPI20180901\V20180901 V20180901() static
 * @method CloudAPI20180601\V20180601 V20180601() static
 * @method CloudAPI20160714\V20160714 V20160714() static
 * @method CloudAPI20160701\V20160701 V20160701() static
 * @method CloudAPI20160201\V20160201 V20160201() static
 */
class CloudAPI extends ProductAbstract
{
    use ProductTrait;

    protected $product = "CloudAPI";

    protected $service_code = "apigateway";

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
            "ap-northeast-1" => "apigateway.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "apigateway.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "apigateway.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "apigateway.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "apigateway.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "apigateway.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "apigateway.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "apigateway.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "apigateway.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "apigateway.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "apigateway.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "apigateway.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "apigateway.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "apigateway.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "apigateway.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "apigateway.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "apigateway.eu-west-1.aliyuncs.com",
            "me-east-1"      => "apigateway.me-east-1.aliyuncs.com",
            "us-east-1"      => "apigateway.us-east-1.aliyuncs.com",
            "us-west-1"      => "apigateway.us-west-1.aliyuncs.com",
        ],
        "internal" => [
            "ap-northeast-1" => "apigateway-vpc.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "apigateway-vpc.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "apigateway-vpc.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "apigateway-vpc.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "apigateway-vpc.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "apigateway-vpc.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "apigateway-vpc.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "apigateway-vpc.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "apigateway-vpc.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "apigateway-vpc.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "apigateway-vpc.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "apigateway-vpc.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "apigateway-vpc.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "apigateway-vpc.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "apigateway-vpc.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "apigateway-vpc.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "apigateway-vpc.eu-west-1.aliyuncs.com",
            "me-east-1"      => "apigateway-vpc.me-east-1.aliyuncs.com",
            "us-east-1"      => "apigateway-vpc.us-east-1.aliyuncs.com",
            "us-west-1"      => "apigateway-vpc.us-west-1.aliyuncs.com",
        ]
    ];
}