<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 09:52
 */
require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::region('cn-hangzhou');

$request = \aliyun\sdk\alidns\AlidnsClient::action('DescribeDomains');
$request->setParam('PageNumber', 1);
$request->setParam('PageSize', 15);
$response = $request->request();
dump($response->getContent());
