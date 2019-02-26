<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setDBInstanceClass($DBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($DBInstanceStorage)
 * @method integer getDBInstanceStorage()
 * @method $this setDBInstanceDescription($DBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setDbNames($DbNames)
 * @method string getDbNames()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setInstanceNetworkType($InstanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBackupId($BackupId)
 * @method string getBackupId()
 * @method $this setRestoreTime($RestoreTime)
 * @method string getRestoreTime()
 * @method $this setVPCId($VPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($PrivateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setUsedTime($UsedTime)
 * @method string getUsedTime()
 * @method $this setPeriod($Period)
 * @method string getPeriod()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 */
final class CloneDBInstance extends RdsCommon
{
    public $action = 'CloneDBInstance';
}
