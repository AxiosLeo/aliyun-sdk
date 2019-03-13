<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setAllowIps($AllowIps)
 * @method string getAllowIps()
 */
final class SetIpAllowListConfig extends CdnCommon
{
    public $action = 'SetIpAllowListConfig';
}
