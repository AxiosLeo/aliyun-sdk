<?php
namespace aliyun\sdk\services\Ess\request;

use aliyun\sdk\services\Ess\EssCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAlarmTaskId($AlarmTaskId)
 * @method string getAlarmTaskId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setAlarmAction($AlarmAction)
 * @method array getAlarmAction()
 * @method $this setMetricName($MetricName)
 * @method string getMetricName()
 * @method $this setMetricType($MetricType)
 * @method string getMetricType()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setStatistics($Statistics)
 * @method string getStatistics()
 * @method $this setThreshold($Threshold)
 * @method float getThreshold()
 * @method $this setComparisonOperator($ComparisonOperator)
 * @method string getComparisonOperator()
 * @method $this setEvaluationCount($EvaluationCount)
 * @method integer getEvaluationCount()
 * @method $this setGroupId($GroupId)
 * @method integer getGroupId()
 * @method $this setDimension($Dimension)
 * @method array getDimension()
 */
final class ModifyAlarm extends EssCommon
{
    public $action = 'ModifyAlarm';
}
