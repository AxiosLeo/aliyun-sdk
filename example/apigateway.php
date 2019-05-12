<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 09:52
 */

namespace aliyun\sdk\example;

use aliyun\sdk\Aliyun;
use aliyun\sdk\services\AliyunServices;
use aliyun\sdk\services\CloudAPI;

require_once __DIR__ . '/base.php';

Aliyun::region('cn-hangzhou');

$response = CloudAPI::V20160714()->CreateApi()
    ->setGroupId(1)
    ->setApiName("api_name")
    ->setVisibility(1)
    ->request();

dump($response->getContent());

$response = AliyunServices::CloudAPI20160714()->CreateApi()
    ->setGroupId(1)
    ->setApiName("api_name")
    ->setVisibility(1)
    ->request();

dump($response->getContent());