<?php

namespace aliyun\sdk\services\EHPC20180412;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180412
 *
 * @package aliyun\sdk\services\EHPC20180412
 * @method ListClusterLogs ListClusterLogs()
 * @method DescribeImageGatewayConfig DescribeImageGatewayConfig()
 * @method ListAvailableEcsTypes ListAvailableEcsTypes()
 * @method RecoverCluster RecoverCluster()
 * @method DeleteJobTemplates DeleteJobTemplates()
 * @method RerunJobs RerunJobs()
 * @method CreateCluster CreateCluster()
 * @method DeleteCluster DeleteCluster()
 * @method RunCloudMetricProfiling RunCloudMetricProfiling()
 * @method ListUsers ListUsers()
 * @method UpgradeClient UpgradeClient()
 * @method ListClustersMeta ListClustersMeta()
 * @method DescribeImagePrice DescribeImagePrice()
 * @method ModifyClusterAttributes ModifyClusterAttributes()
 * @method DescribeImage DescribeImage()
 * @method UpdateClusterVolumes UpdateClusterVolumes()
 * @method CreateJobTemplate CreateJobTemplate()
 * @method ListVolumes ListVolumes()
 * @method ListInvocationStatus ListInvocationStatus()
 * @method PullImage PullImage()
 * @method DeleteQueue DeleteQueue()
 * @method GetClusterVolumes GetClusterVolumes()
 * @method DeleteContainerApps DeleteContainerApps()
 * @method AddQueue AddQueue()
 * @method DescribePrice DescribePrice()
 * @method StartNodes StartNodes()
 * @method SetQueue SetQueue()
 * @method DescribeContainerApp DescribeContainerApp()
 * @method ListNodes ListNodes()
 * @method DescribeCluster DescribeCluster()
 * @method ListCurrentClientVersion ListCurrentClientVersion()
 * @method SubmitJob SubmitJob()
 * @method ListInstalledSoftware ListInstalledSoftware()
 * @method StopCluster StopCluster()
 * @method ModifyVisualServicePasswd ModifyVisualServicePasswd()
 * @method AddLocalNodes AddLocalNodes()
 * @method DescribeAutoScaleConfig DescribeAutoScaleConfig()
 * @method ListJobTemplates ListJobTemplates()
 * @method DescribeJob DescribeJob()
 * @method CreateJobFile CreateJobFile()
 * @method GetVisualServiceStatus GetVisualServiceStatus()
 * @method ListFileSystemWithMountTargets ListFileSystemWithMountTargets()
 * @method UninstallSoftware UninstallSoftware()
 * @method GetCloudMetricLogs GetCloudMetricLogs()
 * @method GetAccountingReport GetAccountingReport()
 * @method ListSoftwares ListSoftwares()
 * @method AddUsers AddUsers()
 * @method ListCustomImages ListCustomImages()
 * @method ModifyImageGatewayConfig ModifyImageGatewayConfig()
 * @method ResetNodes ResetNodes()
 * @method SetJobUser SetJobUser()
 * @method ListCloudMetricProfilings ListCloudMetricProfilings()
 * @method ListNodesByQueue ListNodesByQueue()
 * @method AddContainerApp AddContainerApp()
 * @method StartVisualService StartVisualService()
 * @method DeleteUsers DeleteUsers()
 * @method ListAvailableFileSystemTypes ListAvailableFileSystemTypes()
 * @method ListImages ListImages()
 * @method ListQueues ListQueues()
 * @method DeleteJobs DeleteJobs()
 * @method DeleteNodes DeleteNodes()
 * @method ListCpfsFileSystems ListCpfsFileSystems()
 * @method SetAutoScaleConfig SetAutoScaleConfig()
 * @method DeleteImage DeleteImage()
 * @method EditJobTemplate EditJobTemplate()
 * @method ModifyContainerAppAttributes ModifyContainerAppAttributes()
 * @method StopNodes StopNodes()
 * @method AddNodes AddNodes()
 * @method ListContainerImages ListContainerImages()
 * @method GetCloudMetricProfiling GetCloudMetricProfiling()
 * @method InvokeShellCommand InvokeShellCommand()
 * @method ListPreferredEcsTypes ListPreferredEcsTypes()
 * @method GetHybridClusterConfig GetHybridClusterConfig()
 * @method GetAutoScaleConfig GetAutoScaleConfig()
 * @method ModifyUserGroups ModifyUserGroups()
 * @method CreateHybridCluster CreateHybridCluster()
 * @method StopVisualService StopVisualService()
 * @method ListJobs ListJobs()
 * @method StartCluster StartCluster()
 * @method ListInvocationResults ListInvocationResults()
 * @method InstallSoftware InstallSoftware()
 * @method ModifyUserPasswords ModifyUserPasswords()
 * @method ListClusters ListClusters()
 * @method ListRegions ListRegions()
 * @method ListCommands ListCommands()
 * @method ListContainerApps ListContainerApps()
 * @method ListNodesNoPaging ListNodesNoPaging()
 * @method StopJobs StopJobs()
 */
