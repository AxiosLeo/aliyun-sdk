<?php
namespace aliyun\sdk\services\Httpdns\request;

use aliyun\sdk\services\Httpdns\HttpdnsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAccountId($AccountId)
 * @method string getAccountId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeDomains extends HttpdnsCommon
{
    public $action = 'DescribeDomains';
}
