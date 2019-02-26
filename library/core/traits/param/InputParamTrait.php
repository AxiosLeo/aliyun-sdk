<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/5 13:30
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait InputParamTrait
 * @package aliyun\sdk\core\traits\param
 */
trait InputParamTrait
{
    /**
     * @param array $input
     * @return $this
     */
    public function setInput($input){
        $this->setParam("Input",\aliyun\sdk\core\help\Parse::arrayToJson($input));
        return $this;
    }

    /**
     * @return array
     */
    public function getInput(){
        return \aliyun\sdk\core\help\Parse::jsonToArray($this->params("Input"));
    }
}