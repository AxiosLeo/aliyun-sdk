<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setKeyWord($KeyWord)
 * @method string getKeyWord()
 * @method $this setLength($Length)
 * @method integer getLength()
 * @method $this setNextStart($NextStart)
 * @method string getNextStart()
 */
final class QueryInvalidAddress extends DmCommon
{
    public $action = 'QueryInvalidAddress';
}
