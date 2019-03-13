<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setRetainClassic($RetainClassic)
 * @method string getRetainClassic()
 * @method $this setClassicExpiredDays($ClassicExpiredDays)
 * @method integer getClassicExpiredDays()
 */
final class ModifyDBInstanceNetworkType extends DdsCommon
{
    public $action = 'ModifyDBInstanceNetworkType';
}
