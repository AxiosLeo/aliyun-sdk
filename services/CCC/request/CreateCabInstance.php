<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceName($InstanceName)
 * @method string getInstanceName()
 * @method $this setInstanceDescription($InstanceDescription)
 * @method string getInstanceDescription()
 * @method $this setMaxConcurrentConversation($MaxConcurrentConversation)
 * @method integer getMaxConcurrentConversation()
 * @method $this setCallCenterInstanceId($CallCenterInstanceId)
 * @method string getCallCenterInstanceId()
 */
final class CreateCabInstance extends CCCCommon
{
    public $action = 'CreateCabInstance';
}
