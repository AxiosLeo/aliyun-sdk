<?php

namespace aliyun\sdk\example;

use aliyun\sdk\services\Ecs;

require_once __DIR__ . '/base.php';

$response = Ecs::V20140526()->DescribeInstances()
    ->setRegionId('cn-shenzhen')
    ->request();

dump($response->getContent());
