<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 09:54
 */

namespace aliyun\sdk\example;

use aliyun\sdk\Aliyun;

require_once __DIR__ . '/base.php';

Aliyun::region('cn-shenzhen');

$response = \aliyun\sdk\clients\Oss::factory()->listBuckets();
dump($response);
