<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 13:52
 */

namespace aliyun\sdk\api\traits;

/**
 * Trait ServiceParametersParam.
 */
trait ServiceParametersParam
{
    /**
     * @param array $config
     *
     * @return $this
     */
    public function setServiceParameters(array $config)
    {
        $this->setParam('ServiceParameters', json_encode($config));

        return $this;
    }

    public function getServiceParameters()
    {
        return json_decode($this->params('ServiceParameters'));
    }
}
