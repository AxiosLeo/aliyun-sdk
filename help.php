<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/5 17:08
 */

if(!function_exists('dump')){
    function dump($var = null, $echo = true, $label = null, $flags = ENT_SUBSTITUTE){
        return \aliyun\sdk\core\help\Debug::dump($var,$echo, $label, $flags);
    }
}