<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 09:58
 */
require_once __DIR__ . '/base.php';

\aliyun\sdk\Aliyun::region('cn-shanghai');

$response = \aliyun\sdk\vod\Vod::GetCategories()->setCateId(-1)->request();

dump($response->getContent());
