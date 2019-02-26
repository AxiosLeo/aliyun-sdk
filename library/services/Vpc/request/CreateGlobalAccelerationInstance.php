<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setServiceLocation($ServiceLocation)
 * @method string getServiceLocation()
 * @method $this setBandwidth($Bandwidth)
 * @method string getBandwidth()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 * @method $this setBandwidthType($BandwidthType)
 * @method string getBandwidthType()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class CreateGlobalAccelerationInstance extends VpcCommon
{
    public $action = 'CreateGlobalAccelerationInstance';
}
