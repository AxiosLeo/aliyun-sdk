<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 13:51
 */

namespace aliyun\sdk\api\traits;

/**
 * Trait RequestParametersParam
 * @package aliyun\sdk\api\traits
 */
trait RequestParametersParam
{
    /**
     * @param array $config
     * @return $this
     */
    public function setRequestParameters(array $config){
        $this->setParam("RequestParameters",json_encode($config));
        return $this;
    }

    public function getRequestParameters(){
        return json_decode($this->params("RequestParameters"));
    }
}