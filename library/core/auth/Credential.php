<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/9 15:01
 */

namespace aliyun\sdk\core\auth;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\exception\CredentialException;
use aliyun\sdk\core\sign\HmacSHA1;

class Credential
{
    public static $domain = "http://location.aliyuncs.com/?";

    public static $signatureNonce;

    public static function auth($product, $signature_once, $timestamp)
    {
        $param = [
            "Id"               => Aliyun::$region_id,
            "ServiceCode"      => $product,
            "Type"             => "openAPI",
            "RegionId"         => "cn-hangzhou",
            "AccessKeyId"      => Aliyun::$access_key_id,
            "Format"           => "JSON",
            "SignatureMethod"  => "HMAC-SHA1",
            "SignatureVersion" => "1.0",
            "SignatureNonce"   => $signature_once,
            "Timestamp"        => $timestamp,
            "Action"           => "DescribeEndpoints",
            "Version"          => "2015-06-12"
        ];

        $signature          = HmacSHA1::create($param, "GET");
        $param["Signature"] = $signature;
        $url                = self::$domain . http_build_query($param);
        $result             = file_get_contents($url);
        $result             = json_decode($result, true);
        if (isset($result['Success']) && $result['Success'] == true) {
            return true;
        }

        throw new CredentialException("credential failed");
    }
}