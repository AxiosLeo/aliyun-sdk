<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CloudmarketingClient
 *
 * @package aliyun\sdk\services
 * @method Cloudmarketing20180910\V20180910 V20180910() static
 */
class Cloudmarketing extends ProductAbstract
{
    use ProductTrait;

    protected $product = "cloudmarketing";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-hangzhou",
            "cn-shanghai",
            "cn-shenzhen",
        ],
        "public"   => [
            "cn-hangzhou"    => "cloudmarketing.cn-hangzhou.aliyuncs.com",
            "cn-shanghai"    => "cloudmarketing.cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "cloudmarketing.cn-shenzhen.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}