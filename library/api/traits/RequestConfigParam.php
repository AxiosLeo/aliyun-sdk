<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 13:30
 */

namespace aliyun\sdk\api\traits;

/**
 * Trait RequestConfigParam
 * @package aliyun\sdk\api\traits
 */
trait RequestConfigParam
{
    /**
     * Param Document : https://help.aliyun.com/document_detail/43985.html
     * @param array $config
     * @return $this
     */
    public function setRequestConfig(array $config){
        $this->setParam("RequestConfig",json_encode($config));
        return $this;
    }

    public function getRequestConfig(){
        return json_decode($this->params("RequestConfig"));
    }
}