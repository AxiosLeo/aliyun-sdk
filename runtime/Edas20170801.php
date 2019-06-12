<?php

namespace aliyun\sdk\services\Edas20170801;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170801
 *
 * @package aliyun\sdk\services\Edas20170801
 * @method UpdateJvmConfiguration UpdateJvmConfiguration()
 * @method ListDegradeControls ListDegradeControls()
 * @method InsertFlowControl InsertFlowControl()
 * @method QueryConfigCenter QueryConfigCenter()
 * @method ListVpc ListVpc()
 * @method GetChangeOrderInfo GetChangeOrderInfo()
 * @method EnableDegradeControl EnableDegradeControl()
 * @method ListConsumedServices ListConsumedServices()
 * @method ListBuildPack ListBuildPack()
 * @method DeleteEcu DeleteEcu()
 * @method TransformClusterMember TransformClusterMember()
 * @method UpdateK8sApplicationConfig UpdateK8sApplicationConfig()
 * @method DeleteCluster DeleteCluster()
 * @method ListClusterMembers ListClusterMembers()
 * @method DeleteRole DeleteRole()
 * @method InsertServerlessApplication InsertServerlessApplication()
 * @method UpdateContainerConfiguration UpdateContainerConfiguration()
 * @method ListConvertableEcu ListConvertableEcu()
 * @method ListSubAccount ListSubAccount()
 * @method StartApplication StartApplication()
 * @method ResetApplication ResetApplication()
 * @method DeleteDeployGroup DeleteDeployGroup()
 * @method ListEcsNotInCluster ListEcsNotInCluster()
 * @method GetJvmConfiguration GetJvmConfiguration()
 * @method ListAuthority ListAuthority()
 * @method ListCluster ListCluster()
 * @method ListRole ListRole()
 * @method GetApplication GetApplication()
 * @method BindK8sSlb BindK8sSlb()
 * @method GetServerlessAppConfigDetail GetServerlessAppConfigDetail()
 * @method SynchronizeResource SynchronizeResource()
 * @method BindSlb BindSlb()
 * @method AuthorizeResourceGroup AuthorizeResourceGroup()
 * @method InsertConfigCenter InsertConfigCenter()
 * @method ListEcuByRegion ListEcuByRegion()
 * @method DeleteClusterMember DeleteClusterMember()
 * @method DeployServerlessApplication DeployServerlessApplication()
 * @method QueryApplicationStatus QueryApplicationStatus()
 * @method ListHistoryDeployVersion ListHistoryDeployVersion()
 * @method AuthorizeRole AuthorizeRole()
 * @method ListScaleOutEcu ListScaleOutEcu()
 * @method UpdateRole UpdateRole()
 * @method UnbindK8sSlb UnbindK8sSlb()
 * @method AuthorizeApplication AuthorizeApplication()
 * @method UnbindServerlessSlb UnbindServerlessSlb()
 * @method EnableFlowControl EnableFlowControl()
 * @method ScaleK8sApplication ScaleK8sApplication()
 * @method StopApplication StopApplication()
 * @method ListComponents ListComponents()
 * @method InsertServiceGroup InsertServiceGroup()
 * @method GetSecureToken GetSecureToken()
 * @method UpdateContainer UpdateContainer()
 * @method UpdateApplicationBaseInfo UpdateApplicationBaseInfo()
 * @method ListDeployGroup ListDeployGroup()
 * @method BindServerlessSlb BindServerlessSlb()
 * @method InsertApplication InsertApplication()
 * @method ListConfigCenters ListConfigCenters()
 * @method InstallAgent InstallAgent()
 * @method RollbackApplication RollbackApplication()
 * @method DeleteDegradeControl DeleteDegradeControl()
 * @method ScaleInApplication ScaleInApplication()
 * @method ListUserDefineRegion ListUserDefineRegion()
 * @method GetContainerConfiguration GetContainerConfiguration()
 * @method UpdateK8sSlb UpdateK8sSlb()
 * @method DeleteApplication DeleteApplication()
 * @method MigrateEcu MigrateEcu()
 * @method ListApplicationEcu ListApplicationEcu()
 * @method QueryMigrateRegionList QueryMigrateRegionList()
 * @method GetCluster GetCluster()
 * @method InsertDegradeControl InsertDegradeControl()
 * @method QueryMonitorInfo QueryMonitorInfo()
 * @method UpdateHealthCheckUrl UpdateHealthCheckUrl()
 * @method ListRecentChangeOrder ListRecentChangeOrder()
 * @method ScaleOutApplication ScaleOutApplication()
 * @method UpdateDegradeControl UpdateDegradeControl()
 * @method InsertRole InsertRole()
 * @method QueryRegionConfig QueryRegionConfig()
 * @method DisableFlowControl DisableFlowControl()
 * @method InsertClusterMember InsertClusterMember()
 * @method ListAliyunRegion ListAliyunRegion()
 * @method ListPublishedServices ListPublishedServices()
 * @method DeployK8sApplication DeployK8sApplication()
 * @method QueryMigrateEcuList QueryMigrateEcuList()
 * @method CreateServerlessApplication CreateServerlessApplication()
 * @method DeleteConfigCenter DeleteConfigCenter()
 * @method ListResourceGroup ListResourceGroup()
 * @method InsertDeployGroup InsertDeployGroup()
 * @method ImportK8sCluster ImportK8sCluster()
 * @method ScaleServerlessApplication ScaleServerlessApplication()
 * @method DeleteUserDefineRegion DeleteUserDefineRegion()
 * @method ListFlowControls ListFlowControls()
 * @method ListApplication ListApplication()
 * @method DeployApplication DeployApplication()
 * @method ListSlb ListSlb()
 * @method ListServiceGroups ListServiceGroups()
 * @method DeleteK8sApplication DeleteK8sApplication()
 * @method GetPackageStorageCredential GetPackageStorageCredential()
 * @method UpdateFlowControl UpdateFlowControl()
 * @method DisableDegradeControl DisableDegradeControl()
 * @method UpdateAccountInfo UpdateAccountInfo()
 * @method DeleteServiceGroup DeleteServiceGroup()
 * @method DeleteFlowControl DeleteFlowControl()
 * @method UnbindSlb UnbindSlb()
 * @method DeleteServerlessApplication DeleteServerlessApplication()
 * @method InsertK8sApplication InsertK8sApplication()
 * @method InsertOrUpdateRegion InsertOrUpdateRegion()
 * @method InsertCluster InsertCluster()
 */
