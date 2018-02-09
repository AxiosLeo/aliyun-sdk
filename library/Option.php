<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/9 16:14
 */

namespace aliyun\sdk;


class Option
{
    public static $option = [
        'header_accept_lang'=>[
            'zh-hans-cn' => 'zh-cn'
        ]
    ];

    public static function get($index,$default = null){
        return isset(self::$option[$index]) ? self::$option[$index] : $default;
    }
}