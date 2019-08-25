<?php

namespace aliyun\sdk\example;

use aliyun\sdk\clients\Sms;

require_once __DIR__ . '/base.php';

$response = Sms::factory()
    ->setPhoneNumbers('17712345678')
    ->setTemplateCode('SMS_1201234567')
    ->setSignName('SignName')
    ->setTemplateParam(['name' => rand(100000, 999999)])
    ->setOutId('debug')
    ->send();

dump($response);
