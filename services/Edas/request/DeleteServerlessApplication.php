<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setAct($Act)
 * @method string getAct()
 */
final class DeleteServerlessApplication extends EdasCommon
{
    public $action = 'DeleteServerlessApplication';
}
