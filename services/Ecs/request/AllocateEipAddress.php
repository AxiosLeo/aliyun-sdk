<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setBandwidth($Bandwidth)
 * @method string getBandwidth()
 * @method $this setISP($ISP)
 * @method string getISP()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class AllocateEipAddress extends EcsCommon
{
    public $action = 'AllocateEipAddress';
}
