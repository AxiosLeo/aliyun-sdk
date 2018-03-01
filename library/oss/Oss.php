<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/27 10:28
 */
namespace aliyun\sdk\oss;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\Product;
use OSS\OssClient;

/**
 * Class Oss
 * API Document : https://help.aliyun.com/document_detail/31948.html
 * @package aliyun\sdk\oss
 */
class Oss
{
    protected static $OssClient;

    /**
     * @param $access_key_id
     * @param $access_secret
     * @param $region_id
     * @return OssClient
     */
    public static function factory($access_key_id = null, $access_secret = null, $region_id = null){
        $access_key_id = is_null($access_key_id) ? Aliyun::$access_key_id : $access_key_id;
        $access_secret = is_null($access_secret) ? Aliyun::$access_secret : $access_secret;
        $region_id = is_null($region_id) ? Aliyun::$region_id : $region_id;
        self::$OssClient = new OssClient(
            $access_key_id,
            $access_secret,
            Product::domain("oss",$region_id)
        );

        return self::$OssClient;
    }
}