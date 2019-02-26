<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTargetNetworkType($TargetNetworkType)
 * @method string getTargetNetworkType()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setRetainClassic($RetainClassic)
 * @method string getRetainClassic()
 * @method $this setClassicExpiredDays($ClassicExpiredDays)
 * @method string getClassicExpiredDays()
 */
final class SwitchNetwork extends RKvstoreCommon
{
    public $action = 'SwitchNetwork';
}
