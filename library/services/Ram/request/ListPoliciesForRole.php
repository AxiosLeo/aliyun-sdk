<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setRoleName($RoleName)
 * @method string getRoleName()
 */
final class ListPoliciesForRole extends RamCommon
{
    public $action = 'ListPoliciesForRole';
}
