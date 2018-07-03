<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/7 17:40
 */

namespace aliyun\sdk\core;

use aliyun\sdk\core\exception\ProductNotExistException;
use aliyun\sdk\core\exception\RegionNotExistException;

class Product
{
    protected static $products = [];

    public static function push($product_name, $domain_name, $region_id)
    {
        $product_name = strtolower($product_name);
        if (!isset(self::$products[$product_name])) {
            self::$products[$product_name][$region_id] = $domain_name;
        } else if (!isset(self::$products[$product_name][$region_id])) {
            self::$products[$product_name][$region_id] = $domain_name;
        }
    }

    public static function domain($product_name, $region_id)
    {
        if (isset(self::$products[$product_name])) {
            if (isset(self::$products[$product_name][$region_id])) {
                return self::$products[$product_name][$region_id];
            } else {
                throw new RegionNotExistException("$region_id not exist in $product_name");
            }
        } else {
            throw new ProductNotExistException("$product_name not exist");
        }
    }

    public static function all($product_name = null)
    {
        return is_null($product_name) || !isset(self::$products[$product_name]) ? self::$products : self::$products[$product_name];
    }
}