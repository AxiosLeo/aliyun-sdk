<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setIP($IP)
 * @method string getIP()
 */
final class DescribeIpInfo extends CdnCommon
{
    public $action = 'DescribeIpInfo';
}
