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
 * @method $this setHostIdList($HostIdList)
 * @method array getHostIdList()
 */
final class RemoveClusterHosts extends EmrCommon
{
    public $action = 'RemoveClusterHosts';
}
