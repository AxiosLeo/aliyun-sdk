<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2018/7/2 13:31
 */

namespace aliyun\sdk\example;

use aliyun\sdk\Aliyun;
use aliyun\sdk\services\Mts;

require_once __DIR__ . '/base.php';

Aliyun::region('cn-hongkong');

$response = Mts::V20180528()->ListMedia()->request();

dump($response->getContent());
