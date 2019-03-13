<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setTagName($TagName)
 * @method string getTagName()
 */
final class SenderStatisticsByTagNameAndBatchID extends DmCommon
{
    public $action = 'SenderStatisticsByTagNameAndBatchID';
}
