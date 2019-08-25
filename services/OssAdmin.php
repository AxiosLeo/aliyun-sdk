<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class OssAdminClient
 *
 * @package aliyun\sdk\services
 * @method OssAdmin20180303\V20180303 V20180303() static
 * @method OssAdmin20170115\V20170115 V20170115() static
 * @method OssAdmin20151224\V20151224 V20151224() static
 * @method OssAdmin20150520\V20150520 V20150520() static
 * @method OssAdmin20150302\V20150302 V20150302() static
 * @method OssAdmin20140326\V20140326 V20140326() static
 * @method OssAdmin20130712\V20130712 V20130712() static
 */
class OssAdmin extends ProductAbstract
{
    use ProductTrait;

    protected $product = "OssAdmin";

    protected $service_code = "ossadmin";

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
            "ap-northeast-1" => "oss-admin.aliyuncs.com",
            "ap-south-1"     => "oss-admin.aliyuncs.com",
            "ap-southeast-1" => "oss-admin.aliyuncs.com",
            "ap-southeast-2" => "oss-admin.aliyuncs.com",
            "ap-southeast-3" => "oss-admin.aliyuncs.com",
            "ap-southeast-5" => "oss-admin.aliyuncs.com",
            "cn-beijing"     => "oss-admin.aliyuncs.com",
            "cn-chengdu"     => "oss-admin.aliyuncs.com",
            "cn-hangzhou"    => "oss-admin.aliyuncs.com",
            "cn-hongkong"    => "oss-admin.aliyuncs.com",
            "cn-huhehaote"   => "oss-admin.aliyuncs.com",
            "cn-qingdao"     => "oss-admin.aliyuncs.com",
            "cn-shanghai"    => "oss-admin.aliyuncs.com",
            "cn-shenzhen"    => "oss-admin.aliyuncs.com",
            "cn-zhangjiakou" => "oss-admin.aliyuncs.com",
            "eu-central-1"   => "oss-admin.aliyuncs.com",
            "eu-west-1"      => "oss-admin.aliyuncs.com",
            "me-east-1"      => "oss-admin.aliyuncs.com",
            "us-east-1"      => "oss-admin.aliyuncs.com",
            "us-west-1"      => "oss-admin.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
