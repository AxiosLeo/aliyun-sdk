<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 13:53
 */

namespace aliyun\sdk\api\traits;

/**
 * Trait ServiceParametersMapParam
 * @package aliyun\sdk\api\traits
 */
trait ServiceParametersMapParam
{
    /**
     * @param array $config
     * @return $this
     */
    public function setServiceParametersMap(array $config){
        $this->setParam("ServiceParametersMap",json_encode($config));
        return $this;
    }

    public function getServiceParametersMap(){
        return json_decode($this->params("ServiceParametersMap"));
    }
}