<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/28 11:16
 */

namespace aliyun\sdk\oss\traits\param;


trait KeyParam
{
    public function setKey($key){
        $this->path = $key;
        return $this;
    }
}