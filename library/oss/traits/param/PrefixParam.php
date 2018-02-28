<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/28 09:26
 */

namespace aliyun\sdk\oss\traits\param;


trait PrefixParam
{
    public function setPrefix($prefix){
        $this->setParam('prefix',$prefix);
        return $this;
    }
}