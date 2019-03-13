<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setPeriod($Period)
 * @method string getPeriod()
 * @method $this setNamespace($Namespace)
 * @method string getNamespace()
 * @method $this setMetricName($MetricName)
 * @method string getMetricName()
 * @method $this setDimensions($Dimensions)
 * @method string getDimensions()
 * @method $this setAlertName($AlertName)
 * @method string getAlertName()
 * @method $this setEvaluationCount($EvaluationCount)
 * @method integer getEvaluationCount()
 * @method $this setContactGroups($ContactGroups)
 * @method string getContactGroups()
 * @method $this setEffectiveInterval($EffectiveInterval)
 * @method string getEffectiveInterval()
 * @method $this setNoEffectiveInterval($NoEffectiveInterval)
 * @method string getNoEffectiveInterval()
 * @method $this setSilenceTime($SilenceTime)
 * @method integer getSilenceTime()
 * @method $this setWebhook($Webhook)
 * @method string getWebhook()
 * @method $this setDisplayName($DisplayName)
 * @method string getDisplayName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setResources($Resources)
 * @method string getResources()
 * @method $this setSubject($Subject)
 * @method string getSubject()
 * @method $this setLevel($Level)
 * @method integer getLevel()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setDeepDive($DeepDive)
 * @method string getDeepDive()
 * @method $this setStatistics($Statistics)
 * @method string getStatistics()
 * @method $this setComparisonOperator($ComparisonOperator)
 * @method string getComparisonOperator()
 * @method $this setThreshold($Threshold)
 * @method string getThreshold()
 * @method $this setFilter($Filter)
 * @method string getFilter()
 * @method $this setInterval($Interval)
 * @method string getInterval()
 */
final class PutMetricAlarm extends CmsCommon
{
    public $action = 'PutMetricAlarm';
}
