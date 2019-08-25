<?php

namespace aliyun\sdk\services\CS28180418;

use aliyun\sdk\core\lib\Request;

/**
 * Class V28180418
 *
 * @package aliyun\sdk\services\CS28180418
 * @method DescribeClusters DescribeClusters()
 * @method DescribeClusterDetail DescribeClusterDetail()
 * @method CreateCluster CreateCluster()
 * @method DeleteCluster DeleteCluster()
 * @method CheckAliyunCSServiceRole CheckAliyunCSServiceRole()
 * @method DescribeClusterNodeInfo DescribeClusterNodeInfo()
 * @method DescribeClusterCerts DescribeClusterCerts()
 * @method DescribeTemplateAttribute DescribeTemplateAttribute()
 * @method GetTriggerHook GetTriggerHook()
 * @method UpdateSubUserResouces UpdateSubUserResouces()
 * @method DescribeClusterServices DescribeClusterServices()
 * @method ResetClusterNode ResetClusterNode()
 * @method DescribeClusterLogs DescribeClusterLogs()
 * @method DescribeImages DescribeImages()
 * @method CallbackClusterToken CallbackClusterToken()
 * @method DescribeClusterScaledNode DescribeClusterScaledNode()
 * @method DescribeTemplates DescribeTemplates()
 * @method DescribeKubernetesTemplates DescribeKubernetesTemplates()
 * @method DescribeClusterHosts DescribeClusterHosts()
 * @method CreateClusterToken CreateClusterToken()
 * @method DescribeUserContainers DescribeUserContainers()
 * @method RevokeClusterToken RevokeClusterToken()
 * @method CallBackAgilityCluster CallBackAgilityCluster()
 * @method ScaleInCluster ScaleInCluster()
 * @method AddAgilityCluster AddAgilityCluster()
 * @method DescribeClusterNodeInfoWithInstance DescribeClusterNodeInfoWithInstance()
 * @method DeleteClusterNode DeleteClusterNode()
 * @method DescribeAgilityTunnelAgentInfo DescribeAgilityTunnelAgentInfo()
 * @method DescribeClusterNodes DescribeClusterNodes()
 * @method CreateTemplate CreateTemplate()
 * @method DescribeTaskInfo DescribeTaskInfo()
 * @method DescribeApiVersion DescribeApiVersion()
 * @method GetClusterProjects GetClusterProjects()
 * @method GatherLogsToken GatherLogsToken()
 * @method UpgradeClusterComponents UpgradeClusterComponents()
 * @method DescribeServiceContainers DescribeServiceContainers()
 * @method ScaleCluster ScaleCluster()
 * @method DownloadClusterNodeCerts DownloadClusterNodeCerts()
 * @method AttachInstances AttachInstances()
 * @method DescribeClusterTokens DescribeClusterTokens()
 * @method DescribeAgilityTunnelCerts DescribeAgilityTunnelCerts()
 * @method DescribeKubernetesTemplate DescribeKubernetesTemplate()
 * @method GetProjectEvents GetProjectEvents()
 * @method ModifyClusterName ModifyClusterName()
 */
class V28180418
{
}

/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setclusterType($clusterType)
 * @method string getclusterType()
 */
class DescribeClusters extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeClusterDetail extends Request
{
}/**
 */
class CreateCluster extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DeleteCluster extends Request
{
}/**
 */
class CheckAliyunCSServiceRole extends Request
{
}/**
 * @method $this setToken($token)
 * @method string getToken()
 */
class DescribeClusterNodeInfo extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeClusterCerts extends Request
{
}/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class DescribeTemplateAttribute extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 */
class GetTriggerHook extends Request
{
}/**
 */
class UpdateSubUserResouces extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeClusterServices extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ResetClusterNode extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeClusterLogs extends Request
{
}/**
 * @method $this setRegionID($regionID)
 * @method string getRegionID()
 * @method $this setDockerVersion($dockerVersion)
 * @method string getDockerVersion()
 * @method $this setImageName($imageName)
 * @method string getImageName()
 */
class DescribeImages extends Request
{
}/**
 * @method $this setToken($token)
 * @method string getToken()
 * @method $this setReqOnce($reqOnce)
 * @method string getReqOnce()
 */
class CallbackClusterToken extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeClusterScaledNode extends Request
{
}/**
 */
class DescribeTemplates extends Request
{
}/**
 * @method $this setKubernetesVersion($kubernetesVersion)
 * @method string getKubernetesVersion()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeKubernetesTemplates extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeClusterHosts extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class CreateClusterToken extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServiceId($serviceId)
 * @method string getServiceId()
 */
class DescribeUserContainers extends Request
{
}/**
 * @method $this setToken($token)
 * @method string getToken()
 */
class RevokeClusterToken extends Request
{
}/**
 * @method $this setToken($token)
 * @method string getToken()
 * @method $this setReqOnce($reqOnce)
 * @method string getReqOnce()
 */
class CallBackAgilityCluster extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class ScaleInCluster extends Request
{
}/**
 */
class AddAgilityCluster extends Request
{
}/**
 * @method $this setToken($token)
 * @method string getToken()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeClusterNodeInfoWithInstance extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setforce($force)
 * @method string getforce()
 * @method $this setreleaseInstance($releaseInstance)
 * @method string getreleaseInstance()
 */
class DeleteClusterNode extends Request
{
}/**
 * @method $this setToken($token)
 * @method string getToken()
 */
class DescribeAgilityTunnelAgentInfo extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setpageSize($pageSize)
 * @method string getpageSize()
 * @method $this setpageNumber($pageNumber)
 * @method string getpageNumber()
 */
class DescribeClusterNodes extends Request
{
}/**
 */
class CreateTemplate extends Request
{
}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class DescribeTaskInfo extends Request
{
}/**
 */
class DescribeApiVersion extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class GetClusterProjects extends Request
{
}/**
 * @method $this setToken($token)
 * @method string getToken()
 */
class GatherLogsToken extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setComponentId($componentId)
 * @method string getComponentId()
 */
class UpgradeClusterComponents extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceId($serviceId)
 * @method string getServiceId()
 */
class DescribeServiceContainers extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class ScaleCluster extends Request
{
}/**
 * @method $this setToken($token)
 * @method string getToken()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class DownloadClusterNodeCerts extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class AttachInstances extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeClusterTokens extends Request
{
}/**
 * @method $this setToken($token)
 * @method string getToken()
 */
class DescribeAgilityTunnelCerts extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeKubernetesTemplate extends Request
{
}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 */
class GetProjectEvents extends Request
{
}/**
 */
class ModifyClusterName extends Request
{
}
