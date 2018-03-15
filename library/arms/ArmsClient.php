<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/15 10:03
 */

namespace aliyun\sdk\arms;

use aliyun\sdk\arms\request\ArmsCommon;
use aliyun\sdk\core\lib\ClientInterface;

/**
 * Class ArmsClient
 * Api Document : https://help.aliyun.com/document_detail/53727.html
 * @package aliyun\sdk\arms
 */
class ArmsClient extends ArmsCommon implements ClientInterface
{
    private static $instance;

    private static $action_name;

    public static function action($action_name)
    {
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