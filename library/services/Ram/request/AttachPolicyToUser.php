<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setPolicyType($PolicyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($PolicyName)
 * @method string getPolicyName()
 * @method $this setUserName($UserName)
 * @method string getUserName()
 */
final class AttachPolicyToUser extends RamCommon
{
    public $action = 'AttachPolicyToUser';
}
