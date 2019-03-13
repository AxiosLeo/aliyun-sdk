<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setUserCode($UserCode)
 * @method string getUserCode()
 * @method $this setAppUUID($AppUUID)
 * @method string getAppUUID()
 * @method $this setShareVersion($ShareVersion)
 * @method integer getShareVersion()
 * @method $this setAuthUri($AuthUri)
 * @method string getAuthUri()
 */
final class BoxLoginoutReport extends ITaaSCommon
{
    public $action = 'BoxLoginoutReport';
}
