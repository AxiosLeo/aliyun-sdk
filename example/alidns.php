<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 09:52
 */

namespace aliyun\sdk\example;

require_once __DIR__ . '/base.php';

use aliyun\sdk\Aliyun;
use aliyun\sdk\services\Alidns;

Aliyun::region('cn-hangzhou');

$response = Alidns::V20150109()->DescribeDomains()
    ->setPageNumber(1)
    ->setPageSize(15)
    ->request();

dump($response->getContent());
