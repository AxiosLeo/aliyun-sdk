<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class JoinSecurityGroup extends EcsCommon
{
    public $action = 'JoinSecurityGroup';
}
