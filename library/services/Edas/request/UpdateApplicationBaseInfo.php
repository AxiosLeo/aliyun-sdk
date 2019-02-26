<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setAppName($AppName)
 * @method string getAppName()
 * @method $this setdesc($desc)
 * @method string getdesc()
 */
final class UpdateApplicationBaseInfo extends EdasCommon
{
    public $action = 'UpdateApplicationBaseInfo';
}
