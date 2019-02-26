<?php
namespace aliyun\sdk\services\Httpdns\request;

use aliyun\sdk\services\Httpdns\HttpdnsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListDomains extends HttpdnsCommon
{
    public $action = 'ListDomains';
}
