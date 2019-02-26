<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 09:54
 */

namespace aliyun\sdk\example;

require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::region('cn-shenzhen');

$response = \aliyun\sdk\clients\Oss::factory()->listBuckets();
dump($response);
