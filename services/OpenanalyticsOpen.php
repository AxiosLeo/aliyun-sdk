<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class OpenanalyticsOpenClient
 *
 * @package aliyun\sdk\services
 * @method OpenanalyticsOpen20180619\V20180619 V20180619() static
 */
class OpenanalyticsOpen extends ProductAbstract
{
    use ProductTrait;

    protected $product = "openanalytics-open";

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
            "ap-northeast-1" => "openanalytics.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "openanalytics.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "openanalytics.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "openanalytics.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "openanalytics.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "openanalytics.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "openanalytics.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "openanalytics.aliyuncs.com",
            "cn-hangzhou"    => "openanalytics.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "openanalytics.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "openanalytics.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "openanalytics.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "openanalytics.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "openanalytics.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "openanalytics.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "openanalytics.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "openanalytics.eu-west-1.aliyuncs.com",
            "me-east-1"      => "openanalytics.me-east-1.aliyuncs.com",
            "us-east-1"      => "openanalytics.us-east-1.aliyuncs.com",
            "us-west-1"      => "openanalytics.us-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}