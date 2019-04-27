<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CdsClient
 *
 * @package aliyun\sdk\services
 * @method Cds20180417\V20180417 V20180417() static
 * @method Cds20170925\V20170925 V20170925() static
 */
class Cds extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Cds";

    protected $service_code = "cds";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-beijing",
        ],
        "public"   => [
            "cn-beijing"     => "cds.cn-beijing.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}