<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($GlobalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setBandwidth($Bandwidth)
 * @method string getBandwidth()
 */
final class ModifyGlobalAccelerationInstanceSpec extends VpcCommon
{
    public $action = 'ModifyGlobalAccelerationInstanceSpec';
}
