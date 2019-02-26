<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomain($Domain)
 * @method string getDomain()
 * @method $this setTemplate($Template)
 * @method string getTemplate()
 * @method $this setApp($App)
 * @method string getApp()
 */
final class DeleteLiveStreamTranscode extends CdnCommon
{
    public $action = 'DeleteLiveStreamTranscode';
}
