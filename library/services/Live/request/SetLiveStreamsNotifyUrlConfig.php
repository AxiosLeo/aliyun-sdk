<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setNotifyUrl($NotifyUrl)
 * @method string getNotifyUrl()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 * @method $this setAuthKey($AuthKey)
 * @method string getAuthKey()
 */
final class SetLiveStreamsNotifyUrlConfig extends LiveCommon
{
    public $action = 'SetLiveStreamsNotifyUrlConfig';
}
