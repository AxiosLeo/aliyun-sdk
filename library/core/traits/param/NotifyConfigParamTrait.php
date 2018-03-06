<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 16:42
 */

namespace aliyun\sdk\core\traits\param;

/**
 * Trait NotifyConfigParamTrait
 * @package aliyun\sdk\core\traits\param
 */
trait NotifyConfigParamTrait
{
    /**
     * @param array $notify_config
     * @return $this
     */
    public function setNotifyConfig($notify_config){
        $this->setParam("NotifyConfig",\aliyun\sdk\core\help\Parse::arrayToJson($notify_config));
        return $this;
    }

    /**
     * @return array
     */
    public function getNotifyConfig(){
        return \aliyun\sdk\core\help\Parse::jsonToArray($this->params("NotifyConfig"));
    }
}