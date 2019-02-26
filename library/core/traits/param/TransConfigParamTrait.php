<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:28
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait TransConfigParamTrait
 * @package aliyun\sdk\core\traits\param
 */
trait TransConfigParamTrait
{
    /**
     * @param array $trans_config
     * @return $this
     */
    public function setTransConfig($trans_config){
        $this->setParam("TransConfig",\aliyun\sdk\core\help\Parse::arrayToJson($trans_config));
        return $this;
    }

    /**
     * @return array
     */
    public function getTransConfig(){
        return \aliyun\sdk\core\help\Parse::jsonToArray($this->params("TransConfig"));
    }
}