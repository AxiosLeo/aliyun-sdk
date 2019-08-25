<?php

namespace aliyun\sdk\example;

use aliyun\sdk\Aliyun;
use aliyun\sdk\services\Mts;

require_once __DIR__ . '/base.php';

Aliyun::region('cn-hongkong');

$response = Mts::V20180528()->ListMedia()->request();

dump($response->getContent());
