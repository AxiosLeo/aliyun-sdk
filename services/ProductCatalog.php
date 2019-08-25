<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class ProductCatalogClient
 *
 * @package aliyun\sdk\services
 * @method ProductCatalog20180918\V20180918 V20180918() static
 */
class ProductCatalog extends ProductAbstract
{
    use ProductTrait;

    protected $product = "ProductCatalog";

    protected $service_code = "";

    protected $credential = "RpcCredential";

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
            "ap-northeast-1" => "product-catalog.aliyuncs.com",
            "ap-south-1"     => "product-catalog.aliyuncs.com",
            "ap-southeast-1" => "product-catalog.aliyuncs.com",
            "ap-southeast-2" => "product-catalog.aliyuncs.com",
            "ap-southeast-3" => "product-catalog.aliyuncs.com",
            "ap-southeast-5" => "product-catalog.aliyuncs.com",
            "cn-beijing"     => "product-catalog.aliyuncs.com",
            "cn-chengdu"     => "product-catalog.aliyuncs.com",
            "cn-hangzhou"    => "product-catalog.aliyuncs.com",
            "cn-hongkong"    => "product-catalog.aliyuncs.com",
            "cn-huhehaote"   => "product-catalog.aliyuncs.com",
            "cn-qingdao"     => "product-catalog.aliyuncs.com",
            "cn-shanghai"    => "product-catalog.aliyuncs.com",
            "cn-shenzhen"    => "product-catalog.aliyuncs.com",
            "cn-zhangjiakou" => "product-catalog.aliyuncs.com",
            "eu-central-1"   => "product-catalog.aliyuncs.com",
            "eu-west-1"      => "product-catalog.aliyuncs.com",
            "me-east-1"      => "product-catalog.aliyuncs.com",
            "us-east-1"      => "product-catalog.aliyuncs.com",
            "us-west-1"      => "product-catalog.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
