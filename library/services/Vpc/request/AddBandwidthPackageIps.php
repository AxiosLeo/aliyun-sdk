<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

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
final class AddBandwidthPackageIps extends VpcCommon
{
    public $action = 'AddBandwidthPackageIps';
}
