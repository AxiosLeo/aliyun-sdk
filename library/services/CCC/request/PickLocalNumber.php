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
 */
final class PickLocalNumber extends CCCCommon
{
    public $action = 'PickLocalNumber';
}
