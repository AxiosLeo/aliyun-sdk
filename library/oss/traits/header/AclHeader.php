<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/28 10:38
 */
namespace aliyun\sdk\oss\traits\header;

trait AclHeader
{
    public function setAcl($acl){
        $this->setXOSSHeader("acl",$acl);
        return $this;
    }
}