<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/28 11:28
 */

namespace aliyun\sdk\oss\traits\param;


trait StorageClassParam
{
    public function setStorageClass($storage_class = "Standard"){
        $this->setParam("StorageClass", $storage_class);
        return $this;
    }
}