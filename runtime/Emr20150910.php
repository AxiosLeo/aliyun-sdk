<?php

namespace aliyun\sdk\services\Emr20150910;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150910
 *
 * @package aliyun\sdk\services\Emr20150910
 * @method DeleteExecutePlan DeleteExecutePlan()
 * @method CreateCluster CreateCluster()
 * @method ModifyExecutePlanWithCluster ModifyExecutePlanWithCluster()
 * @method ModifyExecutePlan ModifyExecutePlan()
 * @method ListCluster ListCluster()
 * @method CreateExecutePlanWithCluster CreateExecutePlanWithCluster()
 * @method DescribeCluster DescribeCluster()
 * @method JobResource JobResource()
 * @method DescribeJob DescribeJob()
 * @method ReleaseCluster ReleaseCluster()
 * @method DescribeExecutePlan DescribeExecutePlan()
 * @method KillExecutePlanRecordNode KillExecutePlanRecordNode()
 * @method ResumeExecutePlan ResumeExecutePlan()
 * @method ListExecutePlans ListExecutePlans()
 * @method ListExecutePlanExecuteRecords ListExecutePlanExecuteRecords()
 * @method ListConfigType ListConfigType()
 * @method DeleteJob DeleteJob()
 * @method ModifyJob ModifyJob()
 * @method CreateJob CreateJob()
 * @method ListExecutePlanExecuteRecordNodes ListExecutePlanExecuteRecordNodes()
 * @method ListExecutePlanNodeInstances ListExecutePlanNodeInstances()
 * @method RunExecutePlan RunExecutePlan()
 * @method ListJobs ListJobs()
 * @method ListClusters ListClusters()
 * @method ListRegions ListRegions()
 * @method ListExecutePlanJobs ListExecutePlanJobs()
 * @method StopExecutePlan StopExecutePlan()
 * @method CreateExecutePlan CreateExecutePlan()
 * @method ModifyClusterName ModifyClusterName()
 */
class V20150910
{
}

/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method int getId()
 */
class DeleteExecutePlan extends Request
{
}/**
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
 * @method $this setSecurityGroup($securityGroup)
 * @method string getSecurityGroup()
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
 * @method $this setMasterPwdEnable($masterPwdEnable)
 * @method bool getMasterPwdEnable()
 * @method $this setMasterPwd($masterPwd)
 * @method string getMasterPwd()
 * @method $this setEcsOrder($ecsOrder)
 * @method array getEcsOrder()
 * @method $this setPayType($payType)
 * @method int getPayType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setEmrRole4ECS($emrRole4ECS)
 * @method string getEmrRole4ECS()
 * @method $this setEmrRole4Oss($emrRole4Oss)
 * @method string getEmrRole4Oss()
 * @method $this setUserDefaultRAM($userDefaultRAM)
 * @method bool getUserDefaultRAM()
 */
class CreateCluster extends Request
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
 * @method $this setSecurityGroup($securityGroup)
 * @method string getSecurityGroup()
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
 * @method $this setEmrRole4ECS($emrRole4ECS)
 * @method string getEmrRole4ECS()
 * @method $this setEmrRole4Oss($emrRole4Oss)
 * @method string getEmrRole4Oss()
 * @method $this setUserDefaultRAM($userDefaultRAM)
 * @method bool getUserDefaultRAM()
 * @method $this setPayType($payType)
 * @method int getPayType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setExecutePlanId($executePlanId)
 * @method int getExecutePlanId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStrategy($strategy)
 * @method int getStrategy()
 * @method $this setTimeInterval($timeInterval)
 * @method int getTimeInterval()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setTimeUnit($timeUnit)
 * @method string getTimeUnit()
 * @method $this setJobId($jobId)
 * @method array getJobId()
 */
class ModifyExecutePlanWithCluster extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method int getClusterId()
 * @method $this setExecutePlanId($executePlanId)
 * @method int getExecutePlanId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStrategy($strategy)
 * @method int getStrategy()
 * @method $this setTimeInterval($timeInterval)
 * @method int getTimeInterval()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setTimeUnit($timeUnit)
 * @method string getTimeUnit()
 * @method $this setJobId($jobId)
 * @method array getJobId()
 */
