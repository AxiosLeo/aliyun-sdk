<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($BandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setForce($Force)
 * @method boolean getForce()
 */
final class DeleteBandwidthPackage extends VpcCommon
{
    public $action = 'DeleteBandwidthPackage';
}
