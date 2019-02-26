<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setEngine($Engine)
 * @method string getEngine()
 * @method $this setEngineVersion($EngineVersion)
 * @method string getEngineVersion()
 * @method $this setMongos($Mongos)
 * @method array getMongos()
 * @method $this setReplicaSet($ReplicaSet)
 * @method array getReplicaSet()
 * @method $this setConfigServer($ConfigServer)
 * @method array getConfigServer()
 * @method $this setDBInstanceDescription($DBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($SecurityIPList)
 * @method string getSecurityIPList()
 * @method $this setAccountPassword($AccountPassword)
 * @method string getAccountPassword()
 * @method $this setChargeType($ChargeType)
 * @method string getChargeType()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setSrcDBInstanceId($SrcDBInstanceId)
 * @method string getSrcDBInstanceId()
 * @method $this setRestoreTime($RestoreTime)
 * @method string getRestoreTime()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setStorageEngine($StorageEngine)
 * @method string getStorageEngine()
 * @method $this setAutoRenew($AutoRenew)
 * @method string getAutoRenew()
 */
final class CreateShardingDBInstance extends DdsCommon
{
    public $action = 'CreateShardingDBInstance';
}
