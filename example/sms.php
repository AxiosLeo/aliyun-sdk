<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 09:56
 */

namespace aliyun\sdk\example;

require_once __DIR__ . '/base.php';

$response = \aliyun\sdk\clients\Sms::factory()
    ->setPhoneNumbers('17712345678')
    ->setTemplateCode('SMS_1201234567')
    ->setSignName('SignName')
    ->setTemplateParam(['name' => rand(100000, 999999)])
    ->setOutId('debug')
    ->send();

dump($response);
