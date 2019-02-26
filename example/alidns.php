<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 09:52
 */

namespace aliyun\sdk\example;

require_once __DIR__ . '/base.php';

use \aliyun\sdk\services\Alidns\request\DescribeDomains;

\aliyun\sdk\Aliyun::region('cn-hangzhou');

$request = new DescribeDomains();
$request->setParam('PageNumber', 1);
$request->setParam('PageSize', 15);
$response = $request->request();

dump($response->getContent());
