<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 10:35
 */

namespace aliyun\sdk\core\traits;


trait ClientTrait
{
    /**
     * @var \aliyun\sdk\core\http\Request
     */
    private static $instance;

    private static $action_name;

    public static function action($action_name)
    {
        if (is_null(self::$instance) || self::$action_name != $action_name) {
            self::$action_name = $action_name;
            self::$instance    = new self();
        }

        return self::$instance;
    }

    public function __construct()
    {
        parent::__construct();
        $this->setActionName(self::$action_name);
    }
}