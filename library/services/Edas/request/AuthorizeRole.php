<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setTargetUserId($TargetUserId)
 * @method string getTargetUserId()
 * @method $this setRoleIds($RoleIds)
 * @method string getRoleIds()
 */
final class AuthorizeRole extends EdasCommon
{
    public $action = 'AuthorizeRole';
}
