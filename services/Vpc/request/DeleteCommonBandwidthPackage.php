<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setForce($Force)
 * @method string getForce()
 * @method $this setBandwidthPackageId($BandwidthPackageId)
 * @method string getBandwidthPackageId()
 */
final class DeleteCommonBandwidthPackage extends VpcCommon
{
    public $action = 'DeleteCommonBandwidthPackage';
}
