<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setInternetMaxBandwidthOut($InternetMaxBandwidthOut)
 * @method integer getInternetMaxBandwidthOut()
 * @method $this setInternetMaxBandwidthIn($InternetMaxBandwidthIn)
 * @method integer getInternetMaxBandwidthIn()
 * @method $this setNetworkChargeType($NetworkChargeType)
 * @method string getNetworkChargeType()
 * @method $this setAllocatePublicIp($AllocatePublicIp)
 * @method boolean getAllocatePublicIp()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class ModifyInstanceNetworkSpec extends EcsCommon
{
    public $action = 'ModifyInstanceNetworkSpec';
}
