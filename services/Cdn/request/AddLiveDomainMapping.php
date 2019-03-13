<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setPushDomain($PushDomain)
 * @method string getPushDomain()
 * @method $this setPullDomain($PullDomain)
 * @method string getPullDomain()
 */
final class AddLiveDomainMapping extends CdnCommon
{
    public $action = 'AddLiveDomainMapping';
}
