<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class IvisionClient
 *
 * @package aliyun\sdk\services
 * @method Ivision20190308\V20190308 V20190308() static
 * @method Ivision20180820\V20180820 V20180820() static
 */
class Ivision extends ProductAbstract
{
    use ProductTrait;

    protected $product = "ivision";

    protected $service_code = "ivision";

    protected $credential = "RpcCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-beijing",
            "cn-shanghai",
        ],
        "public"   => [
            "cn-beijing"     => "ivision.cn-beijing.aliyuncs.com",
            "cn-shanghai"    => "ivision.cn-shanghai.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}