<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPath($Path)
 * @method string getPath()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 */
final class DescribeDomainPathData extends CdnCommon
{
    public $action = 'DescribeDomainPathData';
}
