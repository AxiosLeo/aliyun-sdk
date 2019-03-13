<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 */
final class DescribeDomainSlowRatio extends CdnCommon
{
    public $action = 'DescribeDomainSlowRatio';
}
