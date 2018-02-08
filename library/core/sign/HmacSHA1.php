<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/2 13:49
 */

namespace aliyun\sdk\core\sign;


use aliyun\sdk\Aliyun;

class HmacSHA1 extends Signature {
    public static function create($param){
        ksort($param);
        $param_string = http_build_query($param);
        $param_string = urlencode($param_string);
        $signature = base64_encode(hash_hmac('sha1', $param_string, Aliyun::$access_secret, true));
        $signature = urlencode($signature);
        return $signature;
    }
}