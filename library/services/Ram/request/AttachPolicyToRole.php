<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setPolicyType($PolicyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($PolicyName)
 * @method string getPolicyName()
 * @method $this setRoleName($RoleName)
 * @method string getRoleName()
 */
final class AttachPolicyToRole extends RamCommon
{
    public $action = 'AttachPolicyToRole';
}
