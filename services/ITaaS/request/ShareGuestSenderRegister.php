<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setSessionId($SessionId)
 * @method string getSessionId()
 * @method $this setScreenCode($ScreenCode)
 * @method string getScreenCode()
 * @method $this setMqEnable($MqEnable)
 * @method string getMqEnable()
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
 * @method $this setDeviceInfo($DeviceInfo)
 * @method string getDeviceInfo()
 * @method $this setSignatureType($SignatureType)
 * @method string getSignatureType()
 */
final class ShareGuestSenderRegister extends ITaaSCommon
{
    public $action = 'ShareGuestSenderRegister';
}
