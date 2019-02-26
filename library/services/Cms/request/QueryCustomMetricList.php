<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setMetricName($MetricName)
 * @method string getMetricName()
 * @method $this setDimension($Dimension)
 * @method string getDimension()
 * @method $this setMd5($Md5)
 * @method string getMd5()
 * @method $this setUUID($UUID)
 * @method string getUUID()
 * @method $this setPage($Page)
 * @method string getPage()
 * @method $this setSize($Size)
 * @method string getSize()
 */
final class QueryCustomMetricList extends CmsCommon
{
    public $action = 'QueryCustomMetricList';
}
