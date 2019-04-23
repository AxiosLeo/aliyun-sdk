<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class ROSClient
 *
 * @package aliyun\sdk\services
 * @method ROS20150901\V20150901 V20150901() static
 */
class ROS extends ProductAbstract
{
    use ProductTrait;

    protected $product = "ROS";

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
            "ap-northeast-1" => "ros.aliyuncs.com",
            "ap-south-1"     => "ros.aliyuncs.com",
            "ap-southeast-1" => "ros.aliyuncs.com",
            "ap-southeast-2" => "ros.aliyuncs.com",
            "ap-southeast-3" => "ros.aliyuncs.com",
            "ap-southeast-5" => "ros.aliyuncs.com",
            "cn-beijing"     => "ros.aliyuncs.com",
            "cn-chengdu"     => "ros.aliyuncs.com",
            "cn-hangzhou"    => "ros.aliyuncs.com",
            "cn-hongkong"    => "ros.aliyuncs.com",
            "cn-huhehaote"   => "ros.aliyuncs.com",
            "cn-qingdao"     => "ros.aliyuncs.com",
            "cn-shanghai"    => "ros.aliyuncs.com",
            "cn-shenzhen"    => "ros.aliyuncs.com",
            "cn-zhangjiakou" => "ros.aliyuncs.com",
            "eu-central-1"   => "ros.aliyuncs.com",
            "eu-west-1"      => "ros.aliyuncs.com",
            "me-east-1"      => "ros.aliyuncs.com",
            "us-east-1"      => "ros.aliyuncs.com",
            "us-west-1"      => "ros.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}