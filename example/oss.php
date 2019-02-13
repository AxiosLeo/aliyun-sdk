<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 09:54
 */
require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::region('cn-shenzhen');

$response = \aliyun\sdk\oss\Oss::factory()->listBuckets();
dump($response);
