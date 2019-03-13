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
 * @method $this setLine($Line)
 * @method string getLine()
 * @method $this setDomainSwitch($DomainSwitch)
 * @method string getDomainSwitch()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 */
final class DescribeUpBpsPeakOfLine extends LiveCommon
{
    public $action = 'DescribeUpBpsPeakOfLine';
}
