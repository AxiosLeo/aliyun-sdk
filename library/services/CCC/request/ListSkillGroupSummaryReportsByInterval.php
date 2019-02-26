<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupIds($SkillGroupIds)
 * @method string getSkillGroupIds()
 * @method $this setInterval($Interval)
 * @method string getInterval()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListSkillGroupSummaryReportsByInterval extends CCCCommon
{
    public $action = 'ListSkillGroupSummaryReportsByInterval';
}
