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
 * @method $this setServiceCustomActionName($ServiceCustomActionName)
 * @method string getServiceCustomActionName()
 */
final class ListClusterServiceCustomActionSupportConfig extends EmrCommon
{
    public $action = 'ListClusterServiceCustomActionSupportConfig';
}
