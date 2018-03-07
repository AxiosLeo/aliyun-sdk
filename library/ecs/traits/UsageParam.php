<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 17:38
 */

namespace aliyun\sdk\ecs\traits;

/**
 * Trait UsageParam
 * @package aliyun\sdk\ecs\traits
 */
trait UsageParam
{
    public function setUsage($usage){
        $options = [
            "instance","none"
        ];

        if(is_numeric($usage)){
            $usage = isset($options[$usage]) ? $options[$usage] : "none";
        }

        if(!in_array($usage,$options)){
            $usage = "none";
        }

        $this->setParam("Usage",$usage);
        return $this;
    }
}