class V20180412
{
}

/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusterLogs extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeImageGatewayConfig extends Request
{

}/**
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setSpotStrategy($spotStrategy)
 * @method string getSpotStrategy()
 * @method $this setInstanceChargeType($instanceChargeType)
 * @method string getInstanceChargeType()
 */
class ListAvailableEcsTypes extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setOsTag($osTag)
 * @method string getOsTag()
 * @method $this setAccountType($accountType)
 * @method string getAccountType()
 * @method $this setSchedulerType($schedulerType)
 * @method string getSchedulerType()
 * @method $this setImageOwnerAlias($imageOwnerAlias)
 * @method string getImageOwnerAlias()
 * @method $this setImageId($imageId)
 * @method string getImageId()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 */
class RecoverCluster extends Request
{

}/**
 * @method $this setTemplates($templates)
 * @method string getTemplates()
 */
class DeleteJobTemplates extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setJobs($jobs)
 * @method string getJobs()
 */
class RerunJobs extends Request
{

}/**
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setEhpcVersion($ehpcVersion)
 * @method string getEhpcVersion()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setOsTag($osTag)
 * @method string getOsTag()
 * @method $this setAccountType($accountType)
 * @method string getAccountType()
 * @method $this setSchedulerType($schedulerType)
 * @method string getSchedulerType()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setSecurityGroupName($securityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setVolumeType($volumeType)
 * @method string getVolumeType()
 * @method $this setVolumeId($volumeId)
 * @method string getVolumeId()
 * @method $this setVolumeProtocol($volumeProtocol)
 * @method string getVolumeProtocol()
 * @method $this setVolumeMountpoint($volumeMountpoint)
 * @method string getVolumeMountpoint()
 * @method $this setRemoteDirectory($remoteDirectory)
 * @method string getRemoteDirectory()
 * @method $this setDeployMode($deployMode)
 * @method string getDeployMode()
 * @method $this setHaEnable($haEnable)
 * @method bool getHaEnable()
 * @method $this setEcsChargeType($ecsChargeType)
 * @method string getEcsChargeType()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setKeyPairName($keyPairName)
 * @method string getKeyPairName()
 * @method $this setImageOwnerAlias($imageOwnerAlias)
 * @method string getImageOwnerAlias()
 * @method $this setImageId($imageId)
 * @method string getImageId()
 * @method $this setEcsOrderManagerCount($ecsOrderManagerCount)
 * @method int getEcsOrderManagerCount()
 * @method $this setEcsOrderManagerInstanceType($ecsOrderManagerInstanceType)
 * @method string getEcsOrderManagerInstanceType()
 * @method $this setEcsOrderComputeCount($ecsOrderComputeCount)
 * @method int getEcsOrderComputeCount()
 * @method $this setEcsOrderComputeInstanceType($ecsOrderComputeInstanceType)
 * @method string getEcsOrderComputeInstanceType()
 * @method $this setEcsOrderLoginCount($ecsOrderLoginCount)
 * @method int getEcsOrderLoginCount()
 * @method $this setEcsOrderLoginInstanceType($ecsOrderLoginInstanceType)
 * @method string getEcsOrderLoginInstanceType()
 * @method $this setSccClusterId($sccClusterId)
 * @method string getSccClusterId()
 * @method $this setComputeSpotStrategy($computeSpotStrategy)
 * @method string getComputeSpotStrategy()
 * @method $this setComputeSpotPriceLimit($computeSpotPriceLimit)
 * @method string getComputeSpotPriceLimit()
 * @method $this setApplication($application)
 * @method array getApplication()
 * @method $this setAdditionalVolumes($additionalVolumes)
 * @method array getAdditionalVolumes()
 * @method $this setPostInstallScript($postInstallScript)
 * @method array getPostInstallScript()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setPeriodUnit($periodUnit)
 * @method string getPeriodUnit()
 * @method $this setAutoRenew($autoRenew)
 * @method string getAutoRenew()
 * @method $this setAutoRenewPeriod($autoRenewPeriod)
 * @method int getAutoRenewPeriod()
 * @method $this setInputFileUrl($inputFileUrl)
 * @method string getInputFileUrl()
 * @method $this setJobQueue($jobQueue)
 * @method string getJobQueue()
 * @method $this setSystemDiskSize($systemDiskSize)
 * @method int getSystemDiskSize()
 * @method $this setRemoteVisEnable($remoteVisEnable)
 * @method string getRemoteVisEnable()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class CreateCluster extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setReleaseInstance($releaseInstance)
 * @method string getReleaseInstance()
 */
