<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 09:29
 */
namespace aliyun\sdk\core\traits;

trait Request
{
    /**
     * @param $name
     * @param $arguments
     * @return $this
     */
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.

        $param_name = str_replace("set","",$name);
        $this->setParam($param_name, $arguments[0]);
        return $this;
    }
}