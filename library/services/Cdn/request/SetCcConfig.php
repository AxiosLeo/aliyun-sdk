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
 * @method $this setBlockIps($BlockIps)
 * @method string getBlockIps()
 */
final class SetCcConfig extends CdnCommon
{
    public $action = 'SetCcConfig';
}
