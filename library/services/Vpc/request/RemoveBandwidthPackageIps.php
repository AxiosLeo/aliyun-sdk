<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

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
final class RemoveBandwidthPackageIps extends VpcCommon
{
    public $action = 'RemoveBandwidthPackageIps';
}
