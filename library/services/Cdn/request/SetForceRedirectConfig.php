<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setRedirectType($RedirectType)
 * @method string getRedirectType()
 */
final class SetForceRedirectConfig extends CdnCommon
{
    public $action = 'SetForceRedirectConfig';
}
