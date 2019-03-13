<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setToAddress($ToAddress)
 * @method string getToAddress()
 * @method $this setStatus($Status)
 * @method integer getStatus()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setTagName($TagName)
 * @method string getTagName()
 * @method $this setLength($Length)
 * @method integer getLength()
 * @method $this setNextStart($NextStart)
 * @method string getNextStart()
 */
final class SenderStatisticsDetailByParam extends DmCommon
{
    public $action = 'SenderStatisticsDetailByParam';
}
