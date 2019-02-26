<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setAlertName($AlertName)
 * @method string getAlertName()
 * @method $this setRuleName($RuleName)
 * @method string getRuleName()
 * @method $this setNamespace($Namespace)
 * @method string getNamespace()
 * @method $this setMetricName($MetricName)
 * @method string getMetricName()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setState($State)
 * @method string getState()
 * @method $this setAscending($Ascending)
 * @method boolean getAscending()
 * @method $this setOnlyCount($OnlyCount)
 * @method boolean getOnlyCount()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPage($Page)
 * @method integer getPage()
 */
final class DescribeAlarmHistory extends CmsCommon
{
    public $action = 'DescribeAlarmHistory';
}
