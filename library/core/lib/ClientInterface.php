<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 09:38
 */

namespace aliyun\sdk\core\lib;

interface ClientInterface
{
    public static function action($action_name);

    public function __construct($action_name);
}