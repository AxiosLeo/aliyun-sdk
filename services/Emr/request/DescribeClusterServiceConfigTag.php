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
 * @method $this setConfigTag($ConfigTag)
 * @method string getConfigTag()
 */
final class DescribeClusterServiceConfigTag extends EmrCommon
{
    public $action = 'DescribeClusterServiceConfigTag';
}
