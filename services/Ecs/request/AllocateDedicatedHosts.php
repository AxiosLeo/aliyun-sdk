<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setDedicatedHostName($DedicatedHostName)
 * @method string getDedicatedHostName()
 * @method $this setDedicatedHostType($DedicatedHostType)
 * @method string getDedicatedHostType()
 * @method $this setActionOnMaintenance($ActionOnMaintenance)
 * @method string getActionOnMaintenance()
 * @method $this setNetworkAttributes_SlbUdpTimeout($NetworkAttributes_SlbUdpTimeout)
 * @method integer getNetworkAttributes_SlbUdpTimeout()
 * @method $this setNetworkAttributes_UdpTimeout($NetworkAttributes_UdpTimeout)
 * @method integer getNetworkAttributes_UdpTimeout()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setChargeType($ChargeType)
 * @method string getChargeType()
 * @method $this setQuantity($Quantity)
 * @method integer getQuantity()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setPeriodUnit($PeriodUnit)
 * @method string getPeriodUnit()
 * @method $this setAutoRenew($AutoRenew)
 * @method boolean getAutoRenew()
 * @method $this setAutoRenewPeriod($AutoRenewPeriod)
 * @method integer getAutoRenewPeriod()
 * @method $this setAutoReleaseTime($AutoReleaseTime)
 * @method string getAutoReleaseTime()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class AllocateDedicatedHosts extends EcsCommon
{
    public $action = 'AllocateDedicatedHosts';
}