class DeleteCluster extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setProcessId($processId)
 * @method int getProcessId()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setFreq($freq)
 * @method int getFreq()
 */
class RunCloudMetricProfiling extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListUsers extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 */
class UpgradeClient extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClustersMeta extends Request
{

}/**
 * @method $this setImageId($imageId)
 * @method string getImageId()
 * @method $this setPriceUnit($priceUnit)
 * @method string getPriceUnit()
 * @method $this setSkuCode($skuCode)
 * @method string getSkuCode()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setAmount($amount)
 * @method int getAmount()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 */
class DescribeImagePrice extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyClusterAttributes extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRepository($repository)
 * @method string getRepository()
 * @method $this setImageTag($imageTag)
 * @method string getImageTag()
 * @method $this setContainerType($containerType)
 * @method string getContainerType()
 */
class DescribeImage extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setAdditionalVolumes($additionalVolumes)
 * @method array getAdditionalVolumes()
 */
class UpdateClusterVolumes extends Request
{

}/**
 * @method $this setCommandLine($commandLine)
 * @method string getCommandLine()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRunasUser($runasUser)
 * @method string getRunasUser()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setPackagePath($packagePath)
 * @method string getPackagePath()
 * @method $this setStdoutRedirectPath($stdoutRedirectPath)
 * @method string getStdoutRedirectPath()
 * @method $this setStderrRedirectPath($stderrRedirectPath)
 * @method string getStderrRedirectPath()
 * @method $this setReRunable($reRunable)
 * @method bool getReRunable()
 * @method $this setArrayRequest($arrayRequest)
 * @method string getArrayRequest()
 * @method $this setVariables($variables)
 * @method string getVariables()
 */
class CreateJobTemplate extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListVolumes extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setCommandId($commandId)
 * @method string getCommandId()
 */
class ListInvocationStatus extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRepository($repository)
 * @method string getRepository()
 * @method $this setImageTag($imageTag)
 * @method string getImageTag()
 * @method $this setContainerType($containerType)
 * @method string getContainerType()
 */
class PullImage extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setQueueName($queueName)
 * @method string getQueueName()
 */
class DeleteQueue extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class GetClusterVolumes extends Request
{

}/**
 * @method $this setContainerApp($containerApp)
 * @method array getContainerApp()
 */
class DeleteContainerApps extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setQueueName($queueName)
 * @method string getQueueName()
 */
class AddQueue extends Request
{

}/**
 * @method $this setCommodities($commodities)
 * @method array getCommodities()
 * @method $this setPriceUnit($priceUnit)
 * @method string getPriceUnit()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 */
class DescribePrice extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setInstance($instance)
 * @method array getInstance()
 */
class StartNodes extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setQueueName($queueName)
 * @method string getQueueName()
 * @method $this setNode($node)
 * @method array getNode()
 */
class SetQueue extends Request
{

}/**
 * @method $this setContainerId($containerId)
 * @method string getContainerId()
 */
class DescribeContainerApp extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListNodes extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeCluster extends Request
{

}/**
 */
