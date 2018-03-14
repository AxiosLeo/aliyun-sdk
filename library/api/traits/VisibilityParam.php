<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 13:17
 */

namespace aliyun\sdk\api\traits;

/**
 * Trait VisibilityParam
 * @package aliyun\sdk\api\traits
 * @method getVisibility()
 */
trait VisibilityParam
{
    /**
     * @param $visibility
     * @return $this
     */
    public function setVisibility($visibility){
        if(!in_array(strtolower($visibility),["public","private"])){
            $visibility = $visibility ? "public" : "private";
        }
        $this->setParam("Visibility",$visibility);
        return $this;
    }
}