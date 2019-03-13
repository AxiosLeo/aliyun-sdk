<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setKeyword($Keyword)
 * @method string getKeyword()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setStartTimestamp($StartTimestamp)
 * @method integer getStartTimestamp()
 * @method $this setEndTimestamp($EndTimestamp)
 * @method integer getEndTimestamp()
 */
final class DescribeGtmLogs extends AlidnsCommon
{
    public $action = 'DescribeGtmLogs';
}
