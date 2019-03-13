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
 * @method $this setPageNo($PageNo)
 * @method string getPageNo()
 * @method $this setKeyword($Keyword)
 * @method string getKeyword()
 * @method $this setNotifyUrl($NotifyUrl)
 * @method string getNotifyUrl()
 */
final class GetSenderAddressList extends DmCommon
{
    public $action = 'GetSenderAddressList';
}
