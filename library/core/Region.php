<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 15:56
 */

namespace aliyun\sdk\core;


class Region
{
    public static $region = [];

    public static function push($region_id, $product_name, $domain_name){
        $product_name = strtolower($product_name);
        if(!isset(self::$region[$region_id])){
            self::$region[$region_id][$product_name] = $domain_name;
        }else if(!isset(self::$region[$region_id][$product_name])){
            self::$region[$region_id][$product_name] = $domain_name;
        }
    }

    public static function all(){
        return self::$region;
    }
}