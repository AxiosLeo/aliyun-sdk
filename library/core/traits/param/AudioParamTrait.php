<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:25
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait Audio
 * @package aliyun\sdk\core\traits\param
 */
trait AudioParamTrait
{
    /**
     * @param array $audio
     * @return $this
     */
    public function setAudio($audio){
        $this->setParam("Audio",\aliyun\sdk\core\help\Parse::arrayToJson($audio));
        return $this;
    }

    /**
     * @return array
     */
    public function getAudio(){
        return \aliyun\sdk\core\help\Parse::jsonToArray($this->params("Audio"));
    }
}