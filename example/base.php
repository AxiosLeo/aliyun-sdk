<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 09:51
 */
require_once __DIR__. "/../vendor/autoload.php";
$access_id = "testAccessKeyId";
$access_secret = "testAccessKeySecret";
\aliyun\sdk\Aliyun::auth($access_id,$access_secret);