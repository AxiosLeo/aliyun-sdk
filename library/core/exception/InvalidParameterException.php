<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/2 13:52
 */

namespace aliyun\sdk\core\exception;

use Throwable;

/**
 * Class InvalidParameterException
 * @package aliyun\sdk\AliyunBase\exception
 */
class InvalidParameterException extends \InvalidArgumentException
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}