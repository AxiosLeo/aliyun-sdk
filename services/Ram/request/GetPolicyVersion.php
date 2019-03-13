<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setPolicyType($PolicyType)
 * @method string getPolicyType()
 * @method $this setPolicyName($PolicyName)
 * @method string getPolicyName()
 * @method $this setVersionId($VersionId)
 * @method string getVersionId()
 */
final class GetPolicyVersion extends RamCommon
{
    public $action = 'GetPolicyVersion';
}
