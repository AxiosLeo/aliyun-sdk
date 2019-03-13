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
 * @method $this setHostGroupName($HostGroupName)
 * @method string getHostGroupName()
 * @method $this setHostGroupType($HostGroupType)
 * @method string getHostGroupType()
 * @method $this setComment($Comment)
 * @method string getComment()
 */
final class CreateClusterHostGroup extends EmrCommon
{
    public $action = 'CreateClusterHostGroup';
}