class ListCurrentClientVersion extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setCommandLine($commandLine)
 * @method string getCommandLine()
 * @method $this setRunasUser($runasUser)
 * @method string getRunasUser()
 * @method $this setRunasUserPassword($runasUserPassword)
 * @method string getRunasUserPassword()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setPackagePath($packagePath)
 * @method string getPackagePath()
 * @method $this setStdoutRedirectPath($stdoutRedirectPath)
 * @method string getStdoutRedirectPath()
 * @method $this setStderrRedirectPath($stderrRedirectPath)
 * @method string getStderrRedirectPath()
 * @method $this setReRunable($reRunable)
 * @method bool getReRunable()
 * @method $this setArrayRequest($arrayRequest)
 * @method string getArrayRequest()
 * @method $this setVariables($variables)
 * @method string getVariables()
 * @method $this setInputFileUrl($inputFileUrl)
 * @method string getInputFileUrl()
 * @method $this setUnzipCmd($unzipCmd)
 * @method string getUnzipCmd()
 * @method $this setPostCmdLine($postCmdLine)
 * @method string getPostCmdLine()
 * @method $this setContainerId($containerId)
 * @method string getContainerId()
 * @method $this setJobQueue($jobQueue)
 * @method string getJobQueue()
 */
class SubmitJob extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class ListInstalledSoftware extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class StopCluster extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRunasUser($runasUser)
 * @method string getRunasUser()
 * @method $this setRunasUserPassword($runasUserPassword)
 * @method string getRunasUserPassword()
 * @method $this setPasswd($passwd)
 * @method string getPasswd()
 */
class ModifyVisualServicePasswd extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setNodes($nodes)
 * @method string getNodes()
 */
class AddLocalNodes extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeAutoScaleConfig extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListJobTemplates extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class DescribeJob extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRunasUser($runasUser)
 * @method string getRunasUser()
 * @method $this setRunasUserPassword($runasUserPassword)
 * @method string getRunasUserPassword()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setTargetFile($targetFile)
 * @method string getTargetFile()
 */
class CreateJobFile extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class GetVisualServiceStatus extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListFileSystemWithMountTargets extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setApplication($application)
 * @method string getApplication()
 */
class UninstallSoftware extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setFrom($from)
 * @method int getFrom()
 * @method $this setTo($to)
 * @method int getTo()
 * @method $this setReverse($reverse)
 * @method bool getReverse()
 * @method $this setAggregationType($aggregationType)
 * @method string getAggregationType()
 * @method $this setAggregationInterval($aggregationInterval)
 * @method int getAggregationInterval()
 * @method $this setMetricScope($metricScope)
 * @method string getMetricScope()
 * @method $this setFilter($filter)
 * @method string getFilter()
 * @method $this setMetricCategories($metricCategories)
 * @method string getMetricCategories()
 */
class GetCloudMetricLogs extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setReportType($reportType)
 * @method string getReportType()
 */
class GetAccountingReport extends Request
{

}/**
 * @method $this setEhpcVersion($ehpcVersion)
 * @method string getEhpcVersion()
 */
class ListSoftwares extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setUser($user)
 * @method array getUser()
 */
class AddUsers extends Request
{

}/**
 * @method $this setImageOwnerAlias($imageOwnerAlias)
 * @method string getImageOwnerAlias()
 * @method $this setBaseOsTag($baseOsTag)
 * @method string getBaseOsTag()
 */
class ListCustomImages extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setDBType($dBType)
 * @method string getDBType()
 * @method $this setDBUsername($dBUsername)
 * @method string getDBUsername()
 * @method $this setDBPassword($dBPassword)
 * @method string getDBPassword()
 * @method $this setDBServerInfo($dBServerInfo)
 * @method string getDBServerInfo()
 * @method $this setDefaultRepoLocation($defaultRepoLocation)
 * @method string getDefaultRepoLocation()
 * @method $this setPullUpdateTimeout($pullUpdateTimeout)
 * @method int getPullUpdateTimeout()
 * @method $this setImageExpirationTimeout($imageExpirationTimeout)
 * @method string getImageExpirationTimeout()
 * @method $this setRepo($repo)
 * @method array getRepo()
 */
class ModifyImageGatewayConfig extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setInstance($instance)
 * @method array getInstance()
 */
class ResetNodes extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRunasUser($runasUser)
 * @method string getRunasUser()
 * @method $this setRunasUserPassword($runasUserPassword)
 * @method string getRunasUserPassword()
 */
class SetJobUser extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListCloudMetricProfilings extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setQueueName($queueName)
 * @method string getQueueName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListNodesByQueue extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRepository($repository)
 * @method string getRepository()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setImageTag($imageTag)
 * @method string getImageTag()
 * @method $this setContainerType($containerType)
 * @method string getContainerType()
 */
class AddContainerApp extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setCidrIp($cidrIp)
 * @method string getCidrIp()
 * @method $this setPort($port)
 * @method int getPort()
 */
