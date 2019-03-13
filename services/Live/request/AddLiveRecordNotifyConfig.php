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
 * @method $this setNeedStatusNotify($NeedStatusNotify)
 * @method boolean getNeedStatusNotify()
 * @method $this setOnDemandUrl($OnDemandUrl)
 * @method string getOnDemandUrl()
 */
final class AddLiveRecordNotifyConfig extends LiveCommon
{
    public $action = 'AddLiveRecordNotifyConfig';
}