class V20170801
{
}

/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setOptions($options)
 * @method string getOptions()
 * @method $this setMinHeapSize($minHeapSize)
 * @method int getMinHeapSize()
 * @method $this setMaxPermSize($maxPermSize)
 * @method int getMaxPermSize()
 * @method $this setMaxHeapSize($maxHeapSize)
 * @method int getMaxHeapSize()
 */
class UpdateJvmConfiguration extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class ListDegradeControls extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setConsumerAppId($consumerAppId)
 * @method string getConsumerAppId()
 * @method $this setGranularity($granularity)
 * @method string getGranularity()
 * @method $this setMethodName($methodName)
 * @method string getMethodName()
 * @method $this setRuleType($ruleType)
 * @method string getRuleType()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setStrategy($strategy)
 * @method string getStrategy()
 * @method $this setThreshold($threshold)
 * @method int getThreshold()
 * @method $this setUrlVar($urlVar)
 * @method string getUrlVar()
 */
class InsertFlowControl extends Request
{

}/**
 * @method $this setDataId($dataId)
 * @method string getDataId()
 * @method $this setGroup($group)
 * @method string getGroup()
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 */
class QueryConfigCenter extends Request
{

}/**
 */
class ListVpc extends Request
{

}/**
 * @method $this setChangeOrderId($changeOrderId)
 * @method string getChangeOrderId()
 */
class GetChangeOrderInfo extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class EnableDegradeControl extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class ListConsumedServices extends Request
{

}/**
 */
class ListBuildPack extends Request
{

}/**
 * @method $this setEcuId($ecuId)
 * @method string getEcuId()
 */
class DeleteEcu extends Request
{

}/**
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 * @method $this setTargetClusterId($targetClusterId)
 * @method string getTargetClusterId()
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class TransformClusterMember extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setCpuLimit($cpuLimit)
 * @method string getCpuLimit()
 * @method $this setMemoryLimit($memoryLimit)
 * @method string getMemoryLimit()
 */
class UpdateK8sApplicationConfig extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DeleteCluster extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusterMembers extends Request
{

}/**
 * @method $this setRoleId($roleId)
 * @method int getRoleId()
 */
