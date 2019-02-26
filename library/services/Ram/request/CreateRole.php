<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setRoleName($RoleName)
 * @method string getRoleName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setAssumeRolePolicyDocument($AssumeRolePolicyDocument)
 * @method string getAssumeRolePolicyDocument()
 */
final class CreateRole extends RamCommon
{
    public $action = 'CreateRole';
}
