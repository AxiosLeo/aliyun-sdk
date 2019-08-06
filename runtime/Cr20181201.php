<?php

namespace aliyun\sdk\services\Cr20181201;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20181201
 *
 * @package aliyun\sdk\services\Cr20181201
 * @method DeleteRepoTag DeleteRepoTag()
 * @method ListRepoTrigger ListRepoTrigger()
 * @method ListRepoTriggerLog ListRepoTriggerLog()
 * @method ListRepository ListRepository()
 * @method GetNamespace GetNamespace()
 * @method ListRepoBuildRecordLog ListRepoBuildRecordLog()
 * @method UpdateInstanceEndpointAclStatus UpdateInstanceEndpointAclStatus()
 * @method ListRepoTag ListRepoTag()
 * @method CreateRepoSourceCodeRepo CreateRepoSourceCodeRepo()
 * @method GetRepoTagManifest GetRepoTagManifest()
 * @method CreateRepository CreateRepository()
 * @method CreateBuildRecordByRule CreateBuildRecordByRule()
 * @method DeleteRepository DeleteRepository()
 * @method GetInstanceStorageIntranetOut GetInstanceStorageIntranetOut()
 * @method GetRepoTagScanTask GetRepoTagScanTask()
 * @method GetInstanceUsage GetInstanceUsage()
 * @method DeleteRepoTrigger DeleteRepoTrigger()
 * @method CreateSourceCodeAccount CreateSourceCodeAccount()
 * @method ListSourceCodeAccount ListSourceCodeAccount()
 * @method CancelRepoBuildRecord CancelRepoBuildRecord()
 * @method CreateInstanceEndpointAclPolicy CreateInstanceEndpointAclPolicy()
 * @method DeleteRepoBuildRule DeleteRepoBuildRule()
 * @method GetInstanceStorage GetInstanceStorage()
 * @method GetInstanceCount GetInstanceCount()
 * @method ListInstanceRegion ListInstanceRegion()
 * @method ListSourceCodeRepo ListSourceCodeRepo()
 * @method DeleteNamespace DeleteNamespace()
 * @method ListInstance ListInstance()
 * @method GetInstanceStorageIntranetIn GetInstanceStorageIntranetIn()
 * @method UpdateRepoTrigger UpdateRepoTrigger()
 * @method CreateInstance CreateInstance()
 * @method GetInstanceStorageUsage GetInstanceStorageUsage()
 * @method ListUserVpc ListUserVpc()
 * @method ListSourceCodeRepoRef ListSourceCodeRepoRef()
 * @method DeleteInstanceEndpointAclPolicy DeleteInstanceEndpointAclPolicy()
 * @method CreateRepoBuildRule CreateRepoBuildRule()
 * @method ListInstanceEndpoint ListInstanceEndpoint()
 * @method GetRepoBuildRecordStatus GetRepoBuildRecordStatus()
 * @method GetInstance GetInstance()
 * @method GetAuthorizationToken GetAuthorizationToken()
 * @method CreateRepoTrigger CreateRepoTrigger()
 * @method CreateRepoTagScanTask CreateRepoTagScanTask()
 * @method GetInstanceStorageInternetIn GetInstanceStorageInternetIn()
 * @method ResetLoginPassword ResetLoginPassword()
 * @method GetInstanceEndpoint GetInstanceEndpoint()
 * @method ListRepoBuildRecord ListRepoBuildRecord()
 * @method ListNamespace ListNamespace()
 * @method UpdateNamespace UpdateNamespace()
 * @method CreateInstanceVpcEndpointLinkedVpc CreateInstanceVpcEndpointLinkedVpc()
 * @method UpdateRepoBuildRule UpdateRepoBuildRule()
 * @method GetRepoSourceCodeRepo GetRepoSourceCodeRepo()
 * @method CreateBuildRecordByRecord CreateBuildRecordByRecord()
 * @method GetInstanceVpcEndpoint GetInstanceVpcEndpoint()
 * @method UpdateRepository UpdateRepository()
 * @method GetRepository GetRepository()
 * @method UpdateInstanceEndpointStatus UpdateInstanceEndpointStatus()
 * @method GetInstanceStorageInternetOut GetInstanceStorageInternetOut()
 * @method CreateNamespace CreateNamespace()
 * @method DeleteInstanceVpcEndpointLinkedVpc DeleteInstanceVpcEndpointLinkedVpc()
 * @method ListRepoBuildRule ListRepoBuildRule()
 * @method GetRepoTagLayers GetRepoTagLayers()
 */
class V20181201
{
}

