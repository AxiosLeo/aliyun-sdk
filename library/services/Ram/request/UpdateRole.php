<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setRoleName($RoleName)
 * @method string getRoleName()
 * @method $this setNewAssumeRolePolicyDocument($NewAssumeRolePolicyDocument)
 * @method string getNewAssumeRolePolicyDocument()
 */
final class UpdateRole extends RamCommon
{
    public $action = 'UpdateRole';
}
