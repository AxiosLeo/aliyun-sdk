<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/2 13:34
 */
namespace aliyun\sdk;

use aliyun\sdk\core\Endpoints;
use aliyun\sdk\core\help\Parse;
use aliyun\sdk\core\Product;

class Aliyun
{
    public static $access_key_id;

    public static $access_secret;

    public static $security_token;

    public static $region_id;

    public static $instance;

    /**
     * @param string $region_id
     * @param string $accessKeyId
     * @param string $accessSecret
     * @param null $security_token
     */
    public static function auth($region_id , $accessKeyId = '', $accessSecret = '', $security_token = null){
        defined('ALIYUN_SDK_PATH') or define('ALIYUN_SDK_PATH',__DIR__);
        self::$access_key_id = $accessKeyId;
        self::$access_secret = $accessSecret;
        self::$security_token = $security_token;
        self::$region_id = $region_id;

        if(empty(Endpoints::$endpoints)){
            $xml_file_content = file_get_contents(ALIYUN_SDK_PATH .'/endpoints.xml');
            $array = Parse::xmlToArray($xml_file_content);
//            dump($array);
            dump(1);

            foreach ($array['Endpoint'] as $endpoint){
                $region_id = $endpoint['RegionIds']['RegionId'];
                $products = $endpoint['Products']['Product'];
                $product_list = [];
                if(isset($products['ProductName'])){
                    Product::push($products['ProductName'],$products['DomainName'],$region_id);
                    $product_name = strtolower($products['ProductName']);
                    array_push($product_list,$product_name);
                }else{
                    foreach ($products as $p){
                        Product::push($p['ProductName'],$p['DomainName'],$region_id);
                        $product_name = strtolower($p['ProductName']);
                        array_push($product_list,$product_name);
                    }
                }

                Endpoints::push($region_id, $product_list);
            }
        }


//        dump(self::$endpoints);
//        dump(Endpoints::select());
//        dump(Endpoints::productExist('cn-shanghai','vod'));
//        dump(Product::select());
//        dump(Product::domain('vod','cn-shanghai'));
    }
}