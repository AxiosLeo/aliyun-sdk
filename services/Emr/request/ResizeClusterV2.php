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
 * @method $this setVswitchId($VswitchId)
 * @method string getVswitchId()
 * @method $this setHostGroup($HostGroup)
 * @method array getHostGroup()
 */
final class ResizeClusterV2 extends EmrCommon
{
    public $action = 'ResizeClusterV2';
}
