<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 10:05
 */

namespace aliyun\sdk\example;

use aliyun\sdk\services\ARMS;

require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::region('cn-hangzhou');

$response = ARMS::V20170725()->WhereInDimQuery()
    ->setDatasetId('DatasetId')
    ->request();

dump($response->getContent());
