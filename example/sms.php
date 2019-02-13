<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 09:56
 */
require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::auth($access_id, $access_secret);

$response = \aliyun\sdk\sms\Sms::factory()
    ->setPhoneNumbers('17712345678')
    ->setTemplateCode('SMS_1201234567')
    ->setSignName('SignName')
    ->setTemplateParam(['name' => rand(100000, 999999)])
    ->setOutId('debug')
    ->send();

dump($response);
