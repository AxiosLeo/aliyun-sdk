<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 09:53
 */

namespace aliyun\sdk\example;

use aliyun\sdk\services\Cdn\request\DescribeUserDomains;

require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::region('cn-hangzhou');

$request = new DescribeUserDomains();
$request->setPageNumber(1);
$request->setPageSize(100);
$response = $request->request();

dump($response->getContent());
