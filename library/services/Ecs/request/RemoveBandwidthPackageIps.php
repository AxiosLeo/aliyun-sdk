<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($BandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setRemovedIpAddresses($RemovedIpAddresses)
 * @method array getRemovedIpAddresses()
 */
final class RemoveBandwidthPackageIps extends EcsCommon
{
    public $action = 'RemoveBandwidthPackageIps';
}
