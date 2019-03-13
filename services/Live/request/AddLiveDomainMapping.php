<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setPushDomain($PushDomain)
 * @method string getPushDomain()
 * @method $this setPullDomain($PullDomain)
 * @method string getPullDomain()
 */
final class AddLiveDomainMapping extends LiveCommon
{
    public $action = 'AddLiveDomainMapping';
}
