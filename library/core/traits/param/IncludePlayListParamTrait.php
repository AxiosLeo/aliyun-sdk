<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 13:12
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait IncludePlayListParamTrait
 * @package aliyun\sdk\core\traits\param
 */
trait IncludePlayListParamTrait
{
    /**
     * @param bool $include_play_list
     * @return $this
     */
    public function setIncludePlayList($include_play_list){
        $include_play_list = \aliyun\sdk\core\help\Parse::boolToString($include_play_list);
        $this->setParam("IncludePlayList",$include_play_list);
        return $this;
    }
}