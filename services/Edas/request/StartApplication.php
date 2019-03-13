<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setEccInfo($EccInfo)
 * @method string getEccInfo()
 */
final class StartApplication extends EdasCommon
{
    public $action = 'StartApplication';
}
