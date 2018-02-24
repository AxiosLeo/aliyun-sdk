<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/9 13:36
 */

namespace aliyun\sdk\core\http;


class Response
{
    public $header;

    public $body;

    public $status;

    public function setHeader($header){
        $this->header = $header;
    }

    public function setBody($body){
        $this->body = $body;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getContent($format = "json"){
        if($format === "json"){
            $result = json_decode($this->body,true);
            return empty($result) ? $this->body : $result;
        }
        return $this->body;
    }
}