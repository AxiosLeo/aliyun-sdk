<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSourceDBInstanceId($SourceDBInstanceId)
 * @method string getSourceDBInstanceId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setEngine($Engine)
 * @method string getEngine()
 * @method $this setEngineVersion($EngineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($DBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($DBInstanceStorage)
 * @method integer getDBInstanceStorage()
 * @method $this setSystemDBCharset($SystemDBCharset)
 * @method string getSystemDBCharset()
 * @method $this setDBInstanceNetType($DBInstanceNetType)
 * @method string getDBInstanceNetType()
 * @method $this setDBInstanceDescription($DBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($SecurityIPList)
 * @method string getSecurityIPList()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setInstanceNetworkType($InstanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setConnectionMode($ConnectionMode)
 * @method string getConnectionMode()
 * @method $this setVPCId($VPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($PrivateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setReplicaDescription($ReplicaDescription)
 * @method string getReplicaDescription()
 * @method $this setUsedTime($UsedTime)
 * @method string getUsedTime()
 * @method $this setPeriod($Period)
 * @method string getPeriod()
 * @method $this setReplicaMode($ReplicaMode)
 * @method string getReplicaMode()
 * @method $this setDomainMode($DomainMode)
 * @method string getDomainMode()
 */
final class CreateDBInstanceReplica extends RdsCommon
{
    public $action = 'CreateDBInstanceReplica';
}
