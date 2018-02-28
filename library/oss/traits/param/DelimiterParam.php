<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/28 09:22
 */

namespace aliyun\sdk\oss\traits\param;


trait DelimiterParam
{
    public function setDelimiter($delimiter){
        $this->setParam('delimiter', $delimiter);
        return $this;
    }
}