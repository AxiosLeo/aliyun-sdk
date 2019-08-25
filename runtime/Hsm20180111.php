<?php

namespace aliyun\sdk\services\Hsm20180111;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180111
 *
 * @package aliyun\sdk\services\Hsm20180111
 * @method ConfigNetwork ConfigNetwork()
 * @method DescribeInstances DescribeInstances()
 * @method ConfigWhiteList ConfigWhiteList()
 * @method ReleaseInstance ReleaseInstance()
 * @method CreateInstance CreateInstance()
 * @method DescribeRegions DescribeRegions()
 * @method ModifyInstance ModifyInstance()
 * @method RenewInstance RenewInstance()
 */
class V20180111
{
}

/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class ConfigNetwork extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setHsmStatus($hsmStatus)
 * @method int getHsmStatus()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeInstances extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setWhiteList($whiteList)
 * @method string getWhiteList()
 */
class ConfigWhiteList extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 */
class ReleaseInstance extends Request
{
}/**
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setPeriodUnit($periodUnit)
 * @method string getPeriodUnit()
 * @method $this setHsmDeviceType($hsmDeviceType)
 * @method string getHsmDeviceType()
 * @method $this setHsmOem($hsmOem)
 * @method string getHsmOem()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setQuantity($quantity)
 * @method int getQuantity()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 */
class CreateInstance extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class DescribeRegions extends Request
{
}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRemark($remark)
 * @method string getRemark()
 */
class ModifyInstance extends Request
{
}/**
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setPeriodUnit($periodUnit)
 * @method string getPeriodUnit()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method string getResourceOwnerId()
 */
class RenewInstance extends Request
{
}
