<?php
namespace aliyun\sdk\services\Dm\request;

use aliyun\sdk\services\Dm\DmCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTotal($Total)
 * @method string getTotal()
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
 */
final class GetAccountList extends DmCommon
{
    public $action = 'GetAccountList';
}
