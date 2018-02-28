<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/27 16:26
 */

namespace aliyun\sdk\oss\lib;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\sign\HmacSHA1;

class OssAuth
{
    /**
     * @var OssAuth
     */
    private static $instance;

    private $product = "OSS";

    private $verb = "GET";

    private $content_md5 = "";

    private $content_type = "";

    private $canonical_oss_header = [];

    private $canonical_resource = "";

    public static function init($product)
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        self::$instance->setProduct($product);

        return self::$instance;
    }

    public function auth($date)
    {
        $connector = "\n";
        $str = $this->verb . $connector .
            $this->content_md5 . $connector .
            $this->content_type . $connector .
            $date . $connector . $this->canonical_oss_header . $this->canonical_resource;
        dump($str);
        $signature = HmacSHA1::makeSign(Aliyun::$access_secret, $str);
        return $this->product . " ".Aliyun::$access_key_id . ":" . $signature;
    }

    public function urlAuth($expire){
        return $this->auth($expire);
    }

    private function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    public function setVERB($verb)
    {
        $this->verb = $verb;
        return $this;
    }

    public function setContentMd5($content)
    {
        $this->content_md5 = md5($content);
        return $this;
    }

    public function setContentType($content_type)
    {
        $this->content_type = $content_type;
        return $this;
    }

    public function setCanonicalOssHeader($canonical_oss_header)
    {
        $str = "";
        ksort($canonical_oss_header);
        foreach ($canonical_oss_header as $k=>$v){
            $str = $str . $k .":" .$v . "\n";
        }
        $this->canonical_oss_header = $str;
        return $this;
    }

    public function setCanonicalResource($bucket , $oss_key)
    {
        $str = "/";
        if(!empty($bucket)){
            $str .= $bucket."/";
        }

        if("/" !== $oss_key && !empty($oss_key)){
            $str .= $oss_key;
        }
        $this->canonical_resource = $str;
        return $this;
    }
}