class ModifyExecutePlan extends Request
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
 * @method $this setDefaultStatus($defaultStatus)
 * @method bool getDefaultStatus()
 */
class ListCluster extends Request
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
 * @method $this setSecurityGroup($securityGroup)
 * @method string getSecurityGroup()
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
 * @method $this setEmrRole4ECS($emrRole4ECS)
 * @method string getEmrRole4ECS()
 * @method $this setEmrRole4Oss($emrRole4Oss)
 * @method string getEmrRole4Oss()
 * @method $this setUserDefaultRAM($userDefaultRAM)
 * @method bool getUserDefaultRAM()
 * @method $this setPayType($payType)
 * @method int getPayType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStrategy($strategy)
 * @method int getStrategy()
 * @method $this setTimeInterval($timeInterval)
 * @method int getTimeInterval()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setTimeUnit($timeUnit)
 * @method string getTimeUnit()
 * @method $this setJobId($jobId)
 * @method array getJobId()
 */
class CreateExecutePlanWithCluster extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method int getClusterId()
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
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method int getId()
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
 * @method $this setClusterId($clusterId)
 * @method int getClusterId()
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
 * @method $this setId($id)
 * @method int getId()
 */
class DescribeExecutePlan extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setExecutePlanRecordNodeId($executePlanRecordNodeId)
 * @method int getExecutePlanRecordNodeId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class KillExecutePlanRecordNode extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method int getId()
 */
class ResumeExecutePlan extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setStrategy($strategy)
 * @method int getStrategy()
 * @method $this setIsDesc($isDesc)
 * @method bool getIsDesc()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListExecutePlans extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setExecutePlanId($executePlanId)
 * @method int getExecutePlanId()
 * @method $this setIsDesc($isDesc)
 * @method bool getIsDesc()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListExecutePlanExecuteRecords extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ListConfigType extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DeleteJob extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setEnvParameter($envParameter)
 * @method string getEnvParameter()
 * @method $this setFailAct($failAct)
 * @method int getFailAct()
 */
class ModifyJob extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setJobName($jobName)
 * @method string getJobName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setJobType($jobType)
 * @method string getJobType()
 * @method $this setParameter($parameter)
 * @method string getParameter()
 * @method $this setJobFailAct($jobFailAct)
 * @method int getJobFailAct()
 */
class CreateJob extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setExecutePlanExecRecordId($executePlanExecRecordId)
 * @method int getExecutePlanExecRecordId()
 * @method $this setIsDesc($isDesc)
 * @method bool getIsDesc()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListExecutePlanExecuteRecordNodes extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setExecutePlanWorkNodeId($executePlanWorkNodeId)
 * @method int getExecutePlanWorkNodeId()
 */
class ListExecutePlanNodeInstances extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setExecutePlanId($executePlanId)
 * @method int getExecutePlanId()
 */
class RunExecutePlan extends Request
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
 * @method $this setDefaultStatus($defaultStatus)
 * @method bool getDefaultStatus()
 */
class ListClusters extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ListRegions extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setExecutePlanExecuteNodeId($executePlanExecuteNodeId)
 * @method string getExecutePlanExecuteNodeId()
 * @method $this setExecutePlanExecRecordId($executePlanExecRecordId)
 * @method string getExecutePlanExecRecordId()
 * @method $this setIsDesc($isDesc)
 * @method bool getIsDesc()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListExecutePlanJobs extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method int getId()
 */
class StopExecutePlan extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method int getClusterId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStrategy($strategy)
 * @method int getStrategy()
 * @method $this setTimeInterval($timeInterval)
 * @method int getTimeInterval()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setTimeUnit($timeUnit)
 * @method string getTimeUnit()
 * @method $this setJobId($jobId)
 * @method array getJobId()
 */
class CreateExecutePlan extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setClusterId($clusterId)
 * @method int getClusterId()
 * @method $this setClusterName($clusterName)
 * @method string getClusterName()
 */
class ModifyClusterName extends Request
{
}
