<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setScenarioId($ScenarioId)
 * @method string getScenarioId()
 * @method $this setCallingNumber($CallingNumber)
 * @method array getCallingNumber()
 * @method $this setJobJson($JobJson)
 * @method string getJobJson()
 * @method $this setSelfHostedCallCenter($SelfHostedCallCenter)
 * @method boolean getSelfHostedCallCenter()
 */
final class StartJob extends CCCCommon
{
    public $action = 'StartJob';
}
