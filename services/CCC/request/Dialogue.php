<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setCallId($CallId)
 * @method string getCallId()
 * @method $this setCallType($CallType)
 * @method string getCallType()
 * @method $this setScenarioId($ScenarioId)
 * @method string getScenarioId()
 * @method $this setTaskId($TaskId)
 * @method string getTaskId()
 * @method $this setUtterance($Utterance)
 * @method string getUtterance()
 * @method $this setActionKey($ActionKey)
 * @method string getActionKey()
 * @method $this setActionParams($ActionParams)
 * @method string getActionParams()
 * @method $this setCallingNumber($CallingNumber)
 * @method string getCallingNumber()
 * @method $this setCalledNumber($CalledNumber)
 * @method string getCalledNumber()
 */
final class Dialogue extends CCCCommon
{
    public $action = 'Dialogue';
}
