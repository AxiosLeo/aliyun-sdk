<?php
/**
 * @author: axios
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/9 16:14
 */

namespace aliyun\sdk;

use api\tool\lib\ArrayTool;

class Option
{
    public static $option;

    protected static function options()
    {
        if (is_null(self::$option)) {
            self::$option = ArrayTool::instance([
                'header_accept_lang' => [
                    'zh-hans-cn' => 'zh-cn',
                ],
            ]);
        }

        return self::$option;
    }

    public static function get($index = null, $default = null)
    {
        return self::options()->get($index, $default);
    }

    public static function set($index, $value = '')
    {
        return self::options()->set($index, $value);
    }

    public static function delete($index)
    {
        return self::options()->delete($index);
    }

    public static function list($index = '')
    {
        return self::options()->getChildKeyList($index);
    }
}
