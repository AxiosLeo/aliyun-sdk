<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setStartTimeStamp($StartTimeStamp)
 * @method integer getStartTimeStamp()
 * @method $this setEndTimeStamp($EndTimeStamp)
 * @method integer getEndTimeStamp()
 * @method $this setMetricName($MetricName)
 * @method string getMetricName()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setHostRole($HostRole)
 * @method string getHostRole()
 */
final class QuerySlsMetricData extends EmrCommon
{
    public $action = 'QuerySlsMetricData';
}
