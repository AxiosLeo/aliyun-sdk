<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 09:52
 */

namespace aliyun\sdk\example;

use aliyun\sdk\services\CloudAPI\request\CreateApi;

require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::region('cn-hangzhou');

$request = new CreateApi();
$request->setGroupId(1);
$request->setApiName("api_name");
$request->setVisibility(1);
$response = $request->request();
dump($response->getContent());

$request = new CreateApi();
$request->setParam('GroupId', 1);
$request->setParam('ApiName', "api_name");
$request->setParam('Visibility', 1);
$response = $request->request();
dump($response->getContent());
