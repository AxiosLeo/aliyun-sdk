<?php

namespace aliyun\sdk\clients;

use aliyun\sdk\Aliyun;
use OSS\OssClient;

/**
 * Class Oss
 * API Document : https://help.aliyun.com/document_detail/31948.html
 *
 * @package aliyun\sdk\oss
 */
class Oss
{
    protected static $OssClient;

    /**
     * @param string $access_key_id
     * @param string $access_secret
     * @param string $region_id
     * @param bool   $internal
     *
     * @return OssClient
     * @throws \OSS\Core\OssException
     */
    public static function factory($access_key_id = null, $access_secret = null, $region_id = null, $internal = false)
    {
        self::$OssClient = new OssClient(
            Aliyun::getAccessKeyId($access_key_id),
            Aliyun::getAccessSecret($access_secret),
            self::endpoints($region_id, $internal)
        );

        return self::$OssClient;
    }

    private static function endpoints($region_id, $internal = false)
    {
        $endpoints = $internal ? self::$endpoints["internal"] : self::$endpoints["public"];
        if (isset($endpoints[$region_id])) {
            return $endpoints[$region_id];
        }
        return "";
    }

    private static $endpoints = [
        "public"   => [
            "ap-northeast-1" => "oss-ap-northeast-1.aliyuncs.com",
            "ap-south-1"     => "oss-ap-south-1.aliyuncs.com",
            "ap-southeast-1" => "oss-ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "oss-ap-southeast-2.aliyuncs.com",
            "ap-southeast-3" => "oss-ap-southeast-3.aliyuncs.com",
            "ap-southeast-5" => "oss-ap-southeast-5.aliyuncs.com",
            "cn-beijing"     => "oss-cn-beijing.aliyuncs.com",
            "cn-chengdu"     => "oss-cn-chengdu.aliyuncs.com",
            "cn-hangzhou"    => "oss-cn-hangzhou.aliyuncs.com",
            "cn-hongkong"    => "oss-cn-hongkong.aliyuncs.com",
            "cn-huhehaote"   => "oss-cn-huhehaote.aliyuncs.com",
            "cn-qingdao"     => "oss-cn-qingdao.aliyuncs.com",
            "cn-shanghai"    => "oss-cn-shanghai.aliyuncs.com",
            "cn-shenzhen"    => "oss-cn-shenzhen.aliyuncs.com",
            "cn-zhangjiakou" => "oss-cn-zhangjiakou.aliyuncs.com",
            "eu-central-1"   => "oss-eu-central-1.aliyuncs.com",
            "eu-west-1"      => "oss-eu-west-1.aliyuncs.com",
            "me-east-1"      => "oss-me-east-1.aliyuncs.com",
            "us-east-1"      => "oss-us-east-1.aliyuncs.com",
            "us-west-1"      => "oss-us-west-1.aliyuncs.com",
        ],
        "internal" => [
            "ap-northeast-1" => "oss-ap-northeast-1-internal.aliyuncs.com",
            "ap-south-1"     => "oss-ap-south-1-internal.aliyuncs.com",
            "ap-southeast-1" => "oss-ap-southeast-1-internal.aliyuncs.com",
            "ap-southeast-2" => "oss-ap-southeast-2-internal.aliyuncs.com",
            "ap-southeast-3" => "oss-ap-southeast-3-internal.aliyuncs.com",
            "ap-southeast-5" => "oss-ap-southeast-5-internal.aliyuncs.com",
            "cn-beijing"     => "oss-cn-beijing-internal.aliyuncs.com",
            "cn-chengdu"     => "oss-cn-chengdu-internal.aliyuncs.com",
            "cn-hangzhou"    => "oss-cn-hangzhou-internal.aliyuncs.com",
            "cn-hongkong"    => "oss-cn-hongkong-internal.aliyuncs.com",
            "cn-huhehaote"   => "oss-cn-huhehaote-internal.aliyuncs.com",
            "cn-qingdao"     => "oss-cn-qingdao-internal.aliyuncs.com",
            "cn-shanghai"    => "oss-cn-shanghai-internal.aliyuncs.com",
            "cn-shenzhen"    => "oss-cn-shenzhen-internal.aliyuncs.com",
            "cn-zhangjiakou" => "oss-cn-zhangjiakou-internal.aliyuncs.com",
            "eu-central-1"   => "oss-eu-central-1-internal.aliyuncs.com",
            "eu-west-1"      => "oss-eu-west-1-internal.aliyuncs.com",
            "me-east-1"      => "oss-me-east-1-internal.aliyuncs.com",
            "us-east-1"      => "oss-us-east-1-internal.aliyuncs.com",
            "us-west-1"      => "oss-us-west-1-internal.aliyuncs.com",
        ]
    ];
}
