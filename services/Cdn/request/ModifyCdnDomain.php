<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setSourceType($SourceType)
 * @method string getSourceType()
 * @method $this setSourcePort($SourcePort)
 * @method integer getSourcePort()
 * @method $this setSources($Sources)
 * @method string getSources()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPriorities($Priorities)
 * @method string getPriorities()
 * @method $this setTopLevelDomain($TopLevelDomain)
 * @method string getTopLevelDomain()
 */
final class ModifyCdnDomain extends CdnCommon
{
    public $action = 'ModifyCdnDomain';
}
