<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/2 13:53
 */

namespace aliyun\sdk\core\http;

use aliyun\sdk\core\exception\InvalidParameterException;

class CheckParam
{
    public static function notEmpty(){
        self::error('empty');
    }

    public static function needContain(){

    }

    public static function needIsset(){

    }

    public static function mustBeInt(){

    }

    private static function error($msg , $code = 0){
        throw new InvalidParameterException($msg , $code );
    }
}