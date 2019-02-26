<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setScreenCode($ScreenCode)
 * @method string getScreenCode()
 * @method $this setShareVersion($ShareVersion)
 * @method integer getShareVersion()
 * @method $this setTS($TS)
 * @method string getTS()
 * @method $this setAccessToken($AccessToken)
 * @method string getAccessToken()
 * @method $this setCid($Cid)
 * @method string getCid()
 * @method $this setUid($Uid)
 * @method integer getUid()
 * @method $this setUmid($Umid)
 * @method string getUmid()
 * @method $this setSid($Sid)
 * @method string getSid()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 */
final class ShareGetReceiverInfo extends ITaaSCommon
{
    public $action = 'ShareGetReceiverInfo';
}
