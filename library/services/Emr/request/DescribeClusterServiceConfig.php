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
 * @method $this setServiceName($ServiceName)
 * @method string getServiceName()
 * @method $this setConfigVersion($ConfigVersion)
 * @method string getConfigVersion()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setHostInstanceId($HostInstanceId)
 * @method string getHostInstanceId()
 * @method $this setTagValue($TagValue)
 * @method string getTagValue()
 */
final class DescribeClusterServiceConfig extends EmrCommon
{
    public $action = 'DescribeClusterServiceConfig';
}
