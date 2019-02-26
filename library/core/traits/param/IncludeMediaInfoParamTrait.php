<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 13:16
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait IncludeMediaInfoParamTrait
 * @package aliyun\sdk\core\traits\param
 */
trait IncludeMediaInfoParamTrait
{
    public function setIncludeMediaInfo($include_media_info){
        $include_media_info = \aliyun\sdk\core\help\Parse::boolToString($include_media_info);
        $this->setParam("IncludeMediaInfo",$include_media_info);
        return $this;
    }
}