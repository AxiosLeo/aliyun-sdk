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
$response = \aliyun\sdk\api\API::CreateApi(1, 1, 1)->request();
dump($response->getContent());

$request = \aliyun\sdk\api\ApiClient::action('CreateApi');
$request->setParam('GroupId', 1);
$request->setParam('ApiName', 1);
$request->setParam('Visibility', 1);
$response = $request->request();
dump($response->getContent());
