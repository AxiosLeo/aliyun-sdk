<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($SkillGroupId)
 * @method string getSkillGroupId()
 * @method $this setUserId($UserId)
 * @method array getUserId()
 */
final class RemoveUsersFromSkillGroup extends CCCCommon
{
    public $action = 'RemoveUsersFromSkillGroup';
}
