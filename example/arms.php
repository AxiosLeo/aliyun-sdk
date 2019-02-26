<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 10:05
 */

namespace aliyun\sdk\example;

use aliyun\sdk\services\ARMS\request\WhereInDimQuery;

require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::region('cn-hangzhou');
dump(\aliyun\sdk\core\Product::all('arms'));


$request = new WhereInDimQuery();
$request->setParam('DatasetId', 'DatasetId');
$response = $request->request();

dump($response);
