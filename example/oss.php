<?php

namespace aliyun\sdk\example;

use aliyun\sdk\Aliyun;

require_once __DIR__ . '/base.php';

Aliyun::region('cn-shenzhen');

$response = \aliyun\sdk\clients\Oss::factory()->listBuckets();
dump($response);
