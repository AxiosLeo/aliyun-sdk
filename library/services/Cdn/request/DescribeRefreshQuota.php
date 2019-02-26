<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 */
final class DescribeRefreshQuota extends CdnCommon
{
    public $action = 'DescribeRefreshQuota';
}
