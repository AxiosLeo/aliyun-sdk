<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class LinkFaceClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\LinkFace20180720\V20180720 V20180720() static
 * @method \aliyun\sdk\services\LinkFace20180608\V20180608 V20180608() static
 */
class LinkFace extends ProductAbstract
{
    use ProductTrait;

    protected $product = "LinkFace";

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
            "ap-northeast-1" => "iotx-face.aliyuncs.com",
            "ap-south-1"     => "iotx-face.aliyuncs.com",
            "ap-southeast-1" => "iotx-face.aliyuncs.com",
            "ap-southeast-2" => "iotx-face.aliyuncs.com",
            "ap-southeast-3" => "iotx-face.aliyuncs.com",
            "ap-southeast-5" => "iotx-face.aliyuncs.com",
            "cn-beijing"     => "iotx-face.aliyuncs.com",
            "cn-chengdu"     => "iotx-face.aliyuncs.com",
            "cn-hangzhou"    => "iotx-face.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "iotx-face.aliyuncs.com",
            "cn-huhehaote"   => "iotx-face.aliyuncs.com",
            "cn-qingdao"     => "iotx-face.aliyuncs.com",
            "cn-shanghai"    => "iotx-face.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "iotx-face.aliyuncs.com",
            "cn-zhangjiakou" => "iotx-face.aliyuncs.com",
            "eu-central-1"   => "iotx-face.aliyuncs.com",
            "eu-west-1"      => "iotx-face.aliyuncs.com",
            "me-east-1"      => "iotx-face.aliyuncs.com",
            "us-east-1"      => "iotx-face.aliyuncs.com",
            "us-west-1"      => "iotx-face.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}