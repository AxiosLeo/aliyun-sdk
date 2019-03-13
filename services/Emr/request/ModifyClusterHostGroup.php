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
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setVswitchId($VswitchId)
 * @method string getVswitchId()
 * @method $this setComment($Comment)
 * @method string getComment()
 */
final class ModifyClusterHostGroup extends EmrCommon
{
    public $action = 'ModifyClusterHostGroup';
}
