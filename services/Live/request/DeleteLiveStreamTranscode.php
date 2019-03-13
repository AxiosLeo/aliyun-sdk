<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomain($Domain)
 * @method string getDomain()
 * @method $this setApp($App)
 * @method string getApp()
 * @method $this setTemplate($Template)
 * @method string getTemplate()
 */
final class DeleteLiveStreamTranscode extends LiveCommon
{
    public $action = 'DeleteLiveStreamTranscode';
}
