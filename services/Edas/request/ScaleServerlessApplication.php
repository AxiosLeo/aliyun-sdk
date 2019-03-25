<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setReplicas($Replicas)
 * @method integer getReplicas()
 */
final class ScaleServerlessApplication extends EdasCommon
{
    public $action = 'ScaleServerlessApplication';
}
