<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class BatchComputeClient
 *
 * @package aliyun\sdk\services
 * @method BatchCompute20160808\V20160808 V20160808() static
 * @method BatchCompute20151111\V20151111 V20151111() static
 * @method BatchCompute20151001\V20151001 V20151001() static
 * @method BatchCompute20150630\V20150630 V20150630() static
 * @method BatchCompute20130111\V20130111 V20130111() static
 */
class BatchCompute extends ProductAbstract
{
    use ProductTrait;

    protected $product = "BatchCompute";

    protected $service_code = "";

    protected $credential = "RpcCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-beijing",
            "cn-hangzhou",
            "cn-huhehaote",
            "cn-qingdao",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
            "eu-central-1",
            "us-west-1",
        ],
        "public"   => [
            "cn-beijing"     => "batchcompute.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "batchcompute.cn-hangzhou.aliyuncs.com",
            "cn-huhehaote"   => "batchcompute.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "batchcompute.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "batchcompute.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "batchcompute.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "batchcompute.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "batchcompute.eu-central-1.aliyuncs.com",
            "us-west-1"      => "batchcompute.us-west-1.aliyuncs.com",
        ],
        "internal" => [
            "ap-northeast-1" => "batchcompute-vpc.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "batchcompute-vpc.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "batchcompute-vpc.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "batchcompute-vpc.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "batchcompute-vpc.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "batchcompute-vpc.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "batchcompute-vpc.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "batchcompute-vpc.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "batchcompute-vpc.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "batchcompute-vpc.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "batchcompute-vpc.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "batchcompute-vpc.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "batchcompute-vpc.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "batchcompute-vpc.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "batchcompute-vpc.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "batchcompute-vpc.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "batchcompute-vpc.eu-west-1.aliyuncs.com",
            "me-east-1"      => "batchcompute-vpc.me-east-1.aliyuncs.com",
            "us-east-1"      => "batchcompute-vpc.us-east-1.aliyuncs.com",
            "us-west-1"      => "batchcompute-vpc.us-west-1.aliyuncs.com",
        ]
    ];
}
