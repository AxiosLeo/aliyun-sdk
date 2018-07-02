<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2018/7/2 13:31
 */

require_once __DIR__. "/base.php";

\aliyun\sdk\Aliyun::region('cn-hongkong');

$result = \aliyun\sdk\mts\Mts::ListMedia()->request()->getContent();

dump($result);
