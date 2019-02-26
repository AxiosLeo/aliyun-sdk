<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setEcuInfo($EcuInfo)
 * @method string getEcuInfo()
 * @method $this setDeployGroup($DeployGroup)
 * @method string getDeployGroup()
 */
final class ScaleOutApplication extends EdasCommon
{
    public $action = 'ScaleOutApplication';
}
