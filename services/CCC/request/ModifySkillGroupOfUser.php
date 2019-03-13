<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setUserId($UserId)
 * @method string getUserId()
 * @method $this setRoleId($RoleId)
 * @method array getRoleId()
 * @method $this setSkillGroupId($SkillGroupId)
 * @method array getSkillGroupId()
 * @method $this setSkillLevel($SkillLevel)
 * @method array getSkillLevel()
 */
final class ModifySkillGroupOfUser extends CCCCommon
{
    public $action = 'ModifySkillGroupOfUser';
}
