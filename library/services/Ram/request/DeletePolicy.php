<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setPolicyName($PolicyName)
 * @method string getPolicyName()
 */
final class DeletePolicy extends RamCommon
{
    public $action = 'DeletePolicy';
}
