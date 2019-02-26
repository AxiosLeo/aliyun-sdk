<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setSources($Sources)
 * @method string getSources()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setTopLevelDomain($TopLevelDomain)
 * @method string getTopLevelDomain()
 */
final class UpdateVodDomain extends VodCommon
{
    public $action = 'UpdateVodDomain';
}
