<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/4/11 10:08
 */

namespace aliyun\sdk\example;

use aliyun\sdk\services\Ecs\request\DescribeInstances;

require_once __DIR__ . '/base.php';

$request = new DescribeInstances();

$result = $request->setRegionId('cn-shenzhen')->request()->getContent();
dump($result);

$request = new DescribeInstances();
$request->setParam('RegionId', 'cn-shenzhen');
$response = $request->request();
dump($response->getContent());
