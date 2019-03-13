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
 * @method $this setCandidateNumber($CandidateNumber)
 * @method array getCandidateNumber()
 * @method $this setCount($Count)
 * @method integer getCount()
 */
final class PickOutboundNumbers extends CCCCommon
{
    public $action = 'PickOutboundNumbers';
}
