<?php
namespace aliyun\sdk\services\CCC\request;

use aliyun\sdk\services\CCC\CCCCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($JobGroupId)
 * @method string getJobGroupId()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListBasicStatisticsReportSubItems extends CCCCommon
{
    public $action = 'ListBasicStatisticsReportSubItems';
}
