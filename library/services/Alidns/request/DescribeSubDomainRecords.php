<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setSubDomain($SubDomain)
 * @method string getSubDomain()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setLine($Line)
 * @method string getLine()
 */
final class DescribeSubDomainRecords extends AlidnsCommon
{
    public $action = 'DescribeSubDomainRecords';
}
