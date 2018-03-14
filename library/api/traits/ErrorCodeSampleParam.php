<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 13:59
 */

namespace aliyun\sdk\api\traits;

/**
 * Trait ErrorCodeSampleParam
 * @package aliyun\sdk\api\traits
 */
trait ErrorCodeSampleParam
{
    /**
     * @param array $config
     * @return $this
     */
    public function setErrorCodeSample(array $config){
        $this->setParam("ErrorCodeSample",json_encode($config));
        return $this;
    }

    public function getErrorCodeSample(){
        return json_decode($this->params("ErrorCodeSample"));
    }
}