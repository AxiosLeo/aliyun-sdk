<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class ElasticsearchClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Elasticsearch20170613\V20170613 V20170613() static
 */
class Elasticsearch extends ProductAbstract
{
    use ProductTrait;

    protected $product = "elasticsearch";

    protected $service_code = "elasticsearch";

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
            "us-west-1",
        ],
        "public"   => [
            "ap-northeast-1" => "elasticsearch.ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "elasticsearch.ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "elasticsearch.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "elasticsearch.ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "elasticsearch.ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "elasticsearch.ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "elasticsearch.cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "elasticsearch.cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "elasticsearch.cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "elasticsearch.cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "elasticsearch.cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "elasticsearch.cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "elasticsearch.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "elasticsearch.cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "elasticsearch.cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "elasticsearch.eu-central-1.aliyuncs.com",
            "us-west-1"      => "elasticsearch.us-west-1.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}