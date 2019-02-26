<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setSecurityGroupName($SecurityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setIps($Ips)
 * @method string getIps()
 * @method $this setOperateMode($OperateMode)
 * @method string getOperateMode()
 */
final class SetAuditSecurityIp extends VodCommon
{
    public $action = 'SetAuditSecurityIp';
}