class DeleteRole extends Request
{

}/**
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setNamespaceId($namespaceId)
 * @method string getNamespaceId()
 * @method $this setAppDescription($appDescription)
 * @method string getAppDescription()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPackageType($packageType)
 * @method string getPackageType()
 * @method $this setPackageVersion($packageVersion)
 * @method string getPackageVersion()
 * @method $this setPackageUrl($packageUrl)
 * @method string getPackageUrl()
 * @method $this setImageUrl($imageUrl)
 * @method string getImageUrl()
 * @method $this setJdk($jdk)
 * @method string getJdk()
 * @method $this setWebContainer($webContainer)
 * @method string getWebContainer()
 * @method $this setCpu($cpu)
 * @method int getCpu()
 * @method $this setMemory($memory)
 * @method int getMemory()
 * @method $this setReplicas($replicas)
 * @method int getReplicas()
 * @method $this setCommand($command)
 * @method string getCommand()
 * @method $this setCommandArgs($commandArgs)
 * @method string getCommandArgs()
 * @method $this setEnvs($envs)
 * @method string getEnvs()
 * @method $this setCustomHostAlias($customHostAlias)
 * @method string getCustomHostAlias()
 * @method $this setJarStartOptions($jarStartOptions)
 * @method string getJarStartOptions()
 * @method $this setJarStartArgs($jarStartArgs)
 * @method string getJarStartArgs()
 * @method $this setLiveness($liveness)
 * @method string getLiveness()
 * @method $this setReadiness($readiness)
 * @method string getReadiness()
 * @method $this setDeploy($deploy)
 * @method bool getDeploy()
 * @method $this setBuildPackId($buildPackId)
 * @method int getBuildPackId()
 */
class InsertServerlessApplication extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setContextPath($contextPath)
 * @method string getContextPath()
 * @method $this setHttpPort($httpPort)
 * @method int getHttpPort()
 * @method $this setMaxThreads($maxThreads)
 * @method int getMaxThreads()
 * @method $this setURIEncoding($uRIEncoding)
 * @method string getURIEncoding()
 * @method $this setUseBodyEncoding($useBodyEncoding)
 * @method bool getUseBodyEncoding()
 */
class UpdateContainerConfiguration extends Request
{

}/**
 * @method $this setclusterId($clusterId)
 * @method string getclusterId()
 */
class ListConvertableEcu extends Request
{

}/**
 */
class ListSubAccount extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setEccInfo($eccInfo)
 * @method string getEccInfo()
 */
class StartApplication extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setEccInfo($eccInfo)
 * @method string getEccInfo()
 */
class ResetApplication extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class DeleteDeployGroup extends Request
{

}/**
 * @method $this setNetworkMode($networkMode)
 * @method int getNetworkMode()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 */
class ListEcsNotInCluster extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class GetJvmConfiguration extends Request
{

}/**
 */
class ListAuthority extends Request
{

}/**
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 */
class ListCluster extends Request
{

}/**
 */
class ListRole extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class GetApplication extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSlbId($slbId)
 * @method string getSlbId()
 * @method $this setSlbProtocol($slbProtocol)
 * @method string getSlbProtocol()
 * @method $this setTargetPort($targetPort)
 * @method string getTargetPort()
 * @method $this setPort($port)
 * @method string getPort()
 */
class BindK8sSlb extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class GetServerlessAppConfigDetail extends Request
{

}/**
 * @method $this setType($type)
 * @method string getType()
 */
class SynchronizeResource extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setSlbId($slbId)
 * @method string getSlbId()
 * @method $this setSlbIp($slbIp)
 * @method string getSlbIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setListenerPort($listenerPort)
 * @method int getListenerPort()
 * @method $this setVServerGroupId($vServerGroupId)
 * @method string getVServerGroupId()
 */
class BindSlb extends Request
{

}/**
 * @method $this setTargetUserId($targetUserId)
 * @method string getTargetUserId()
 * @method $this setResourceGroupIds($resourceGroupIds)
 * @method string getResourceGroupIds()
 */
class AuthorizeResourceGroup extends Request
{

}/**
 * @method $this setDataId($dataId)
 * @method string getDataId()
 * @method $this setGroup($group)
 * @method string getGroup()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class InsertConfigCenter extends Request
{

}/**
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 * @method $this setAct($act)
 * @method string getAct()
 */
