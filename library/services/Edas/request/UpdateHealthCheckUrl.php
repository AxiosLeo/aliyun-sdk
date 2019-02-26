<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setAppId($AppId)
 * @method string getAppId()
 * @method $this sethcURL($hcURL)
 * @method string gethcURL()
 */
final class UpdateHealthCheckUrl extends EdasCommon
{
    public $action = 'UpdateHealthCheckUrl';
}
