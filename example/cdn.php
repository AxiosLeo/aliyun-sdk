<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 09:53
 */

require_once __DIR__. "/base.php";

\aliyun\sdk\Aliyun::region('cn-hangzhou');

$request = \aliyun\sdk\cdn\Cdn::DescribeUserDomains();
$request->setPageNumber(1);
$request->setPageSize(100);
$request->request();

dump($response->getContent());