class ListEcuByRegion extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setClusterMemberId($clusterMemberId)
 * @method string getClusterMemberId()
 */
class DeleteClusterMember extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setJdk($jdk)
 * @method string getJdk()
 * @method $this setWebContainer($webContainer)
 * @method string getWebContainer()
 * @method $this setPackageVersion($packageVersion)
 * @method string getPackageVersion()
 * @method $this setPackageUrl($packageUrl)
 * @method string getPackageUrl()
 * @method $this setImageUrl($imageUrl)
 * @method string getImageUrl()
 * @method $this setCommand($command)
 * @method string getCommand()
 * @method $this setCommandArgs($commandArgs)
 * @method string getCommandArgs()
 * @method $this setEnvs($envs)
 * @method string getEnvs()
 * @method $this setCustomHostAlias($customHostAlias)
 * @method string getCustomHostAlias()
 * @method $this setJarStartOptions($jarStartOptions)
 * @method string getJarStartOptions()
 * @method $this setJarStartArgs($jarStartArgs)
 * @method string getJarStartArgs()
 * @method $this setLiveness($liveness)
 * @method string getLiveness()
 * @method $this setReadiness($readiness)
 * @method string getReadiness()
 * @method $this setMinReadyInstances($minReadyInstances)
 * @method int getMinReadyInstances()
 * @method $this setBatchWaitTime($batchWaitTime)
 * @method int getBatchWaitTime()
 * @method $this setBuildPackId($buildPackId)
 * @method int getBuildPackId()
 */
class DeployServerlessApplication extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class QueryApplicationStatus extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class ListHistoryDeployVersion extends Request
{

}/**
 * @method $this setTargetUserId($targetUserId)
 * @method string getTargetUserId()
 * @method $this setRoleIds($roleIds)
 * @method string getRoleIds()
 */
class AuthorizeRole extends Request
{

}/**
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setCpu($cpu)
 * @method int getCpu()
 * @method $this setMem($mem)
 * @method int getMem()
 * @method $this setInstanceNum($instanceNum)
 * @method int getInstanceNum()
 */
class ListScaleOutEcu extends Request
{

}/**
 * @method $this setRoleId($roleId)
 * @method int getRoleId()
 * @method $this setActionData($actionData)
 * @method string getActionData()
 */
class UpdateRole extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setType($type)
 * @method string getType()
 */
class UnbindK8sSlb extends Request
{

}/**
 * @method $this setTargetUserId($targetUserId)
 * @method string getTargetUserId()
 * @method $this setAppIds($appIds)
 * @method string getAppIds()
 */
class AuthorizeApplication extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setInternet($internet)
 * @method bool getInternet()
 * @method $this setIntranet($intranet)
 * @method bool getIntranet()
 */
class UnbindServerlessSlb extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class EnableFlowControl extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setReplicas($replicas)
 * @method int getReplicas()
 */
class ScaleK8sApplication extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setEccInfo($eccInfo)
 * @method string getEccInfo()
 */
class StopApplication extends Request
{

}/**
 */
class ListComponents extends Request
{

}/**
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class InsertServiceGroup extends Request
{

}/**
 * @method $this setNamespaceId($namespaceId)
 * @method string getNamespaceId()
 */
class GetSecureToken extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setBuildPackId($buildPackId)
 * @method int getBuildPackId()
 */
class UpdateContainer extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setdesc($desc)
 * @method string getdesc()
 */
class UpdateApplicationBaseInfo extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class ListDeployGroup extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setInternet($internet)
 * @method string getInternet()
 * @method $this setIntranet($intranet)
 * @method string getIntranet()
 */
class BindServerlessSlb extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setBuildPackId($buildPackId)
 * @method int getBuildPackId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setApplicationName($applicationName)
 * @method string getApplicationName()
 * @method $this setReservedPortStr($reservedPortStr)
 * @method string getReservedPortStr()
 * @method $this setEcuInfo($ecuInfo)
 * @method string getEcuInfo()
 * @method $this setCpu($cpu)
 * @method int getCpu()
 * @method $this setMem($mem)
 * @method int getMem()
 * @method $this setHealthCheckURL($healthCheckURL)
 * @method string getHealthCheckURL()
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 * @method $this setJdk($jdk)
 * @method string getJdk()
 * @method $this setWebContainer($webContainer)
 * @method string getWebContainer()
 * @method $this setPackageType($packageType)
 * @method string getPackageType()
 */
