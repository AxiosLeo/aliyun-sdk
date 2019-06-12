<?php

namespace aliyun\sdk\services\CS20151215;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20151215
 *
 * @package aliyun\sdk\services\CS20151215
 * @method DescribeClusters DescribeClusters()
 * @method DescribeClusterDetail DescribeClusterDetail()
 * @method CreateCluster CreateCluster()
 * @method DeleteCluster DeleteCluster()
 * @method CheckAliyunCSServiceRole CheckAliyunCSServiceRole()
 * @method DescribeEdgeClusterAttachScripts DescribeEdgeClusterAttachScripts()
 * @method DescribeClusterCerts DescribeClusterCerts()
 * @method ResetClusterNode ResetClusterNode()
 * @method DescribeClusterLogs DescribeClusterLogs()
 * @method DescribeKubernetesVersionMetadata DescribeKubernetesVersionMetadata()
 * @method DescribeClusterUserKubeconfig DescribeClusterUserKubeconfig()
 * @method RevokeClusterToken RevokeClusterToken()
 * @method DeleteClusterNode DeleteClusterNode()
 * @method DescribeClusterEndpoints DescribeClusterEndpoints()
 * @method DescribeClusterNodes DescribeClusterNodes()
 * @method DeleteClusterNodes DeleteClusterNodes()
 * @method DescribeApiVersion DescribeApiVersion()
 * @method ScaleCluster ScaleCluster()
 * @method DownloadClusterNodeCerts DownloadClusterNodeCerts()
 * @method AttachInstances AttachInstances()
 */
class V20151215
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
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setNamePrefix($namePrefix)
 * @method string getNamePrefix()
 */
class DescribeEdgeClusterAttachScripts extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeClusterCerts extends Request
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
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setMultiAZ($multiAZ)
 * @method bool getMultiAZ()
 * @method $this setKubernetesVersion($kubernetesVersion)
 * @method string getKubernetesVersion()
 */
class DescribeKubernetesVersionMetadata extends Request
{

}/**
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeClusterUserKubeconfig extends Request
{

}/**
 * @method $this setToken($token)
 * @method string getToken()
 */
class RevokeClusterToken extends Request
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
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeClusterEndpoints extends Request
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
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DeleteClusterNodes extends Request
{

}/**
 */
class DescribeApiVersion extends Request
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

}