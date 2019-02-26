<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setGuestUserId($GuestUserId)
 * @method string getGuestUserId()
 * @method $this setMSG($MSG)
 * @method string getMSG()
 * @method $this setShareVersion($ShareVersion)
 * @method integer getShareVersion()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAppKey($AppKey)
 * @method string getAppKey()
 * @method $this setOsType($OsType)
 * @method string getOsType()
 * @method $this setAppVersion($AppVersion)
 * @method string getAppVersion()
 * @method $this setSignatureType($SignatureType)
 * @method string getSignatureType()
 */
final class ShareGuestSendMessageUrl extends ITaaSCommon
{
    public $action = 'ShareGuestSendMessageUrl';
}
