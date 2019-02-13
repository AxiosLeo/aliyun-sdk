<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 13:49
 */

namespace aliyun\sdk\api\traits;

/**
 * Trait ServiceConfigParam.
 */
trait ServiceConfigParam
{
    /**
     * @param array $config
     *
     * @return $this
     */
    public function setServiceConfig(array $config)
    {
        $this->setParam('ServiceConfig', json_encode($config));

        return $this;
    }

    public function getServiceConfig()
    {
        return json_decode($this->params('ServiceConfig'));
    }
}
