<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setCaller($Caller)
 * @method string getCaller()
 * @method $this setCalleeAgent($CalleeAgent)
 * @method string getCalleeAgent()
 * @method $this setCalleeCustomer($CalleeCustomer)
 * @method string getCalleeCustomer()
 */
final class TwoPartiesCall extends CCCCommon
{
    public $action = 'TwoPartiesCall';
}
