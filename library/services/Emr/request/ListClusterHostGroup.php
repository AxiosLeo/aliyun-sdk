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
 * @method $this setHostGroupId($HostGroupId)
 * @method string getHostGroupId()
 * @method $this setHostGroupName($HostGroupName)
 * @method string getHostGroupName()
 * @method $this setHostGroupType($HostGroupType)
 * @method string getHostGroupType()
 * @method $this setStatusList($StatusList)
 * @method array getStatusList()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class ListClusterHostGroup extends EmrCommon
{
    public $action = 'ListClusterHostGroup';
}
