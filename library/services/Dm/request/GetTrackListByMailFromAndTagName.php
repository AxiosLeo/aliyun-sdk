<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setTotal($Total)
 * @method string getTotal()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setOffset($Offset)
 * @method string getOffset()
 * @method $this setPageSize($PageSize)
 * @method string getPageSize()
 * @method $this setOffsetCreateTime($OffsetCreateTime)
 * @method string getOffsetCreateTime()
 * @method $this setOffsetCreateTimeDesc($OffsetCreateTimeDesc)
 * @method string getOffsetCreateTimeDesc()
 * @method $this setPageNumber($PageNumber)
 * @method string getPageNumber()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setTagName($TagName)
 * @method string getTagName()
 */
final class GetTrackListByMailFromAndTagName extends DmCommon
{
    public $action = 'GetTrackListByMailFromAndTagName';
}
