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
 * Trait VideoParamTrait
 * @package aliyun\sdk\core\traits\param
 */
trait VideoParamTrait
{
    /**
     * @param array $video
     * @return $this
     */
    public function setVideo($video){
        $this->setParam("Video",\aliyun\sdk\core\help\Parse::arrayToJson($video));
        return $this;
    }

    /**
     * @return array
     */
    public function getVideo(){
        return \aliyun\sdk\core\help\Parse::jsonToArray($this->params("Video"));
    }
}