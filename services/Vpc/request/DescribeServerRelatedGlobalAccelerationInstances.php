<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setServerId($ServerId)
 * @method string getServerId()
 * @method $this setServerType($ServerType)
 * @method string getServerType()
 */
final class DescribeServerRelatedGlobalAccelerationInstances extends VpcCommon
{
    public $action = 'DescribeServerRelatedGlobalAccelerationInstances';
}
