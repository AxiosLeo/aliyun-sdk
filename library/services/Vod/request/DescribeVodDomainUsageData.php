<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setArea($Area)
 * @method string getArea()
 * @method $this setField($Field)
 * @method string getField()
 */
final class DescribeVodDomainUsageData extends VodCommon
{
    public $action = 'DescribeVodDomainUsageData';
}
