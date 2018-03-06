<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/5 14:15
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait OutputsParamTrait
 * @package aliyun\sdk\core\traits\param
 */
trait OutputsParamTrait
{
    /**
     * @param array $Outputs
     * @return $this
     */
    public function setOutputs($Outputs){
        $this->setParam("Outputs",\aliyun\sdk\core\help\Parse::arrayToJson($Outputs));
        return $this;
    }

    /**
     * @return array
     */
    public function getOutputs(){
        return \aliyun\sdk\core\help\Parse::jsonToArray($this->params("Outputs"));
    }
}