<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/2 14:01
 */

namespace aliyun\sdk\core\http;


class Parameter
{
    public $format = "JSON";

    public $version;

    public $access_key_id;

    public $signature;

    public $signature_method;

    public $signature_version;

    public $timestamp;

    public $signature_nonce;

    public $security_token;

    public function commonParam()
    {
        return [
            "Format"          => $this->format,
            "Version"         => $this->version,
            "AccessKeyId"     => $this->access_key_id,
            "Signature"       => $this->signature,
            "SignatureMethod" => $this->signature_method,
            "SignatureVersion"=> $this->signature_version,
            "Timestamp"       => $this->timestamp,
            "SignatureNonce"  => $this->signature_nonce,
        ];
    }

    /**
     * @param $format
     * @return $this
     */
    public function setFormat($format){
        $this->format = $format;
        return $this;
    }

    /**
     * @param $version_date
     * @return $this
     */
    public function setVersion($version_date){
        $this->version = $version_date;
        return $this;
    }

    public function setAccessKeyId($access_key_id){
        $this->access_key_id = $access_key_id;
        return $this;
    }

    public function setSignature($param){

    }
}