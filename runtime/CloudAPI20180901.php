<?php

namespace aliyun\sdk\services\CloudAPI20180901;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180901
 *
 * @package aliyun\sdk\services\CloudAPI20180901
 * @method ReportGroupStatus ReportGroupStatus()
 * @method LoadApiAuthorizations LoadApiAuthorizations()
 * @method ReportServerStatus ReportServerStatus()
 * @method LoadVpcAccess LoadVpcAccess()
 * @method LoadMarketSubscriptions LoadMarketSubscriptions()
 * @method LoadGroups LoadGroups()
 * @method LoadApis LoadApis()
 */
class V20180901
{
}

/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setReportTime($reportTime)
 * @method string getReportTime()
 * @method $this setReportInterval($reportInterval)
 * @method int getReportInterval()
 * @method $this setRps($rps)
 * @method int getRps()
 * @method $this setTotalRequests($totalRequests)
 * @method int getTotalRequests()
 * @method $this setTotalErrors($totalErrors)
 * @method int getTotalErrors()
 * @method $this setThroughputInbound($throughputInbound)
 * @method int getThroughputInbound()
 * @method $this setThroughputOutbound($throughputOutbound)
 * @method int getThroughputOutbound()
 * @method $this setErrors($errors)
 * @method string getErrors()
 * @method $this setExtension($extension)
 * @method string getExtension()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class ReportGroupStatus extends Request
{

}/**
 * @method $this setGroupIds($groupIds)
 * @method string getGroupIds()
 * @method $this setLastTimestamp($lastTimestamp)
 * @method int getLastTimestamp()
 * @method $this setIncludeDeleted($includeDeleted)
 * @method bool getIncludeDeleted()
 * @method $this setLastId($lastId)
 * @method int getLastId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class LoadApiAuthorizations extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstanceRunMode($instanceRunMode)
 * @method string getInstanceRunMode()
 * @method $this setEcsInstanceId($ecsInstanceId)
 * @method string getEcsInstanceId()
 * @method $this setReportTime($reportTime)
 * @method string getReportTime()
 * @method $this setReportInterval($reportInterval)
 * @method int getReportInterval()
 * @method $this setRps($rps)
 * @method int getRps()
 * @method $this setTotalRequests($totalRequests)
 * @method int getTotalRequests()
 * @method $this setTotalErrors($totalErrors)
 * @method int getTotalErrors()
 * @method $this setThroughputInbound($throughputInbound)
 * @method int getThroughputInbound()
 * @method $this setThroughputOutbound($throughputOutbound)
 * @method int getThroughputOutbound()
 * @method $this setErrors($errors)
 * @method string getErrors()
 * @method $this setSystemMetrics($systemMetrics)
 * @method string getSystemMetrics()
 * @method $this setExtension($extension)
 * @method string getExtension()
 * @method $this setImageVersion($imageVersion)
 * @method string getImageVersion()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIp($privateIp)
 * @method string getPrivateIp()
 */
class ReportServerStatus extends Request
{

}/**
 * @method $this setSourceVpcId($sourceVpcId)
 * @method string getSourceVpcId()
 * @method $this setTargetVpcId($targetVpcId)
 * @method string getTargetVpcId()
 * @method $this setTargetInstance($targetInstance)
 * @method string getTargetInstance()
 * @method $this setPort($port)
 * @method int getPort()
 */
class LoadVpcAccess extends Request
{

}/**
 * @method $this setLastTimestamp($lastTimestamp)
 * @method int getLastTimestamp()
 * @method $this setLastId($lastId)
 * @method int getLastId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class LoadMarketSubscriptions extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLastTimestamp($lastTimestamp)
 * @method int getLastTimestamp()
 * @method $this setIncludeDeleted($includeDeleted)
 * @method bool getIncludeDeleted()
 * @method $this setLastId($lastId)
 * @method string getLastId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class LoadGroups extends Request
{

}/**
 * @method $this setGroupIds($groupIds)
 * @method string getGroupIds()
 * @method $this setLastTimestamp($lastTimestamp)
 * @method int getLastTimestamp()
 * @method $this setIncludeDeleted($includeDeleted)
 * @method bool getIncludeDeleted()
 * @method $this setLastId($lastId)
 * @method string getLastId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class LoadApis extends Request
{

}