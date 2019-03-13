<?php
namespace aliyun\sdk\services\ROS\request;

use aliyun\sdk\services\ROS\ROSCommon;

/**
 * @method $this setstackname($stackname)
 * @method string getstackname()
 * @method $this setstackid($stackid)
 * @method string getstackid()
 * @method $this setresource($resource)
 * @method string getresource()
 * @method $this setexpire($expire)
 * @method string getexpire()
 * @method $this setsignature($signature)
 * @method string getsignature()
 */
final class WaitConditions extends ROSCommon
{
    public $action = 'WaitConditions';
}