/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setTag($tag)
 * @method string getTag()
 */
class DeleteRepoTag extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 */
class ListRepoTrigger extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setTriggerId($triggerId)
 * @method string getTriggerId()
 */
class ListRepoTriggerLog extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoStatus($repoStatus)
 * @method string getRepoStatus()
 * @method $this setRepoName($repoName)
 * @method string getRepoName()
 * @method $this setRepoNamespaceName($repoNamespaceName)
 * @method string getRepoNamespaceName()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListRepository extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNamespaceName($namespaceName)
 * @method string getNamespaceName()
 */
class GetNamespace extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setBuildRecordId($buildRecordId)
 * @method string getBuildRecordId()
 * @method $this setOffset($offset)
 * @method int getOffset()
 */
class ListRepoBuildRecordLog extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setEndpointType($endpointType)
 * @method string getEndpointType()
 * @method $this setEnable($enable)
 * @method bool getEnable()
 */
class UpdateInstanceEndpointAclStatus extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListRepoTag extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setCodeRepoType($codeRepoType)
 * @method string getCodeRepoType()
 * @method $this setCodeRepoNamespaceName($codeRepoNamespaceName)
 * @method string getCodeRepoNamespaceName()
 * @method $this setCodeRepoName($codeRepoName)
 * @method string getCodeRepoName()
 * @method $this setAutoBuild($autoBuild)
 * @method bool getAutoBuild()
 * @method $this setOverseaBuild($overseaBuild)
 * @method bool getOverseaBuild()
 * @method $this setDisableCacheBuild($disableCacheBuild)
 * @method bool getDisableCacheBuild()
 */
class CreateRepoSourceCodeRepo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setSchemaVersion($schemaVersion)
 * @method int getSchemaVersion()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 */
class GetRepoTagManifest extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoName($repoName)
 * @method string getRepoName()
 * @method $this setRepoNamespaceName($repoNamespaceName)
 * @method string getRepoNamespaceName()
 * @method $this setRepoType($repoType)
 * @method string getRepoType()
 * @method $this setSummary($summary)
 * @method string getSummary()
 * @method $this setDetail($detail)
 * @method string getDetail()
 */
class CreateRepository extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setBuildRuleId($buildRuleId)
 * @method string getBuildRuleId()
 */
class CreateBuildRecordByRule extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 */
class DeleteRepository extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class GetInstanceStorageIntranetOut extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setTag($tag)
 * @method string getTag()
 */
class GetRepoTagScanTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetInstanceUsage extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setTriggerId($triggerId)
 * @method string getTriggerId()
 */
class DeleteRepoTrigger extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCodeRepoType($codeRepoType)
 * @method string getCodeRepoType()
 * @method $this setCodeRepoUrl($codeRepoUrl)
 * @method string getCodeRepoUrl()
 * @method $this setAccessToken($accessToken)
 * @method string getAccessToken()
 * @method $this setUsername($username)
 * @method string getUsername()
 */
class CreateSourceCodeAccount extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCodeRepoType($codeRepoType)
 * @method string getCodeRepoType()
 */
class ListSourceCodeAccount extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setBuildRecordId($buildRecordId)
 * @method string getBuildRecordId()
 */
class CancelRepoBuildRecord extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setEndpointType($endpointType)
 * @method string getEndpointType()
 * @method $this setEntry($entry)
 * @method string getEntry()
 * @method $this setComment($comment)
 * @method string getComment()
 */
class CreateInstanceEndpointAclPolicy extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setBuildRuleId($buildRuleId)
 * @method string getBuildRuleId()
 */
class DeleteRepoBuildRule extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetInstanceStorage extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class GetInstanceCount extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class ListInstanceRegion extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCodeRepoType($codeRepoType)
 * @method string getCodeRepoType()
 */
class ListSourceCodeRepo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNamespaceName($namespaceName)
 * @method string getNamespaceName()
 */
class DeleteNamespace extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 * @method $this setInstanceStatus($instanceStatus)
 * @method string getInstanceStatus()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListInstance extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class GetInstanceStorageIntranetIn extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setTriggerName($triggerName)
 * @method string getTriggerName()
 * @method $this setTriggerUrl($triggerUrl)
 * @method string getTriggerUrl()
 * @method $this setTriggerType($triggerType)
 * @method string getTriggerType()
 * @method $this setTriggerTag($triggerTag)
 * @method string getTriggerTag()
 * @method $this setTriggerId($triggerId)
 * @method string getTriggerId()
 */