class InsertApplication extends Request
{

}/**
 * @method $this setDataIdPattern($dataIdPattern)
 * @method string getDataIdPattern()
 * @method $this setGroup($group)
 * @method string getGroup()
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 */
class ListConfigCenters extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 * @method $this setDoAsync($doAsync)
 * @method bool getDoAsync()
 */
class InstallAgent extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setHistoryVersion($historyVersion)
 * @method string getHistoryVersion()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setBatch($batch)
 * @method int getBatch()
 * @method $this setBatchWaitTime($batchWaitTime)
 * @method int getBatchWaitTime()
 */
class RollbackApplication extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class DeleteDegradeControl extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setEccInfo($eccInfo)
 * @method string getEccInfo()
 * @method $this setForceStatus($forceStatus)
 * @method bool getForceStatus()
 */
class ScaleInApplication extends Request
{

}/**
 * @method $this setDebugEnable($debugEnable)
 * @method bool getDebugEnable()
 */
class ListUserDefineRegion extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class GetContainerConfiguration extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSlbProtocol($slbProtocol)
 * @method string getSlbProtocol()
 * @method $this setTargetPort($targetPort)
 * @method string getTargetPort()
 * @method $this setPort($port)
 * @method string getPort()
 */
class UpdateK8sSlb extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DeleteApplication extends Request
{

}/**
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 */
class MigrateEcu extends Request
{

}/**
 */
class ListApplicationEcu extends Request
{

}/**
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 */
class QueryMigrateRegionList extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class GetCluster extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setMethodName($methodName)
 * @method string getMethodName()
 * @method $this setRtThreshold($rtThreshold)
 * @method int getRtThreshold()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setUrlVar($urlVar)
 * @method string getUrlVar()
 * @method $this setRuleType($ruleType)
 * @method string getRuleType()
 */
class InsertDegradeControl extends Request
{

}/**
 * @method $this setStart($start)
 * @method int getStart()
 * @method $this setEnd($end)
 * @method int getEnd()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setAggregator($aggregator)
 * @method string getAggregator()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class QueryMonitorInfo extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this sethcURL($hcURL)
 * @method string gethcURL()
 */
class UpdateHealthCheckUrl extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class ListRecentChangeOrder extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setEcuInfo($ecuInfo)
 * @method string getEcuInfo()
 * @method $this setDeployGroup($deployGroup)
 * @method string getDeployGroup()
 */
class ScaleOutApplication extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setMethodName($methodName)
 * @method string getMethodName()
 * @method $this setRtThreshold($rtThreshold)
 * @method int getRtThreshold()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setUrlVar($urlVar)
 * @method string getUrlVar()
 * @method $this setRuleType($ruleType)
 * @method string getRuleType()
 */
class UpdateDegradeControl extends Request
{

}/**
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 * @method $this setActionData($actionData)
 * @method string getActionData()
 */
class InsertRole extends Request
{

}/**
 */
class QueryRegionConfig extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class DisableFlowControl extends Request
{

}/**
 * @method $this setclusterId($clusterId)
 * @method string getclusterId()
 * @method $this setinstanceIds($instanceIds)
 * @method string getinstanceIds()
 * @method $this setpassword($password)
 * @method string getpassword()
 */
class InsertClusterMember extends Request
{

}/**
 */
