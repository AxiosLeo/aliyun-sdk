<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setType($Type)
 * @method string getType()
 */
final class UnbindK8sSlb extends EdasCommon
{
    public $action = 'UnbindK8sSlb';
}
