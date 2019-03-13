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
 * @method $this setToken($Token)
 * @method string getToken()
 * @method $this setInstanceName($InstanceName)
 * @method string getInstanceName()
 * @method $this setPassword($Password)
 * @method string getPassword()
 * @method $this setCapacity($Capacity)
 * @method integer getCapacity()
 * @method $this setInstanceClass($InstanceClass)
 * @method string getInstanceClass()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setConfig($Config)
 * @method string getConfig()
 * @method $this setChargeType($ChargeType)
 * @method string getChargeType()
 * @method $this setNodeType($NodeType)
 * @method string getNodeType()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setPeriod($Period)
 * @method string getPeriod()
 * @method $this setBusinessInfo($BusinessInfo)
 * @method string getBusinessInfo()
 * @method $this setCouponNo($CouponNo)
 * @method string getCouponNo()
 * @method $this setSrcDBInstanceId($SrcDBInstanceId)
 * @method string getSrcDBInstanceId()
 * @method $this setBackupId($BackupId)
 * @method string getBackupId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setEngineVersion($EngineVersion)
 * @method string getEngineVersion()
 * @method $this setPrivateIpAddress($PrivateIpAddress)
 * @method string getPrivateIpAddress()
 */
final class CreateInstance extends RKvstoreCommon
{
    public $action = 'CreateInstance';
}
