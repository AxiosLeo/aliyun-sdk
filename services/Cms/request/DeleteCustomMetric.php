<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setMetricName($MetricName)
 * @method string getMetricName()
 * @method $this setMd5($Md5)
 * @method string getMd5()
 * @method $this setUUID($UUID)
 * @method string getUUID()
 */
final class DeleteCustomMetric extends CmsCommon
{
    public $action = 'DeleteCustomMetric';
}
