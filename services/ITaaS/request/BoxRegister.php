<?php
namespace aliyun\sdk\services\ITaaS\request;

use aliyun\sdk\services\ITaaS\ITaaSCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTS($TS)
 * @method string getTS()
 * @method $this setAccessToken($AccessToken)
 * @method string getAccessToken()
 * @method $this setClientAppid($ClientAppid)
 * @method string getClientAppid()
 * @method $this setMAC($MAC)
 * @method string getMAC()
 * @method $this setDrIp($DrIp)
 * @method string getDrIp()
 * @method $this setDrStatus($DrStatus)
 * @method string getDrStatus()
 * @method $this setAppUUID($AppUUID)
 * @method string getAppUUID()
 * @method $this setAuthenticationCode($AuthenticationCode)
 * @method string getAuthenticationCode()
 * @method $this setRegisterVersion($RegisterVersion)
 * @method integer getRegisterVersion()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 * @method $this setAuthRefreshTokenId($AuthRefreshTokenId)
 * @method string getAuthRefreshTokenId()
 */
final class BoxRegister extends ITaaSCommon
{
    public $action = 'BoxRegister';
}
