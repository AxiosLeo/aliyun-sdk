<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setDisplayName($DisplayName)
 * @method string getDisplayName()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setUserId($UserId)
 * @method string getUserId()
 * @method $this setPhone($Phone)
 * @method string getPhone()
 * @method $this setEmail($Email)
 * @method string getEmail()
 * @method $this setPrivateOutboundNumberId($PrivateOutboundNumberId)
 * @method string getPrivateOutboundNumberId()
 * @method $this setRoleId($RoleId)
 * @method array getRoleId()
 * @method $this setSkillGroupId($SkillGroupId)
 * @method array getSkillGroupId()
 * @method $this setSkillLevel($SkillLevel)
 * @method array getSkillLevel()
 */
final class ModifyUser extends CCCCommon
{
    public $action = 'ModifyUser';
}
