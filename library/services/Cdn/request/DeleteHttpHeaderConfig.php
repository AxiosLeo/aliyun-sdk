<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setConfigID($ConfigID)
 * @method string getConfigID()
 */
final class DeleteHttpHeaderConfig extends CdnCommon
{
    public $action = 'DeleteHttpHeaderConfig';
}
