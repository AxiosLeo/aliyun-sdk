<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class GreenClient
 *
 * @package aliyun\sdk\services
 * @method Green20180509\V20180509 V20180509() static
 * @method Green20180409\V20180409 V20180409() static
 * @method Green20170825\V20170825 V20170825() static
 * @method Green20170824\V20170824 V20170824() static
 * @method Green20170823\V20170823 V20170823() static
 * @method Green20170112\V20170112 V20170112() static
 * @method Green20161222\V20161222 V20161222() static
 * @method Green20161216\V20161216 V20161216() static
 * @method Green20161206\V20161206 V20161206() static
 * @method Green20161205\V20161205 V20161205() static
 * @method Green20161124\V20161124 V20161124() static
 * @method Green20161115\V20161115 V20161115() static
 * @method Green20161018\V20161018 V20161018() static
 * @method Green20160923\V20160923 V20160923() static
 * @method Green20160914\V20160914 V20160914() static
 * @method Green20160801\V20160801 V20160801() static
 * @method Green20160627\V20160627 V20160627() static
 * @method Green20160621\V20160621 V20160621() static
 * @method Green20160616\V20160616 V20160616() static
 * @method Green20160601\V20160601 V20160601() static
 * @method Green20160525\V20160525 V20160525() static
 * @method Green20160308\V20160308 V20160308() static
 * @method Green20160224\V20160224 V20160224() static
 * @method Green20160118\V20160118 V20160118() static
 * @method Green20151209\V20151209 V20151209() static
 */
class Green extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Green";

    protected $service_code = "green";

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
            "ap-northeast-1" => "green.ap-southeast-1.aliyuncs.com",
            "ap-south-1"     => "green.ap-southeast-1.aliyuncs.com",
            "ap-southeast-1" => "green.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "green.ap-southeast-1.aliyuncs.com",
            "ap-southeast-3" => "green.ap-southeast-1.aliyuncs.com",
            "ap-southeast-5" => "green.ap-southeast-1.aliyuncs.com",
            "cn-beijing"     => "green.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "green.aliyuncs.com",
            "cn-hangzhou"    => "green.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "green.aliyuncs.com",
            "cn-huhehaote"   => "green.aliyuncs.com",
            "cn-qingdao"     => "green.aliyuncs.com",
            "cn-shanghai"    => "green.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "green.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "green.aliyuncs.com",
            "eu-central-1"   => "green.ap-southeast-1.aliyuncs.com",
            "eu-west-1"      => "green.ap-southeast-1.aliyuncs.com",
            "me-east-1"      => "green.ap-southeast-1.aliyuncs.com",
            "us-east-1"      => "green.ap-southeast-1.aliyuncs.com",
            "us-west-1"      => "green.us-west-1.aliyuncs.com",
        ],
        "internal" => [
            "ap-northeast-1" => "green-vpc.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "green-vpc.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "green-vpc.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "green-vpc.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "green-vpc.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "green-vpc.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "green-vpc.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "green-vpc.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "green-vpc.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "green-vpc.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "green-vpc.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "green-vpc.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "green-vpc.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "green-vpc.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "green-vpc.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "green-vpc.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "green-vpc.eu-west-1.aliyuncs.com",
            "me-east-1"      => "green-vpc.me-east-1.aliyuncs.com",
            "us-east-1"      => "green-vpc.us-east-1.aliyuncs.com",
            "us-west-1"      => "green-vpc.us-west-1.aliyuncs.com",
        ]
    ];
}