class UpdateRepoTrigger extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 * @method $this setInstanceSpecification($instanceSpecification)
 * @method string getInstanceSpecification()
 */
class CreateInstance extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class GetInstanceStorageUsage extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListUserVpc extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 */
class ListSourceCodeRepoRef extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setEndpointType($endpointType)
 * @method string getEndpointType()
 * @method $this setEntry($entry)
 * @method string getEntry()
 */
class DeleteInstanceEndpointAclPolicy extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setDockerfileLocation($dockerfileLocation)
 * @method string getDockerfileLocation()
 * @method $this setDockerfileName($dockerfileName)
 * @method string getDockerfileName()
 * @method $this setPushType($pushType)
 * @method string getPushType()
 * @method $this setPushName($pushName)
 * @method string getPushName()
 * @method $this setImageTag($imageTag)
 * @method string getImageTag()
 */
class CreateRepoBuildRule extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ListInstanceEndpoint extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setBuildRecordId($buildRecordId)
 * @method string getBuildRecordId()
 */
class GetRepoBuildRecordStatus extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetInstance extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetAuthorizationToken extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setTriggerName($triggerName)
 * @method string getTriggerName()
 * @method $this setTriggerUrl($triggerUrl)
 * @method string getTriggerUrl()
 * @method $this setTriggerType($triggerType)
 * @method string getTriggerType()
 * @method $this setTriggerTag($triggerTag)
 * @method string getTriggerTag()
 */
class CreateRepoTrigger extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setTag($tag)
 * @method string getTag()
 */
class CreateRepoTagScanTask extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class GetInstanceStorageInternetIn extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class ResetLoginPassword extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setEndpointType($endpointType)
 * @method string getEndpointType()
 */
class GetInstanceEndpoint extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListRepoBuildRecord extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNamespaceStatus($namespaceStatus)
 * @method string getNamespaceStatus()
 * @method $this setNamespaceName($namespaceName)
 * @method string getNamespaceName()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListNamespace extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNamespaceName($namespaceName)
 * @method string getNamespaceName()
 * @method $this setAutoCreateRepo($autoCreateRepo)
 * @method bool getAutoCreateRepo()
 * @method $this setDefaultRepoType($defaultRepoType)
 * @method string getDefaultRepoType()
 */
class UpdateNamespace extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVswitchId($vswitchId)
 * @method string getVswitchId()
 */
class CreateInstanceVpcEndpointLinkedVpc extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setDockerfileLocation($dockerfileLocation)
 * @method string getDockerfileLocation()
 * @method $this setDockerfileName($dockerfileName)
 * @method string getDockerfileName()
 * @method $this setPushType($pushType)
 * @method string getPushType()
 * @method $this setPushName($pushName)
 * @method string getPushName()
 * @method $this setImageTag($imageTag)
 * @method string getImageTag()
 * @method $this setBuildRuleId($buildRuleId)
 * @method string getBuildRuleId()
 */
class UpdateRepoBuildRule extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 */
class GetRepoSourceCodeRepo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setBuildRecordId($buildRecordId)
 * @method string getBuildRecordId()
 */
class CreateBuildRecordByRecord extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetInstanceVpcEndpoint extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setRepoType($repoType)
 * @method string getRepoType()
 * @method $this setSummary($summary)
 * @method string getSummary()
 * @method $this setDetail($detail)
 * @method string getDetail()
 */
class UpdateRepository extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setRepoNamespaceName($repoNamespaceName)
 * @method string getRepoNamespaceName()
 * @method $this setRepoName($repoName)
 * @method string getRepoName()
 */
class GetRepository extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setEndpointType($endpointType)
 * @method string getEndpointType()
 * @method $this setEnable($enable)
 * @method bool getEnable()
 */
class UpdateInstanceEndpointStatus extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class GetInstanceStorageInternetOut extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNamespaceName($namespaceName)
 * @method string getNamespaceName()
 * @method $this setAutoCreateRepo($autoCreateRepo)
 * @method bool getAutoCreateRepo()
 * @method $this setDefaultRepoType($defaultRepoType)
 * @method string getDefaultRepoType()
 */
class CreateNamespace extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVswitchId($vswitchId)
 * @method string getVswitchId()
 */
class DeleteInstanceVpcEndpointLinkedVpc extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListRepoBuildRule extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRepoId($repoId)
 * @method string getRepoId()
 * @method $this setTag($tag)
 * @method string getTag()
 */
class GetRepoTagLayers extends Request
{

}