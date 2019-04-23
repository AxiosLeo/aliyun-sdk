<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class EHPCClient
 *
 * @package aliyun\sdk\services
 * @method EHPC20180412\V20180412 V20180412() static
 * @method EHPC20170714\V20170714 V20170714() static
 */
class EHPC extends ProductAbstract
{
    use ProductTrait;

    protected $product = "EHPC";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-northeast-1",
            "ap-southeast-1",
            "ap-southeast-2",
            "cn-beijing",
            "cn-hangzhou",
            "cn-hongkong",
            "cn-huhehaote",
            "cn-qingdao",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
            "eu-central-1",
            "me-east-1",
        ],
        "public"   => [
            "ap-northeast-1" => "ehpc.ap-northeast-1.aliyuncs.com",
            "ap-southeast-1" => "ehpc.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "ehpc.ap-southeast-2.aliyuncs.com",
            "cn-beijing"     => "ehpc.cn-beijing.aliyuncs.com",
            "cn-hangzhou"    => "ehpc.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "ehpc.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "ehpc.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "ehpc.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "ehpc.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "ehpc.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "ehpc.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "ehpc.eu-central-1.aliyuncs.com",
            "me-east-1"      => "ehpc.me-east-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}