<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 09:58
 */

namespace aliyun\sdk\example;

use aliyun\sdk\Aliyun;
use aliyun\sdk\services\Vod;

require_once __DIR__ . '/base.php';

Aliyun::region('cn-shanghai');

$response = Vod::V20170321()->GetCategories()
    ->setCateId(-1)
    ->request();

dump($response->getContent());
