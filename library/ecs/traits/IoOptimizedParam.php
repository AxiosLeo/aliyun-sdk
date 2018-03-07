<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:17
 */

namespace aliyun\sdk\ecs\traits;

/**
 * Trait IoOptimized
 * @package aliyun\sdk\ecs\traits
 */
trait IoOptimizedParam
{
    public function setIoOptimized($ioOptimized){
        $option = [
            "none","optimized"
        ];

        if(!in_array($ioOptimized,$option)){
            $ioOptimized = "optimized";
        }
        $this->setParam("IoOptimized",$ioOptimized);
        return $this;
    }
}