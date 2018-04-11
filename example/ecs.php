<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/4/11 10:08
 */

require_once __DIR__. "/base.php";

$result = \aliyun\sdk\ecs\Ecs::DescribeInstances('cn-shenzhen')->request()->getContent();
dump($result);

$request = \aliyun\sdk\ecs\EcsClient::action('DescribeInstances');
$request->setParam("RegionId",'cn-shenzhen');
$result = $request->request()->getContent();
dump($result);