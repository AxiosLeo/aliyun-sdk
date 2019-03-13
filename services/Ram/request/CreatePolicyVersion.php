<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setPolicyName($PolicyName)
 * @method string getPolicyName()
 * @method $this setPolicyDocument($PolicyDocument)
 * @method string getPolicyDocument()
 * @method $this setSetAsDefault($SetAsDefault)
 * @method boolean getSetAsDefault()
 */
final class CreatePolicyVersion extends RamCommon
{
    public $action = 'CreatePolicyVersion';
}
