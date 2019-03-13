<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($NotifyUrl)
 * @method string getNotifyUrl()
 */
final class AddLiveDetectNotifyConfig extends LiveCommon
{
    public $action = 'AddLiveDetectNotifyConfig';
}
