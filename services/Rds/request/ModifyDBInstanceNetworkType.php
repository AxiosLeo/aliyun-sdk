<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setRetainClassic($RetainClassic)
 * @method string getRetainClassic()
 * @method $this setClassicExpiredDays($ClassicExpiredDays)
 * @method string getClassicExpiredDays()
 * @method $this setInstanceNetworkType($InstanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setReadWriteSplittingClassicExpiredDays($ReadWriteSplittingClassicExpiredDays)
 * @method integer getReadWriteSplittingClassicExpiredDays()
 * @method $this setVPCId($VPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($PrivateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setReadWriteSplittingPrivateIpAddress($ReadWriteSplittingPrivateIpAddress)
 * @method string getReadWriteSplittingPrivateIpAddress()
 */
final class ModifyDBInstanceNetworkType extends RdsCommon
{
    public $action = 'ModifyDBInstanceNetworkType';
}
