<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setCacheType($CacheType)
 * @method string getCacheType()
 * @method $this setConfigID($ConfigID)
 * @method string getConfigID()
 */
final class DeleteCacheExpiredConfig extends CdnCommon
{
    public $action = 'DeleteCacheExpiredConfig';
}