class StartVisualService extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setUser($user)
 * @method array getUser()
 */
class DeleteUsers extends Request
{

}/**
 */
class ListAvailableFileSystemTypes extends Request
{

}/**
 */
class ListImages extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class ListQueues extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setJobs($jobs)
 * @method string getJobs()
 */
class DeleteJobs extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setInstance($instance)
 * @method array getInstance()
 * @method $this setReleaseInstance($releaseInstance)
 * @method bool getReleaseInstance()
 */
class DeleteNodes extends Request
{

}/**
 * @method $this setFileSystemId($fileSystemId)
 * @method string getFileSystemId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListCpfsFileSystems extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setEnableAutoGrow($enableAutoGrow)
 * @method bool getEnableAutoGrow()
 * @method $this setEnableAutoShrink($enableAutoShrink)
 * @method bool getEnableAutoShrink()
 * @method $this setGrowIntervalInMinutes($growIntervalInMinutes)
 * @method int getGrowIntervalInMinutes()
 * @method $this setShrinkIntervalInMinutes($shrinkIntervalInMinutes)
 * @method int getShrinkIntervalInMinutes()
 * @method $this setShrinkIdleTimes($shrinkIdleTimes)
 * @method int getShrinkIdleTimes()
 * @method $this setGrowTimeoutInMinutes($growTimeoutInMinutes)
 * @method int getGrowTimeoutInMinutes()
 * @method $this setExtraNodesGrowRatio($extraNodesGrowRatio)
 * @method int getExtraNodesGrowRatio()
 * @method $this setGrowRatio($growRatio)
 * @method int getGrowRatio()
 * @method $this setMaxNodesInCluster($maxNodesInCluster)
 * @method int getMaxNodesInCluster()
 * @method $this setExcludeNodes($excludeNodes)
 * @method string getExcludeNodes()
 * @method $this setSpotStrategy($spotStrategy)
 * @method string getSpotStrategy()
 * @method $this setSpotPriceLimit($spotPriceLimit)
 * @method Float getSpotPriceLimit()
 * @method $this setQueues($queues)
 * @method array getQueues()
 */
class SetAutoScaleConfig extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRepository($repository)
 * @method string getRepository()
 * @method $this setImageTag($imageTag)
 * @method string getImageTag()
 * @method $this setContainerType($containerType)
 * @method string getContainerType()
 */
class DeleteImage extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setCommandLine($commandLine)
 * @method string getCommandLine()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRunasUser($runasUser)
 * @method string getRunasUser()
 * @method $this setPriority($priority)
 * @method int getPriority()
 * @method $this setPackagePath($packagePath)
 * @method string getPackagePath()
 * @method $this setStdoutRedirectPath($stdoutRedirectPath)
 * @method string getStdoutRedirectPath()
 * @method $this setStderrRedirectPath($stderrRedirectPath)
 * @method string getStderrRedirectPath()
 * @method $this setReRunable($reRunable)
 * @method bool getReRunable()
 * @method $this setArrayRequest($arrayRequest)
 * @method string getArrayRequest()
 * @method $this setVariables($variables)
 * @method string getVariables()
 */
class EditJobTemplate extends Request
{

}/**
 * @method $this setContainerId($containerId)
 * @method string getContainerId()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyContainerAppAttributes extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setInstance($instance)
 * @method array getInstance()
 */
class StopNodes extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setImageOwnerAlias($imageOwnerAlias)
 * @method string getImageOwnerAlias()
 * @method $this setImageId($imageId)
 * @method string getImageId()
 * @method $this setCount($count)
 * @method int getCount()
 * @method $this setInstanceType($instanceType)
 * @method string getInstanceType()
 * @method $this setComputeSpotStrategy($computeSpotStrategy)
 * @method string getComputeSpotStrategy()
 * @method $this setComputeSpotPriceLimit($computeSpotPriceLimit)
 * @method string getComputeSpotPriceLimit()
 * @method $this setEcsChargeType($ecsChargeType)
 * @method string getEcsChargeType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setPeriodUnit($periodUnit)
 * @method string getPeriodUnit()
 * @method $this setAutoRenew($autoRenew)
 * @method string getAutoRenew()
 * @method $this setAutoRenewPeriod($autoRenewPeriod)
 * @method int getAutoRenewPeriod()
 * @method $this setJobQueue($jobQueue)
 * @method string getJobQueue()
 * @method $this setCreateMode($createMode)
 * @method string getCreateMode()
 * @method $this setSystemDiskSize($systemDiskSize)
 * @method int getSystemDiskSize()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 */
