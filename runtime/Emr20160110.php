<?php

namespace aliyun\sdk\services\Emr20160110;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160110
 *
 * @package aliyun\sdk\services\Emr20160110
 * @method CreateCluster CreateCluster()
 * @method DeleteExecutionPlan DeleteExecutionPlan()
 * @method ModifyExecutionPlan ModifyExecutionPlan()
 * @method DescribeCluster DescribeCluster()
 * @method JobResource JobResource()
 * @method ResizeCluster ResizeCluster()
 * @method GetClusterStatus GetClusterStatus()
 * @method DescribeJob DescribeJob()
 * @method ReleaseCluster ReleaseCluster()
 * @method ListExecutionPlans ListExecutionPlans()
 * @method ListAvailableConfig ListAvailableConfig()
 * @method ResumeExecutionPlanScheduler ResumeExecutionPlanScheduler()
 * @method QueryPrice QueryPrice()
 * @method SuspendExecutionPlanScheduler SuspendExecutionPlanScheduler()
 * @method ListExecutionPlanInstances ListExecutionPlanInstances()
 * @method DeleteJob DeleteJob()
 * @method ModifyJob ModifyJob()
 * @method CreateJob CreateJob()
 * @method ListClusterAssociatedExecutionPlans ListClusterAssociatedExecutionPlans()
 * @method ListJobExecutionInstances ListJobExecutionInstances()
 * @method KillExecutionJobInstance KillExecutionJobInstance()
 * @method DescribeExecutionPlan DescribeExecutionPlan()
 * @method ListJobs ListJobs()
 * @method RunExecutionPlan RunExecutionPlan()
 * @method ListJobInstanceWorkers ListJobInstanceWorkers()
 * @method ListClusters ListClusters()
 * @method ListRegions ListRegions()
 * @method ModifyClusterName ModifyClusterName()
 * @method CreateExecutionPlan CreateExecutionPlan()
 * @method ModifyExecutionPlanWithCluster ModifyExecutionPlanWithCluster()
 */
class V20160110
{
}

