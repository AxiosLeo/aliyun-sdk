<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($BandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setIpCount($IpCount)
 * @method string getIpCount()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class AddBandwidthPackageIps extends EcsCommon
{
    public $action = 'AddBandwidthPackageIps';
}
