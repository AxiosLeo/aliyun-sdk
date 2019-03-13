<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainNames($DomainNames)
 * @method string getDomainNames()
 * @method $this setFunctions($Functions)
 * @method string getFunctions()
 */
final class BatchSetCdnDomainConfig extends CdnCommon
{
    public $action = 'BatchSetCdnDomainConfig';
}
