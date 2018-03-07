<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 17:02
 */

namespace aliyun\sdk\ecs\traits;

/**
 * Trait SecurityEnhancementStrategyParam
 * @package aliyun\sdk\ecs\traits
 * @method getSecurityEnhancementStrategy()
 */
trait SecurityEnhancementStrategyParam
{
    /**
     * @param boolean $bool
     * @return $this
     */
    public function setSecurityEnhancementStrategy($bool){
        $bool = $bool ? "Active" : "Deactive";
        $this->setParam("SecurityEnhancementStrategy",$bool);
        return $this;
    }
}