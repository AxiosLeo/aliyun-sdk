<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/2 13:49
 */

namespace aliyun\sdk\core\sign;

use aliyun\sdk\Aliyun;

class HmacSHA1 extends Signature
{
    public static $param_string;

    public static function create($param, $method = "POST")
    {
        $param_string       = self::paramString($param, $method);
        self::$param_string = $param_string;
        $signature          = self::makeSign(Aliyun::$access_secret . "&", $param_string);
        return $signature;
    }

    private static function paramString($param, $method)
    {
        //按参数名排序
        ksort($param);

        $param_string = "";
        $n            = 0;
        foreach ($param as $k => $v) {
            //对参数名称和参数值进行 URL 编码
            $k = rawurlencode($k);
            $v = rawurlencode($v);
            //对编码后的参数名称和值使用英文等号（=）进行连接
            if ($n != 0) {
                $param_string .= "&";
            }
            $param_string .= $k . "=" . $v;
            $n++;
        }

        return $method . "&" . rawurlencode("/") . "&" . rawurlencode($param_string);
    }

    public static function makeSign($key = "", $string = "")
    {
        return base64_encode(hash_hmac('sha1', $string, $key, true));
    }
}