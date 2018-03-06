<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:29
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait MuxConfigParamTrait
 * @package aliyun\sdk\core\traits\param
 */
trait MuxConfigParamTrait
{
    /**
     * @param array $mux_config
     * @return $this
     */
    public function setMuxConfig($mux_config){
        $this->setParam("MuxConfig",\aliyun\sdk\core\help\Parse::arrayToJson($mux_config));
        return $this;
    }

    /**
     * @return array
     */
    public function getMuxConfig(){
        return \aliyun\sdk\core\help\Parse::jsonToArray($this->params("MuxConfig"));
    }
}