<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setMAC($MAC)
 * @method string getMAC()
 * @method $this setDrIp($DrIp)
 * @method string getDrIp()
 * @method $this setDrStatus($DrStatus)
 * @method string getDrStatus()
 * @method $this setAppUUID($AppUUID)
 * @method string getAppUUID()
 * @method $this setRegisterVersion($RegisterVersion)
 * @method integer getRegisterVersion()
 * @method $this setClientAppid($ClientAppid)
 * @method string getClientAppid()
 * @method $this setAuthTypeDefault($AuthTypeDefault)
 * @method string getAuthTypeDefault()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 */
final class BoxRegisterUpdate4Appkey extends ITaaSCommon
{
    public $action = 'BoxRegisterUpdate4Appkey';
}
