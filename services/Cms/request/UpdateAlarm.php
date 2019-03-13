<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setStatistics($Statistics)
 * @method string getStatistics()
 * @method $this setComparisonOperator($ComparisonOperator)
 * @method string getComparisonOperator()
 * @method $this setThreshold($Threshold)
 * @method string getThreshold()
 * @method $this setContactGroups($ContactGroups)
 * @method string getContactGroups()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 * @method $this setSilenceTime($SilenceTime)
 * @method integer getSilenceTime()
 * @method $this setEvaluationCount($EvaluationCount)
 * @method integer getEvaluationCount()
 * @method $this setNotifyType($NotifyType)
 * @method integer getNotifyType()
 * @method $this setWebhook($Webhook)
 * @method string getWebhook()
 */
final class UpdateAlarm extends CmsCommon
{
    public $action = 'UpdateAlarm';
}
