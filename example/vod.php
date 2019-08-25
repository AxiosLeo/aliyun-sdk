<?php

namespace aliyun\sdk\example;

use aliyun\sdk\Aliyun;
use aliyun\sdk\services\AliyunServices;
use aliyun\sdk\services\Vod;

require_once __DIR__ . '/base.php';

Aliyun::region('cn-shanghai');

$response = Vod::V20170321()->GetCategories()
    ->setCateId(-1)
    ->request();

dump($response->getContent());

// or
AliyunServices::Vod20170321()->GetCategories()
    ->setCateId(-1)
    ->request();
