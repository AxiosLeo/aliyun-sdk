<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProject($Project)
 * @method string getProject()
 * @method $this setMetric($Metric)
 * @method string getMetric()
 * @method $this setPeriod($Period)
 * @method string getPeriod()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setDimensions($Dimensions)
 * @method string getDimensions()
 * @method $this setPage($Page)
 * @method string getPage()
 * @method $this setCursor($Cursor)
 * @method string getCursor()
 * @method $this setLength($Length)
 * @method string getLength()
 * @method $this setExpress($Express)
 * @method string getExpress()
 */
final class QueryMetricList extends CmsCommon
{
    public $action = 'QueryMetricList';
}
