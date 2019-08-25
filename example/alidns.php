<?php

namespace aliyun\sdk\example;

require_once __DIR__ . '/base.php';

use aliyun\sdk\Aliyun;
use aliyun\sdk\services\Alidns;
use aliyun\sdk\services\AliyunServices;

Aliyun::region('cn-hangzhou');

$response = Alidns::V20150109()->DescribeDomains()
    ->setPageNumber(1)
    ->setPageSize(15)
    ->request();

dump($response->getContent());

// or
AliyunServices::Alidns20150109()->DescribeDomains()
    ->setPageNumber(1)
    ->setPageSize(15)
    ->request();
