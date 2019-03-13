<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setPolicyType($PolicyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($PolicyName)
 * @method string getPolicyName()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 */
final class DetachPolicyFromGroup extends RamCommon
{
    public $action = 'DetachPolicyFromGroup';
}
