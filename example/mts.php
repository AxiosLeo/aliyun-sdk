<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2018/7/2 13:31
 */

namespace aliyun\sdk\example;

use aliyun\sdk\services\Mts\request\ListMedia;

require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::region('cn-hongkong');

$result = new ListMedia();

dump($result);
