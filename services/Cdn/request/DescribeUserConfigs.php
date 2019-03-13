<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setConfig($Config)
 * @method string getConfig()
 */
final class DescribeUserConfigs extends CdnCommon
{
    public $action = 'DescribeUserConfigs';
}
