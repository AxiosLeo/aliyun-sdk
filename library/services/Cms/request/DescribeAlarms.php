<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setGroupBy($GroupBy)
 * @method string getGroupBy()
 * @method $this setMetricName($MetricName)
 * @method string getMetricName()
 * @method $this setEnableState($EnableState)
 * @method boolean getEnableState()
 * @method $this setNamespace($Namespace)
 * @method string getNamespace()
 * @method $this setPage($Page)
 * @method string getPage()
 * @method $this setPageSize($PageSize)
 * @method string getPageSize()
 * @method $this setAlertState($AlertState)
 * @method string getAlertState()
 * @method $this setDisplayName($DisplayName)
 * @method string getDisplayName()
 * @method $this setNames($Names)
 * @method string getNames()
 * @method $this setNameKeyword($NameKeyword)
 * @method string getNameKeyword()
 */
final class DescribeAlarms extends CmsCommon
{
    public $action = 'DescribeAlarms';
}
