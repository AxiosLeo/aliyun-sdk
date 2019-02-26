<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAcid($Acid)
 * @method string getAcid()
 * @method $this setSkillGroupId($SkillGroupId)
 * @method string getSkillGroupId()
 * @method $this setContactType($ContactType)
 * @method integer getContactType()
 * @method $this setPhoneNumbers($PhoneNumbers)
 * @method string getPhoneNumbers()
 */
final class LaunchShortMessageAppraise extends CCCCommon
{
    public $action = 'LaunchShortMessageAppraise';
}
