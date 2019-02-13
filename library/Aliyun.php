<?php
/**
 * @author: axios
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/2 13:34
 */

namespace aliyun\sdk;

use aliyun\sdk\core\Endpoints;
use aliyun\sdk\core\Product;
use aliyun\sdk\core\Region;
use api\tool\lib\Parse;

class Aliyun
{
    public static $access_key_id;

    public static $access_secret;

    public static $security_token;

    public static $region_id;

    public static $response;

    /**
     * @param string $accessKeyId
     * @param string $accessSecret
     * @param null   $security_token
     */
    public static function auth($accessKeyId = '', $accessSecret = '', $security_token = null)
    {
        defined('ALIYUN_SDK_PATH') or define('ALIYUN_SDK_PATH', __DIR__);

        self::$access_key_id  = $accessKeyId;
        self::$access_secret  = $accessSecret;
        self::$security_token = is_null($security_token) ? md5('SignatureNonce' . uniqid(md5(microtime(true)), true)) : $security_token;

        if (empty(Endpoints::all())) {
            $xml_file_content = file_get_contents(ALIYUN_SDK_PATH . '/endpoints.xml');

            $array = Parse::xmlToArray($xml_file_content);

            foreach ($array['Endpoint'] as $endpoint) {
                $region_id    = $endpoint['RegionIds']['RegionId'];
                $products     = $endpoint['Products']['Product'];
                $product_list = [];
                if (isset($products['ProductName'])) {
                    Product::push($products['ProductName'], $products['DomainName'], $region_id);
                    $product_name = strtolower($products['ProductName']);
                    array_push($product_list, $product_name);
                } else {
                    foreach ($products as $p) {
                        Product::push($p['ProductName'], $p['DomainName'], $region_id);
                        Region::push($region_id, $p['ProductName'], $p['DomainName']);
                        $product_name = strtolower($p['ProductName']);
                        array_push($product_list, $product_name);
                    }
                }

                Endpoints::push($region_id, $product_list);
            }
        }
    }

    public static function region($region_id = null)
    {
        self::$region_id = is_null($region_id) ? self::$region_id : $region_id;

        return self::$region_id;
    }

    public static function response($response = null)
    {
        if (!is_null($response)) {
            self::$response = $response;
        }

        return self::$response;
    }

    public static function getAccessKeyId($access_key_id = null)
    {
        return is_null($access_key_id) ? Aliyun::$access_key_id : $access_key_id;
    }

    public static function getAccessSecret($access_secret = null)
    {
        return is_null($access_secret) ? Aliyun::$access_secret : $access_secret;
    }
}
