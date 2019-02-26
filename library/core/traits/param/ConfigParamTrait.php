<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 17:25
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait ConfigParamTrait
 * @package aliyun\sdk\core\traits\param
 */
trait ConfigParamTrait
{
    /**
     * @param array $config
     * @return $this
     */
    public function setConfig($config){
        $this->setParam("Config",\aliyun\sdk\core\help\Parse::arrayToJson($config));
        return $this;
    }

    /**
     * @return array
     */
    public function getSnapshotConfig(){
        return \aliyun\sdk\core\help\Parse::jsonToArray($this->params("Config"));
    }
}