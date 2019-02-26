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
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 * @method $this setInstanceStatus($InstanceStatus)
 * @method string getInstanceStatus()
 * @method $this setChargeType($ChargeType)
 * @method string getChargeType()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setEngineVersion($EngineVersion)
 * @method string getEngineVersion()
 * @method $this setInstanceClass($InstanceClass)
 * @method string getInstanceClass()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 * @method $this setSearchKey($SearchKey)
 * @method string getSearchKey()
 * @method $this setArchitectureType($ArchitectureType)
 * @method string getArchitectureType()
 * @method $this setExpired($Expired)
 * @method string getExpired()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 */
final class DescribeInstances extends RKvstoreCommon
{
    public $action = 'DescribeInstances';
}
