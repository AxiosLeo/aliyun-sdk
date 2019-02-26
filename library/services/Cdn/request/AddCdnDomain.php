<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setCdnType($CdnType)
 * @method string getCdnType()
 * @method $this setTopLevelDomain($TopLevelDomain)
 * @method string getTopLevelDomain()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setSourceType($SourceType)
 * @method string getSourceType()
 * @method $this setSources($Sources)
 * @method string getSources()
 * @method $this setSourcePort($SourcePort)
 * @method integer getSourcePort()
 * @method $this setCheckUrl($CheckUrl)
 * @method string getCheckUrl()
 * @method $this setRegion($Region)
 * @method string getRegion()
 * @method $this setScope($Scope)
 * @method string getScope()
 * @method $this setPriorities($Priorities)
 * @method string getPriorities()
 */
final class AddCdnDomain extends CdnCommon
{
    public $action = 'AddCdnDomain';
}
