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
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceClass($DBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($DBInstanceStorage)
 * @method integer getDBInstanceStorage()
 * @method $this setEngineVersion($EngineVersion)
 * @method string getEngineVersion()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setDBInstanceDescription($DBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setInstanceNetworkType($InstanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setVPCId($VPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($PrivateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setCategory($Category)
 * @method string getCategory()
 * @method $this setDBInstanceStorageType($DBInstanceStorageType)
 * @method string getDBInstanceStorageType()
 */
final class CreateReadOnlyDBInstance extends RdsCommon
{
    public $action = 'CreateReadOnlyDBInstance';
}
