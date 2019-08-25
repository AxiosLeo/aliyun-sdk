<?php

namespace aliyun\sdk\services\EHPC20170714;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170714
 *
 * @package aliyun\sdk\services\EHPC20170714
 * @method ListClusterLogs ListClusterLogs()
 * @method DeleteJobTemplates DeleteJobTemplates()
 * @method RerunJobs RerunJobs()
 * @method CreateCluster CreateCluster()
 * @method DeleteCluster DeleteCluster()
 * @method ListUsers ListUsers()
 * @method UpgradeClient UpgradeClient()
 * @method ModifyClusterAttributes ModifyClusterAttributes()
 * @method CreateJobTemplate CreateJobTemplate()
 * @method ListVolumes ListVolumes()
 * @method ListNodes ListNodes()
 * @method DescribeCluster DescribeCluster()
 * @method ListCurrentClientVersion ListCurrentClientVersion()
 * @method SubmitJob SubmitJob()
 * @method ListJobTemplates ListJobTemplates()
 * @method ListSoftwares ListSoftwares()
 * @method AddUsers AddUsers()
 * @method ListCustomImages ListCustomImages()
 * @method ResetNodes ResetNodes()
 * @method SetJobUser SetJobUser()
 * @method DeleteUsers DeleteUsers()
 * @method ListImages ListImages()
 * @method DeleteJobs DeleteJobs()
 * @method DeleteNodes DeleteNodes()
 * @method SetAutoScaleConfig SetAutoScaleConfig()
 * @method EditJobTemplate EditJobTemplate()
 * @method AddNodes AddNodes()
 * @method ListPreferredEcsTypes ListPreferredEcsTypes()
 * @method GetAutoScaleConfig GetAutoScaleConfig()
 * @method ModifyUserGroups ModifyUserGroups()
 * @method ListJobs ListJobs()
 * @method ModifyUserPasswords ModifyUserPasswords()
 * @method ListClusters ListClusters()
 * @method ListRegions ListRegions()
 * @method ListNodesNoPaging ListNodesNoPaging()
 * @method StopJobs StopJobs()
 */
class V20170714
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setEcsOrder_Manager_Count($ecsOrder_Manager_Count)
 * @method int getEcsOrder_Manager_Count()
 * @method $this setEcsOrder_Manager_InstanceType($ecsOrder_Manager_InstanceType)
 * @method string getEcsOrder_Manager_InstanceType()
 * @method $this setEcsOrder_Compute_Count($ecsOrder_Compute_Count)
 * @method int getEcsOrder_Compute_Count()
 * @method $this setEcsOrder_Compute_InstanceType($ecsOrder_Compute_InstanceType)
 * @method string getEcsOrder_Compute_InstanceType()
 * @method $this setEcsOrder_Login_Count($ecsOrder_Login_Count)
 * @method int getEcsOrder_Login_Count()
 * @method $this setEcsOrder_Login_InstanceType($ecsOrder_Login_InstanceType)
 * @method string getEcsOrder_Login_InstanceType()
 * @method $this setSccClusterId($sccClusterId)
 * @method string getSccClusterId()
 * @method $this setComputeSpotStrategy($computeSpotStrategy)
 * @method string getComputeSpotStrategy()
 * @method $this setComputeSpotPriceLimit($computeSpotPriceLimit)
 * @method string getComputeSpotPriceLimit()
 * @method $this setApplication($application)
 * @method array getApplication()
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRunasUser($runasUser)
 * @method string getRunasUser()
 * @method $this setRunasUserPassword($runasUserPassword)
 * @method string getRunasUserPassword()
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
class SubmitJob extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setReleaseInstance($releaseInstance)
 * @method bool getReleaseInstance()
 */
class AddUsers extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setUser($user)
 * @method array getUser()
 */
class DeleteUsers extends Request
{
}/**
 */
class ListImages extends Request
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
 */
class SetAutoScaleConfig extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
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
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setImageOwnerAlias($imageOwnerAlias)
 * @method string getImageOwnerAlias()
 * @method $this setImageId($imageId)
 * @method string getImageId()
 * @method $this setCount($count)
 * @method int getCount()
 * @method $this setComputeSpotStrategy($computeSpotStrategy)
 * @method string getComputeSpotStrategy()
 * @method $this setComputeSpotPriceLimit($computeSpotPriceLimit)
 * @method string getComputeSpotPriceLimit()
 */
class AddNodes extends Request
{
}/**
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setSpotStrategy($spotStrategy)
 * @method string getSpotStrategy()
 */
class ListPreferredEcsTypes extends Request
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
