<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/2 14:01
 */

namespace aliyun\sdk\core\http;

use aliyun\sdk\Aliyun;

class Parameter
{
    protected $param = [];

    public function __construct()
    {
        $this->setFormat("JSON");
        $this->setVersion("0000-00-00");
        $this->setAccessKeyId(Aliyun::$access_key_id);
        $this->setParam("SignatureMethod","HMAC-SHA1");
        $this->setParam("SignatureVersion","1.0");
        $this->setParam("SignatureNonce",md5("SignatureNonce".uniqid(md5(microtime(true)),true)));
        $this->setParam("Timestamp",date("Y-m-d\TH:i:s\Z"));
    }

    public function param($key = '')
    {
        if(is_string($key) && isset($this->param[$key])){
            return $this->param[$key];
        }
        return $this->param;
    }

    /**
     * @param $format
     */
    protected function setFormat($format){
        $this->setParam('Format',$format);
    }

    /**
     * @param $version_date
     */
    protected function setVersion($version_date){
        $this->setParam('Version',$version_date);
    }

    protected function setAccessKeyId($access_key_id){
        $this->setParam('AccessKeyId',$access_key_id);
    }

    protected function setSignature($signature){
        $this->setParam("Signature",$signature);
    }

    protected function setParam($key , $value = ''){
        if(is_array($key)){
            foreach ($key as $k=>$v){
                $this->param[$k] = $v;
            }
        }else{
            $this->param[$key] = $value;
        }
    }
}