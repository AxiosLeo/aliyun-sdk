<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAuthType($AuthType)
 * @method string getAuthType()
 * @method $this setKey1($Key1)
 * @method string getKey1()
 * @method $this setKey2($Key2)
 * @method string getKey2()
 * @method $this setTimeOut($TimeOut)
 * @method string getTimeOut()
 * @method $this setAuthRemoteDesc($AuthRemoteDesc)
 * @method string getAuthRemoteDesc()
 */
final class SetReqAuthConfig extends CdnCommon
{
    public $action = 'SetReqAuthConfig';
}