/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setLogEnable($logEnable)
 * @method bool getLogEnable()
 * @method $this setLogPath($logPath)
 * @method string getLogPath()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setIsOpenPublicIp($isOpenPublicIp)
 * @method bool getIsOpenPublicIp()
 * @method $this setSecurityGroupName($securityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setEmrVer($emrVer)
 * @method string getEmrVer()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setMasterPwdEnable($masterPwdEnable)
 * @method bool getMasterPwdEnable()
 * @method $this setMasterPwd($masterPwd)
 * @method string getMasterPwd()
 * @method $this setEcsOrder($ecsOrder)
 * @method array getEcsOrder()
 */
class CreateCluster extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DeleteExecutionPlan extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClusterName($clusterName)
 * @method string getClusterName()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setLogEnable($logEnable)
 * @method bool getLogEnable()
 * @method $this setLogPath($logPath)
 * @method string getLogPath()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setIsOpenPublicIp($isOpenPublicIp)
 * @method bool getIsOpenPublicIp()
 * @method $this setCreateClusterOnDemand($createClusterOnDemand)
 * @method bool getCreateClusterOnDemand()
 * @method $this setEmrVer($emrVer)
 * @method string getEmrVer()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setEcsOrder($ecsOrder)
 * @method array getEcsOrder()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStrategy($strategy)
 * @method string getStrategy()
 * @method $this setTimeInterval($timeInterval)
 * @method int getTimeInterval()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setTimeUnit($timeUnit)
 * @method string getTimeUnit()
 * @method $this setJobIdList($jobIdList)
 * @method array getJobIdList()
 */
class ModifyExecutionPlan extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeCluster extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 * @method $this setPath($path)
 * @method string getPath()
 */
class JobResource extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setNewMasterInstances($newMasterInstances)
 * @method int getNewMasterInstances()
 * @method $this setNewCoreInstances($newCoreInstances)
 * @method int getNewCoreInstances()
 * @method $this setNewTaskInstances($newTaskInstances)
 * @method int getNewTaskInstances()
 */
class ResizeCluster extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setItemType($itemType)
 * @method string getItemType()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class GetClusterStatus extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeJob extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setForceRelease($forceRelease)
 * @method bool getForceRelease()
 */
class ReleaseCluster extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 * @method $this setStrategy($strategy)
 * @method string getStrategy()
 * @method $this setStatusList($statusList)
 * @method array getStatusList()
 * @method $this setIsDesc($isDesc)
 * @method bool getIsDesc()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListExecutionPlans extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ListAvailableConfig extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class ResumeExecutionPlanScheduler extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setMasterInstanceType($masterInstanceType)
 * @method string getMasterInstanceType()
 * @method $this setCoreInstanceType($coreInstanceType)
 * @method string getCoreInstanceType()
 * @method $this setTaskInstanceType($taskInstanceType)
 * @method string getTaskInstanceType()
 * @method $this setMasterInstanceQuantity($masterInstanceQuantity)
 * @method int getMasterInstanceQuantity()
 * @method $this setCoreInstanceQuantity($coreInstanceQuantity)
 * @method int getCoreInstanceQuantity()
 * @method $this setTaskInstanceQuantity($taskInstanceQuantity)
 * @method int getTaskInstanceQuantity()
 * @method $this setMasterDiskType($masterDiskType)
 * @method string getMasterDiskType()
 * @method $this setCoreDiskType($coreDiskType)
 * @method string getCoreDiskType()
 * @method $this setTaskDiskType($taskDiskType)
 * @method string getTaskDiskType()
 * @method $this setMasterDiskQuantity($masterDiskQuantity)
 * @method int getMasterDiskQuantity()
 * @method $this setCoreDiskQuantity($coreDiskQuantity)
 * @method int getCoreDiskQuantity()
 * @method $this setTaskDiskQuantity($taskDiskQuantity)
 * @method int getTaskDiskQuantity()
 * @method $this setDuration($duration)
 * @method int getDuration()
 */
class QueryPrice extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class SuspendExecutionPlanScheduler extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setExecutionPlanIdList($executionPlanIdList)
 * @method array getExecutionPlanIdList()
 * @method $this setOnlyLastInstance($onlyLastInstance)
 * @method bool getOnlyLastInstance()
 * @method $this setStatusList($statusList)
 * @method array getStatusList()
 * @method $this setIsDesc($isDesc)
 * @method bool getIsDesc()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListExecutionPlanInstances extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DeleteJob extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setRunParameter($runParameter)
 * @method string getRunParameter()
 * @method $this setFailAct($failAct)
 * @method string getFailAct()
 */
class ModifyJob extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setRunParameter($runParameter)
 * @method string getRunParameter()
 * @method $this setFailAct($failAct)
 * @method string getFailAct()
 */
class CreateJob extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class ListClusterAssociatedExecutionPlans extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setExecutionPlanInstanceId($executionPlanInstanceId)
 * @method string getExecutionPlanInstanceId()
 * @method $this setIsDesc($isDesc)
 * @method bool getIsDesc()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListJobExecutionInstances extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setJobInstanceId($jobInstanceId)
 * @method string getJobInstanceId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class KillExecutionJobInstance extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeExecutionPlan extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIsDesc($isDesc)
 * @method bool getIsDesc()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListJobs extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class RunExecutionPlan extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setJobInstanceId($jobInstanceId)
 * @method string getJobInstanceId()
 */
class ListJobInstanceWorkers extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterTypeList($clusterTypeList)
 * @method array getClusterTypeList()
 * @method $this setCreateType($createType)
 * @method string getCreateType()
 * @method $this setStatusList($statusList)
 * @method array getStatusList()
 * @method $this setIsDesc($isDesc)
 * @method bool getIsDesc()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusters extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class ListRegions extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
 */
class ModifyClusterName extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStrategy($strategy)
 * @method string getStrategy()
 * @method $this setTimeInterval($timeInterval)
 * @method int getTimeInterval()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setTimeUnit($timeUnit)
 * @method string getTimeUnit()
 * @method $this setJobIdList($jobIdList)
 * @method array getJobIdList()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setCreateClusterOnDemand($createClusterOnDemand)
 * @method bool getCreateClusterOnDemand()
 * @method $this setClusterName($clusterName)
 * @method string getClusterName()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setLogEnable($logEnable)
 * @method bool getLogEnable()
 * @method $this setLogPath($logPath)
 * @method string getLogPath()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setIsOpenPublicIp($isOpenPublicIp)
 * @method bool getIsOpenPublicIp()
 * @method $this setEmrVer($emrVer)
 * @method string getEmrVer()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setEcsOrder($ecsOrder)
 * @method array getEcsOrder()
 */
class CreateExecutionPlan extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClusterName($clusterName)
 * @method string getClusterName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setLogEnable($logEnable)
 * @method bool getLogEnable()
 * @method $this setLogPath($logPath)
 * @method string getLogPath()
 * @method $this setsecurityGroupId($securityGroupId)
 * @method string getsecurityGroupId()
 * @method $this setIsOpenPublicIp($isOpenPublicIp)
 * @method bool getIsOpenPublicIp()
 * @method $this setSecurityGroupName($securityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setEmrVer($emrVer)
 * @method string getEmrVer()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setInstall($install)
 * @method array getInstall()
 * @method $this setMasterIndex($masterIndex)
 * @method int getMasterIndex()
 * @method $this setEcsOrder($ecsOrder)
 * @method array getEcsOrder()
 * @method $this setUserDefinedRole($userDefinedRole)
 * @method string getUserDefinedRole()
 * @method $this setUserDefaultRAM($userDefaultRAM)
 * @method bool getUserDefaultRAM()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStrategy($strategy)
 * @method string getStrategy()
 * @method $this setTimeInterval($timeInterval)
 * @method int getTimeInterval()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setTimeUnit($timeUnit)
 * @method string getTimeUnit()
 * @method $this setJobIdList($jobIdList)
 * @method array getJobIdList()
 */
class ModifyExecutionPlanWithCluster extends Request
{
}