class AddNodes extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setContainerType($containerType)
 * @method string getContainerType()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListContainerImages extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setProfilingId($profilingId)
 * @method string getProfilingId()
 */
class GetCloudMetricProfiling extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setCommand($command)
 * @method string getCommand()
 * @method $this setInstance($instance)
 * @method array getInstance()
 * @method $this setWorkingDir($workingDir)
 * @method string getWorkingDir()
 * @method $this setTimeout($timeout)
 * @method int getTimeout()
 */
class InvokeShellCommand extends Request
{

}/**
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setSpotStrategy($spotStrategy)
 * @method string getSpotStrategy()
 * @method $this setInstanceChargeType($instanceChargeType)
 * @method string getInstanceChargeType()
 */
class ListPreferredEcsTypes extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setNode($node)
 * @method string getNode()
 */
class GetHybridClusterConfig extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class GetAutoScaleConfig extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setUser($user)
 * @method array getUser()
 */
class ModifyUserGroups extends Request
{

}/**
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setEhpcVersion($ehpcVersion)
 * @method string getEhpcVersion()
 * @method $this setClientVersion($clientVersion)
 * @method string getClientVersion()
 * @method $this setOsTag($osTag)
 * @method string getOsTag()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setNodes($nodes)
 * @method string getNodes()
 * @method $this setLocation($location)
 * @method string getLocation()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setSecurityGroupName($securityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setEcsOrderComputeInstanceType($ecsOrderComputeInstanceType)
 * @method string getEcsOrderComputeInstanceType()
 * @method $this setVolumeType($volumeType)
 * @method string getVolumeType()
 * @method $this setVolumeId($volumeId)
 * @method string getVolumeId()
 * @method $this setVolumeProtocol($volumeProtocol)
 * @method string getVolumeProtocol()
 * @method $this setVolumeMountpoint($volumeMountpoint)
 * @method string getVolumeMountpoint()
 * @method $this setRemoteDirectory($remoteDirectory)
 * @method string getRemoteDirectory()
 * @method $this setOnPremiseVolumeProtocol($onPremiseVolumeProtocol)
 * @method string getOnPremiseVolumeProtocol()
 * @method $this setOnPremiseVolumeMountPoint($onPremiseVolumeMountPoint)
 * @method string getOnPremiseVolumeMountPoint()
 * @method $this setOnPremiseVolumeRemotePath($onPremiseVolumeRemotePath)
 * @method string getOnPremiseVolumeRemotePath()
 * @method $this setOnPremiseVolumeLocalPath($onPremiseVolumeLocalPath)
 * @method string getOnPremiseVolumeLocalPath()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setKeyPairName($keyPairName)
 * @method string getKeyPairName()
 * @method $this setApplication($application)
 * @method array getApplication()
 * @method $this setPostInstallScript($postInstallScript)
 * @method array getPostInstallScript()
 * @method $this setJobQueue($jobQueue)
 * @method string getJobQueue()
 * @method $this setResourceGroupId($resourceGroupId)
 * @method string getResourceGroupId()
 */
class CreateHybridCluster extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setCidrIp($cidrIp)
 * @method string getCidrIp()
 * @method $this setPort($port)
 * @method int getPort()
 */
class StopVisualService extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setOwner($owner)
 * @method string getOwner()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setRerunable($rerunable)
 * @method string getRerunable()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListJobs extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class StartCluster extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setCommandId($commandId)
 * @method string getCommandId()
 * @method $this setInvokeRecordStatus($invokeRecordStatus)
 * @method string getInvokeRecordStatus()
 * @method $this setInstance($instance)
 * @method array getInstance()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListInvocationResults extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setApplication($application)
 * @method string getApplication()
 */
class InstallSoftware extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setUser($user)
 * @method array getUser()
 */
class ModifyUserPasswords extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusters extends Request
{

}/**
 */
class ListRegions extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setCommandId($commandId)
 * @method string getCommandId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListCommands extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListContainerApps extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setOnlyDetached($onlyDetached)
 * @method bool getOnlyDetached()
 */
class ListNodesNoPaging extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setJobs($jobs)
 * @method string getJobs()
 */
class StopJobs extends Request
{

}