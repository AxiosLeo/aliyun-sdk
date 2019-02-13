<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 10:05
 */
require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::region('cn-hangzhou');
dump(\aliyun\sdk\core\Product::all('arms'));

$request = \aliyun\sdk\arms\ArmsClient::action('WhereInDimQuery');
$request->setParam('DatasetId', 'DatasetId');
$response = $request->request();

dump($response);
