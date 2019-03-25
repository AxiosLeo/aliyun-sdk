<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setCalleeNumber($CalleeNumber)
 * @method string getCalleeNumber()
 * @method $this setServiceTag($ServiceTag)
 * @method array getServiceTag()
 * @method $this setSkillGroupId($SkillGroupId)
 * @method array getSkillGroupId()
 * @method $this setCount($Count)
 * @method integer getCount()
 * @method $this setPrioritizedCallerArea($PrioritizedCallerArea)
 * @method array getPrioritizedCallerArea()
 */
final class PickOutboundNumbersByTags extends CCCCommon
{
    public $action = 'PickOutboundNumbersByTags';
}
