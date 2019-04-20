<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class BatchComputeClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\BatchCompute20161111\V20161111 V20161111() static
 * @method \aliyun\sdk\services\BatchCompute20151111\V20151111 V20151111() static
 * @method \aliyun\sdk\services\BatchCompute20151001\V20151001 V20151001() static
 * @method \aliyun\sdk\services\BatchCompute20150630\V20150630 V20150630() static
 * @method \aliyun\sdk\services\BatchCompute20130111\V20130111 V20130111() static
 */
class BatchCompute extends ProductAbstract
{
    use ProductTrait;

    protected $product = "BatchCompute";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-northeast-1",
            "ap-southeast-1",
            "ap-southeast-3",
            "ap-southeast-5",
            "cn-beijing",
            "cn-hangzhou",
            "cn-hongkong",
            "cn-huhehaote",
            "cn-qingdao",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
            "eu-central-1",
            "us-east-1",
            "us-west-1",
        ],
        "public"   => [
            "ap-northeast-1" => "batchcompute-vpc.ap-northeast-1.aliyuncs.com",
            "ap-southeast-1" => "batchcompute.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "batchcompute-vpc.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "batchcompute.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "batchcompute.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "batchcompute.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "batchcompute.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "batchcompute.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "batchcompute.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "batchcompute.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "batchcompute.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "batchcompute.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "batchcompute.eu-central-1.aliyuncs.com",
            "us-east-1"      => "batchcompute.us-east-1.aliyuncs.com",
            "us-west-1"      => "batchcompute.us-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}