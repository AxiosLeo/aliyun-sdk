<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/28 10:05
 */

namespace aliyun\sdk\oss\traits\param;


trait BucketParam
{
    public function setBucket($bucket){
        $this->domain = $bucket . "." . $this->domain;
        $this->bucket = $bucket;
        $this->setRequestHeader("Host",$this->domain);
        return $this;
    }
}