class ListAliyunRegion extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class ListPublishedServices extends Request
{

}/**
 * @method $this setPreStop($preStop)
 * @method string getPreStop()
 * @method $this setEnvs($envs)
 * @method string getEnvs()
 * @method $this setImageTag($imageTag)
 * @method string getImageTag()
 * @method $this setBatchWaitTime($batchWaitTime)
 * @method int getBatchWaitTime()
 * @method $this setCommand($command)
 * @method string getCommand()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setPostStart($postStart)
 * @method string getPostStart()
 * @method $this setReadiness($readiness)
 * @method string getReadiness()
 * @method $this setLiveness($liveness)
 * @method string getLiveness()
 * @method $this setArgs($args)
 * @method string getArgs()
 * @method $this setReplicas($replicas)
 * @method int getReplicas()
 * @method $this setImage($image)
 * @method string getImage()
 * @method $this setCpuLimit($cpuLimit)
 * @method int getCpuLimit()
 * @method $this setMemoryLimit($memoryLimit)
 * @method int getMemoryLimit()
 * @method $this setCpuRequest($cpuRequest)
 * @method int getCpuRequest()
 * @method $this setMemoryRequest($memoryRequest)
 * @method int getMemoryRequest()
 * @method $this setNasId($nasId)
 * @method string getNasId()
 * @method $this setMountDescs($mountDescs)
 * @method string getMountDescs()
 * @method $this setStorageType($storageType)
 * @method string getStorageType()
 * @method $this setLocalVolume($localVolume)
 * @method string getLocalVolume()
 */
class DeployK8sApplication extends Request
{

}/**
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 */
class QueryMigrateEcuList extends Request
{

}/**
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setNamespaceId($namespaceId)
 * @method string getNamespaceId()
 * @method $this setAppDescription($appDescription)
 * @method string getAppDescription()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPackageType($packageType)
 * @method string getPackageType()
 * @method $this setPackageVersion($packageVersion)
 * @method string getPackageVersion()
 * @method $this setPackageUrl($packageUrl)
 * @method string getPackageUrl()
 * @method $this setImageUrl($imageUrl)
 * @method string getImageUrl()
 * @method $this setJdk($jdk)
 * @method string getJdk()
 * @method $this setWebContainer($webContainer)
 * @method string getWebContainer()
 * @method $this setCpu($cpu)
 * @method int getCpu()
 * @method $this setMemory($memory)
 * @method int getMemory()
 * @method $this setReplicas($replicas)
 * @method int getReplicas()
 * @method $this setCommand($command)
 * @method string getCommand()
 * @method $this setCommandArgs($commandArgs)
 * @method string getCommandArgs()
 * @method $this setEnvs($envs)
 * @method string getEnvs()
 * @method $this setCustomHostAlias($customHostAlias)
 * @method string getCustomHostAlias()
 * @method $this setJarStartOptions($jarStartOptions)
 * @method string getJarStartOptions()
 * @method $this setJarStartArgs($jarStartArgs)
 * @method string getJarStartArgs()
 * @method $this setLiveness($liveness)
 * @method string getLiveness()
 * @method $this setReadiness($readiness)
 * @method string getReadiness()
 * @method $this setDeploy($deploy)
 * @method bool getDeploy()
 * @method $this setEdasContainerVersion($edasContainerVersion)
 * @method string getEdasContainerVersion()
 */
class CreateServerlessApplication extends Request
{

}/**
 * @method $this setDataId($dataId)
 * @method string getDataId()
 * @method $this setGroup($group)
 * @method string getGroup()
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 */
class DeleteConfigCenter extends Request
{

}/**
 */
class ListResourceGroup extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class InsertDeployGroup extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setNamespaceId($namespaceId)
 * @method string getNamespaceId()
 */
class ImportK8sCluster extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setReplicas($replicas)
 * @method int getReplicas()
 */
class ScaleServerlessApplication extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setRegionTag($regionTag)
 * @method string getRegionTag()
 */
class DeleteUserDefineRegion extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class ListFlowControls extends Request
{

}/**
 */
class ListApplication extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setPackageVersion($packageVersion)
 * @method string getPackageVersion()
 * @method $this setDesc($desc)
 * @method string getDesc()
 * @method $this setDeployType($deployType)
 * @method string getDeployType()
 * @method $this setWarUrl($warUrl)
 * @method string getWarUrl()
 * @method $this setImageUrl($imageUrl)
 * @method string getImageUrl()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setBatch($batch)
 * @method int getBatch()
 * @method $this setBatchWaitTime($batchWaitTime)
 * @method int getBatchWaitTime()
 * @method $this setAppEnv($appEnv)
 * @method string getAppEnv()
 * @method $this setBuildPackId($buildPackId)
 * @method int getBuildPackId()
 * @method $this setComponentIds($componentIds)
 * @method string getComponentIds()
 */
class DeployApplication extends Request
{

}/**
 */
class ListSlb extends Request
{

}/**
 */
class ListServiceGroups extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 */
class DeleteK8sApplication extends Request
{

}/**
 */
