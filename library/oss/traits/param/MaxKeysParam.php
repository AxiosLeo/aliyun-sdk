<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/28 09:24
 */

namespace aliyun\sdk\oss\traits\param;


trait MaxKeysParam
{
    public function setMaxKeysParam($max_keys){
        $this->setParam("max-keys",$max_keys);
        return $this;
    }
}