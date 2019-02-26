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
 * @method $this setHostGroupId($HostGroupId)
 * @method string getHostGroupId()
 * @method $this setHostName($HostName)
 * @method string getHostName()
 * @method $this setPrivateIp($PrivateIp)
 * @method string getPrivateIp()
 * @method $this setPublicIp($PublicIp)
 * @method string getPublicIp()
 * @method $this setGroupType($GroupType)
 * @method string getGroupType()
 * @method $this setComponentName($ComponentName)
 * @method string getComponentName()
 * @method $this setStatusList($StatusList)
 * @method array getStatusList()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListClusterHost extends EmrCommon
{
    public $action = 'ListClusterHost';
}