class GetPackageStorageCredential extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setConsumerAppId($consumerAppId)
 * @method string getConsumerAppId()
 * @method $this setGranularity($granularity)
 * @method string getGranularity()
 * @method $this setMethodName($methodName)
 * @method string getMethodName()
 * @method $this setRuleType($ruleType)
 * @method string getRuleType()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setStrategy($strategy)
 * @method string getStrategy()
 * @method $this setThreshold($threshold)
 * @method int getThreshold()
 * @method $this setUrlVar($urlVar)
 * @method string getUrlVar()
 */
class UpdateFlowControl extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class DisableDegradeControl extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTelephone($telephone)
 * @method string getTelephone()
 * @method $this setEmail($email)
 * @method string getEmail()
 */
class UpdateAccountInfo extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DeleteServiceGroup extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 */
class DeleteFlowControl extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setSlbId($slbId)
 * @method string getSlbId()
 * @method $this setType($type)
 * @method string getType()
 */
class UnbindSlb extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAct($act)
 * @method string getAct()
 */
class DeleteServerlessApplication extends Request
{

}/**
 * @method $this setIntranetTargetPort($intranetTargetPort)
 * @method int getIntranetTargetPort()
 * @method $this setIntranetSlbPort($intranetSlbPort)
 * @method int getIntranetSlbPort()
 * @method $this setImageUrl($imageUrl)
 * @method string getImageUrl()
 * @method $this setApplicationDescription($applicationDescription)
 * @method string getApplicationDescription()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setReplicas($replicas)
 * @method int getReplicas()
 * @method $this setLimitCpu($limitCpu)
 * @method int getLimitCpu()
 * @method $this setLimitMem($limitMem)
 * @method int getLimitMem()
 * @method $this setRequestsCpu($requestsCpu)
 * @method int getRequestsCpu()
 * @method $this setRequestsMem($requestsMem)
 * @method int getRequestsMem()
 * @method $this setCommand($command)
 * @method string getCommand()
 * @method $this setCommandArgs($commandArgs)
 * @method string getCommandArgs()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setIntranetSlbProtocol($intranetSlbProtocol)
 * @method string getIntranetSlbProtocol()
 * @method $this setIntranetSlbId($intranetSlbId)
 * @method string getIntranetSlbId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setInternetSlbId($internetSlbId)
 * @method string getInternetSlbId()
 * @method $this setInternetSlbProtocol($internetSlbProtocol)
 * @method string getInternetSlbProtocol()
 * @method $this setInternetSlbPort($internetSlbPort)
 * @method int getInternetSlbPort()
 * @method $this setInternetTargetPort($internetTargetPort)
 * @method int getInternetTargetPort()
 * @method $this setEnvs($envs)
 * @method string getEnvs()
 * @method $this setPreStop($preStop)
 * @method string getPreStop()
 * @method $this setPostStart($postStart)
 * @method string getPostStart()
 * @method $this setLiveness($liveness)
 * @method string getLiveness()
 * @method $this setReadiness($readiness)
 * @method string getReadiness()
 * @method $this setNasId($nasId)
 * @method string getNasId()
 * @method $this setMountDescs($mountDescs)
 * @method string getMountDescs()
 * @method $this setStorageType($storageType)
 * @method string getStorageType()
 * @method $this setLocalVolume($localVolume)
 * @method string getLocalVolume()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 */
class InsertK8sApplication extends Request
{

}/**
 * @method $this setRegionTag($regionTag)
 * @method string getRegionTag()
 * @method $this setRegionName($regionName)
 * @method string getRegionName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setDebugEnable($debugEnable)
 * @method bool getDebugEnable()
 */
class InsertOrUpdateRegion extends Request
{

}/**
 * @method $this setLogicalRegionId($logicalRegionId)
 * @method string getLogicalRegionId()
 * @method $this setClusterName($clusterName)
 * @method string getClusterName()
 * @method $this setClusterType($clusterType)
 * @method int getClusterType()
 * @method $this setNetworkMode($networkMode)
 * @method int getNetworkMode()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setOversoldFactor($oversoldFactor)
 * @method int getOversoldFactor()
 * @method $this setIaasProvider($iaasProvider)
 * @method string getIaasProvider()
 */
class InsertCluster extends Request
{

}