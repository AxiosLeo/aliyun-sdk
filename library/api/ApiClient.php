<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 09:14
 */

namespace aliyun\sdk\api;

use aliyun\sdk\api\request\APICommon;

class ApiClient extends APICommon
{
    /**
     * @var APICommon
     */
    private static $instance;

    private static $action_name;

    public static function action($action_name){
        if(is_null(self::$instance) || self::$action_name != $action_name){
            self::$action_name = $action_name;
            self::$instance = new self(self::$action_name);
        }

        return self::$instance;
    }

    public function __construct($action_name)
    {
        parent::__construct();
        $this->setActionName($action_name);
    }
}