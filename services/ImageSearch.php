<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class ImageSearchClient
 *
 * @package aliyun\sdk\services
 * @method ImageSearch20190325\V20190325 V20190325() static
 * @method ImageSearch20180319\V20180319 V20180319() static
 * @method ImageSearch20180120\V20180120 V20180120() static
 * @method ImageSearch20180115\V20180115 V20180115() static
 * @method ImageSearch20180111\V20180111 V20180111() static
 */
class ImageSearch extends ProductAbstract
{
    use ProductTrait;

    protected $product = "ImageSearch";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-northeast-1",
            "ap-south-1",
            "ap-southeast-1",
            "ap-southeast-2",
            "cn-hongkong",
            "cn-shanghai",
            "eu-central-1",
        ],
        "public"   => [
            "ap-northeast-1" => "imagesearch.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "imagesearch.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "imagesearch.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "imagesearch.ap-southeast-2.aliyuncs.com",
            "cn-hongkong"    => "imagesearch.cn-hongkong.aliyuncs.com",
            "cn-shanghai"    => "imagesearch.cn-shanghai.aliyuncs.com",
            "eu-central-1"   => "imagesearch.eu-central-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}