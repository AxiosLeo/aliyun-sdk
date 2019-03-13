<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setUserRamId($UserRamId)
 * @method array getUserRamId()
 * @method $this setRoleId($RoleId)
 * @method array getRoleId()
 * @method $this setSkillGroupId($SkillGroupId)
 * @method array getSkillGroupId()
 * @method $this setSkillLevel($SkillLevel)
 * @method array getSkillLevel()
 */
final class AssignUsers extends CCCCommon
{
    public $action = 'AssignUsers';
}
