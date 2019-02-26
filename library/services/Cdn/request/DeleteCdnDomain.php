<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 */
final class DeleteCdnDomain extends CdnCommon
{
    public $action = 'DeleteCdnDomain';
}
