<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setAlertState($AlertState)
 * @method string getAlertState()
 * @method $this setMetricName($MetricName)
 * @method string getMetricName()
 * @method $this setEnableState($EnableState)
 * @method boolean getEnableState()
 * @method $this setNamespace($Namespace)
 * @method string getNamespace()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setPage($Page)
 * @method string getPage()
 * @method $this setPageSize($PageSize)
 * @method string getPageSize()
 * @method $this setDimensions($Dimensions)
 * @method string getDimensions()
 */
final class DescribeAlarmsForDimensions extends CmsCommon
{
    public $action = 'DescribeAlarmsForDimensions';
}
