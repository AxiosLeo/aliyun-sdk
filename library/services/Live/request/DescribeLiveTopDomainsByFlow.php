<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setLimit($Limit)
 * @method integer getLimit()
 */
final class DescribeLiveTopDomainsByFlow extends LiveCommon
{
    public $action = 'DescribeLiveTopDomainsByFlow';
}
