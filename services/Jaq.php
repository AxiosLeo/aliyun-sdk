<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class JaqClient
 *
 * @package aliyun\sdk\services
 * @method Jaq20180129\V20180129 V20180129() static
 * @method Jaq20171129\V20171129 V20171129() static
 * @method Jaq20170825\V20170825 V20170825() static
 * @method Jaq20170413\V20170413 V20170413() static
 * @method Jaq20161123\V20161123 V20161123() static
 * @method Jaq20160801\V20160801 V20160801() static
 * @method Jaq20160513\V20160513 V20160513() static
 * @method Jaq20160412\V20160412 V20160412() static
 */
class Jaq extends ProductAbstract
{
    use ProductTrait;

    protected $product = "jaq";

    protected $service_code = "jaq";

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
            "ap-northeast-1" => "jaq.aliyuncs.com",
            "ap-south-1"     => "jaq.aliyuncs.com",
            "ap-southeast-1" => "jaq.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "jaq.aliyuncs.com",
            "ap-southeast-3" => "jaq.aliyuncs.com",
            "ap-southeast-5" => "jaq.aliyuncs.com",
            "cn-beijing"     => "jaq.aliyuncs.com",
            "cn-chengdu"     => "jaq.aliyuncs.com",
            "cn-hangzhou"    => "jaq.aliyuncs.com",
            "cn-hongkong"    => "jaq.aliyuncs.com",
            "cn-huhehaote"   => "jaq.aliyuncs.com",
            "cn-qingdao"     => "jaq.aliyuncs.com",
            "cn-shanghai"    => "jaq.aliyuncs.com",
            "cn-shenzhen"    => "jaq.aliyuncs.com",
            "cn-zhangjiakou" => "jaq.aliyuncs.com",
            "eu-central-1"   => "jaq.aliyuncs.com",
            "eu-west-1"      => "jaq.aliyuncs.com",
            "me-east-1"      => "jaq.aliyuncs.com",
            "us-east-1"      => "jaq.aliyuncs.com",
            "us-west-1"      => "jaq.us-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}