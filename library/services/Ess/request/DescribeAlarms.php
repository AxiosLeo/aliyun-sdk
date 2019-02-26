<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setScalingGroupId($ScalingGroupId)
 * @method string getScalingGroupId()
 * @method $this setAlarmTaskId($AlarmTaskId)
 * @method string getAlarmTaskId()
 * @method $this setState($State)
 * @method string getState()
 * @method $this setIsEnable($IsEnable)
 * @method boolean getIsEnable()
 * @method $this setMetricType($MetricType)
 * @method string getMetricType()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 */
final class DescribeAlarms extends EssCommon
{
    public $action = 'DescribeAlarms';
}
