<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/7 17:37
 */

namespace aliyun\sdk\core;

use aliyun\sdk\core\exception\ProductNotExistException;
use aliyun\sdk\core\exception\RegionNotExistException;

class Endpoints
{
    protected static $endpoints = [];

    public static function push($key, $endpoint)
    {
        if (!isset(self::$endpoints[$key])) {
            self::$endpoints[$key] = $endpoint;
        }
    }

    public static function productExist($region_id, $product_name)
    {
        if (!isset(self::$endpoints[$region_id])) {
            throw new RegionNotExistException($region_id . " not exist");
        }

        if (!in_array($product_name, self::$endpoints[$region_id])) {
            throw new ProductNotExistException($product_name . " not exist");
        }

        return true;
    }

    public static function all()
    {
        return self::$endpoints;
    }
}