<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClusterId($ClusterId)
 * @method string getClusterId()
 * @method $this setHostInstanceId($HostInstanceId)
 * @method string getHostInstanceId()
 * @method $this setHostName($HostName)
 * @method string getHostName()
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 * @method $this setComponentName($ComponentName)
 * @method string getComponentName()
 * @method $this setComponentStatus($ComponentStatus)
 * @method string getComponentStatus()
 * @method $this setHostRole($HostRole)
 * @method string getHostRole()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListClusterHostComponent extends EmrCommon
{
    public $action = 'ListClusterHostComponent';
}
