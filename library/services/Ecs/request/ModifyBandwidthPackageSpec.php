<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($BandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setBandwidth($Bandwidth)
 * @method string getBandwidth()
 */
final class ModifyBandwidthPackageSpec extends EcsCommon
{
    public $action = 'ModifyBandwidthPackageSpec';
}
