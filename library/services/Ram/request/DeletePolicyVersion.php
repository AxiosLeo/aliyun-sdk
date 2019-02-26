<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setPolicyName($PolicyName)
 * @method string getPolicyName()
 * @method $this setVersionId($VersionId)
 * @method string getVersionId()
 */
final class DeletePolicyVersion extends RamCommon
{
    public $action = 'DeletePolicyVersion';
}
