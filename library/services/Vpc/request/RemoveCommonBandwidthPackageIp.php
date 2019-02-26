<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBandwidthPackageId($BandwidthPackageId)
 * @method string getBandwidthPackageId()
 * @method $this setIpInstanceId($IpInstanceId)
 * @method string getIpInstanceId()
 */
final class RemoveCommonBandwidthPackageIp extends VpcCommon
{
    public $action = 'RemoveCommonBandwidthPackageIp';
}
