<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($BandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setBandwidth($Bandwidth)
 * @method string getBandwidth()
 */
final class ModifyCommonBandwidthPackageSpec extends VpcCommon
{
    public $action = 'ModifyCommonBandwidthPackageSpec';
}
