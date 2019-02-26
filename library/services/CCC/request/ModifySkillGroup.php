<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($SkillGroupId)
 * @method string getSkillGroupId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setOutboundPhoneNumberId($OutboundPhoneNumberId)
 * @method array getOutboundPhoneNumberId()
 * @method $this setUserId($UserId)
 * @method array getUserId()
 * @method $this setSkillLevel($SkillLevel)
 * @method array getSkillLevel()
 * @method $this setAllowPrivateOutboundNumber($AllowPrivateOutboundNumber)
 * @method boolean getAllowPrivateOutboundNumber()
 */
final class ModifySkillGroup extends CCCCommon
{
    public $action = 'ModifySkillGroup';
}
