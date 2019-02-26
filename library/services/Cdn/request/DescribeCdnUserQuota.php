<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 */
final class DescribeCdnUserQuota extends CdnCommon
{
    public $action = 'DescribeCdnUserQuota';
}
