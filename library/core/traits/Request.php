<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/24 09:29
 */

namespace aliyun\sdk\core\traits;

trait Request
{
    public function __construct()
    {
        $temp        = explode("\\", __CLASS__);
        $action_name = $temp[count($temp) - 1];
        $this->setActionName($action_name);
    }

    /**
     * @param $name
     * @param $arguments
     * @return $this
     */
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.

        if (false !== strpos($name, "set")) {
            $param_name = str_replace("set", "", $name);
            $this->setParam($param_name, $arguments[0]);
            return $this;
        } else {
            $param_name = str_replace("get", "", $name);
            return $this->params($param_name);
        }
    }
}