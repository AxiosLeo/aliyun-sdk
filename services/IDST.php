<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class IDSTClient
 *
 * @package aliyun\sdk\services
 * @method IDST20190124\V20190124 V20190124() static
 * @method IDST20180108\V20180108 V20180108() static
 * @method IDST20170922\V20170922 V20170922() static
 * @method IDST20170920\V20170920 V20170920() static
 * @method IDST20170830\V20170830 V20170830() static
 * @method IDST20170721\V20170721 V20170721() static
 */
class IDST extends ProductAbstract
{
    use ProductTrait;

    protected $product = "IDST";

    protected $service_code = "idst";

    protected $credential = "RpcCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-shanghai",
        ],
        "public"   => [
            "cn-shanghai"    => "idst.cn-shanghai.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
