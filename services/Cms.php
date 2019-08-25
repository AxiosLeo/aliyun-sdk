<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CmsClient
 *
 * @package aliyun\sdk\services
 * @method Cms20190101\V20190101 V20190101() static
 * @method Cms20180308\V20180308 V20180308() static
 * @method Cms20170825\V20170825 V20170825() static
 * @method Cms20170824\V20170824 V20170824() static
 * @method Cms20170620\V20170620 V20170620() static
 * @method Cms20170301\V20170301 V20170301() static
 * @method Cms20160922\V20160922 V20160922() static
 * @method Cms20160318\V20160318 V20160318() static
 * @method Cms20151020\V20151020 V20151020() static
 * @method Cms20150801\V20150801 V20150801() static
 * @method Cms20150729\V20150729 V20150729() static
 * @method Cms20150420\V20150420 V20150420() static
 */
class Cms extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Cms";

    protected $service_code = "cms";

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
            "ap-northeast-1" => "metrics.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "metrics.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "metrics.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "metrics.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "metrics.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "metrics.aliyuncs.com",
            "cn-beijing"     => "metrics.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "metrics.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "metrics.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "metrics.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "metrics.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "metrics.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "metrics.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "metrics.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "metrics.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "metrics.eu-central-1.aliyuncs.com",
            "eu-west-1"      => "metrics.eu-west-1.aliyuncs.com",
            "me-east-1"      => "metrics.me-east-1.aliyuncs.com",
            "us-east-1"      => "metrics.us-east-1.aliyuncs.com",
            "us-west-1"      => "metrics.us-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
