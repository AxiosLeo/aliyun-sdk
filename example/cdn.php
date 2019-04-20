<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 09:53
 */

namespace aliyun\sdk\example;

use aliyun\sdk\services\Cdn;

require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::region('cn-hangzhou');

$response = Cdn::V20180510()->DescribeUserDomains()
    ->setPageNumber(1)
    ->setPageSize(100)
    ->request();

dump($response->getContent());
