<?php
namespace aliyun\sdk\services\Sts\request;

use aliyun\sdk\services\Sts\StsCommon;

/**
 * @method $this setDurationSeconds($DurationSeconds)
 * @method integer getDurationSeconds()
 * @method $this setPolicy($Policy)
 * @method string getPolicy()
 * @method $this setRoleArn($RoleArn)
 * @method string getRoleArn()
 * @method $this setRoleSessionName($RoleSessionName)
 * @method string getRoleSessionName()
 */
final class AssumeRole extends StsCommon
{
    public $action = 'AssumeRole';
}
