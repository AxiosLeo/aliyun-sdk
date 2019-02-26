<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setEccInfo($EccInfo)
 * @method string getEccInfo()
 * @method $this setForceStatus($ForceStatus)
 * @method boolean getForceStatus()
 */
final class ScaleInApplication extends EdasCommon
{
    public $action = 'ScaleInApplication';
}
