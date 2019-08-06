<?php

namespace aliyun\sdk\services\Emr20160408;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160408
 *
 * @package aliyun\sdk\services\Emr20160408
 * @method MetastoreCreateDatabase MetastoreCreateDatabase()
 * @method CreateDataSource CreateDataSource()
 * @method CreateETLJob CreateETLJob()
 * @method MetastoreDeleteKafkaTopic MetastoreDeleteKafkaTopic()
 * @method DescribeScalingActivity DescribeScalingActivity()
 * @method ModifyAlertContact ModifyAlertContact()
 * @method GetQueueSubmissionStatisticInfo GetQueueSubmissionStatisticInfo()
 * @method ListFlowNodeInstance ListFlowNodeInstance()
 * @method ListClusterOperationHostTask ListClusterOperationHostTask()
 * @method ListETLJobRelease ListETLJobRelease()
 * @method ModifyFlowProject ModifyFlowProject()
 * @method SubmitFlow SubmitFlow()
 * @method ListClusterOperationHost ListClusterOperationHost()
 * @method ListClusterService ListClusterService()
 * @method ListJobExecutionInstanceTrend ListJobExecutionInstanceTrend()
 * @method ListFlowInstance ListFlowInstance()
 * @method RetryExecutionPlanInstance RetryExecutionPlanInstance()
 * @method ListFlowCategory ListFlowCategory()
 * @method ListNavSubTree ListNavSubTree()
 * @method MetastoreUpdateKafkaTopicBatch MetastoreUpdateKafkaTopicBatch()
 * @method DescribeClusterV2 DescribeClusterV2()
 * @method ListEmrAvailableConfig ListEmrAvailableConfig()
 * @method CloneDataSource CloneDataSource()
 * @method MetastoreListDataSource MetastoreListDataSource()
 * @method RemoveClusterHosts RemoveClusterHosts()
 * @method ListFlowJob ListFlowJob()
 * @method DeleteUser DeleteUser()
 * @method ModifyJobExecutionPlanFolder ModifyJobExecutionPlanFolder()
 * @method ListJobMigrateInfo ListJobMigrateInfo()
 * @method DeleteFlowProjectClusterSetting DeleteFlowProjectClusterSetting()
 * @method MigrateJobs MigrateJobs()
 * @method ListSupportedServiceName ListSupportedServiceName()
 * @method ModifyResourcePoolSchedulerType ModifyResourcePoolSchedulerType()
 * @method CreateFlow CreateFlow()
 * @method ListUsers ListUsers()
 * @method DescribeClusterServiceConfigTag DescribeClusterServiceConfigTag()
 * @method DeleteFlowJob DeleteFlowJob()
 * @method DescribeEmrMainVersion DescribeEmrMainVersion()
 * @method ListResourcePool ListResourcePool()
 * @method GetUserOutputStatisticInfo GetUserOutputStatisticInfo()
 * @method CreateFlowJob CreateFlowJob()
 * @method MetastoreSearchTables MetastoreSearchTables()
 * @method ResumeFlow ResumeFlow()
 * @method GetHdfsCapacityStatisticInfo GetHdfsCapacityStatisticInfo()
 * @method MetastoreListDatabases MetastoreListDatabases()
 * @method ListClusterServiceQuickLink ListClusterServiceQuickLink()
 * @method MetastoreModifyDataResource MetastoreModifyDataResource()
 * @method ListOpsOperation ListOpsOperation()
 * @method OperateExistsNodeCluster OperateExistsNodeCluster()
 * @method GetJobMigrateResult GetJobMigrateResult()
 * @method KillFlow KillFlow()
 * @method DeleteFlowProjectById DeleteFlowProjectById()
 * @method GetLogDownloadUrl GetLogDownloadUrl()
 * @method GetJobOutputStatisticInfo GetJobOutputStatisticInfo()
 * @method DeleteFlowProject DeleteFlowProject()
 * @method DeleteExecutionPlan DeleteExecutionPlan()
 * @method ListFailureJobExecutionInstances ListFailureJobExecutionInstances()
 * @method ListJobExecutionPlanParams ListJobExecutionPlanParams()
 * @method DescribeFlowNodeInstanceContainerLog DescribeFlowNodeInstanceContainerLog()
 * @method CreateUserStatistics CreateUserStatistics()
 * @method ListDataSource ListDataSource()
 * @method CreateUserPassword CreateUserPassword()
 * @method DescribeNote DescribeNote()
 * @method MetastoreDescribeDataSource MetastoreDescribeDataSource()
 * @method DeleteResourceQueue DeleteResourceQueue()
 * @method CreateAlertUserGroup CreateAlertUserGroup()
 * @method CreateClusterV2 CreateClusterV2()
 * @method ModifyExecutionPlanBasicInfo ModifyExecutionPlanBasicInfo()
 * @method CreateScalingRule CreateScalingRule()
 * @method SubmitFlowJob SubmitFlowJob()
 * @method ModifyResourceQueue ModifyResourceQueue()
 * @method ModifyExecutionPlan ModifyExecutionPlan()
 * @method RunETLJob RunETLJob()
 * @method ListFlowNodeInstanceContainerStatus ListFlowNodeInstanceContainerStatus()
 * @method ModifyFlowJob ModifyFlowJob()
 * @method MetastoreDropTable MetastoreDropTable()
 * @method ListDependedService ListDependedService()
 * @method MigrateClusterHostGroupHost MigrateClusterHostGroupHost()
 * @method DescribeScalingTaskGroup DescribeScalingTaskGroup()
 * @method StartFlow StartFlow()
 * @method CreateFlowProjectUser CreateFlowProjectUser()
 * @method ListClusterTemplates ListClusterTemplates()
 * @method CreateParagraph CreateParagraph()
 * @method QuerySlsMetricData QuerySlsMetricData()
 * @method GetUserSubmissionStatisticInfo GetUserSubmissionStatisticInfo()
 * @method DeleteFlowProjectUser DeleteFlowProjectUser()
 * @method ListFlowClusterAll ListFlowClusterAll()
 * @method DeleteResourcePool DeleteResourcePool()
 * @method ModifyAlertUserGroup ModifyAlertUserGroup()
 * @method GetQueueOutputStatisticInfo GetQueueOutputStatisticInfo()
 * @method ModifyFlowVariableCollection ModifyFlowVariableCollection()
 * @method CreateResourcePool CreateResourcePool()
 * @method ModifyUserStatistics ModifyUserStatistics()
 * @method ListETLJobInstance ListETLJobInstance()
 * @method RerunFlow RerunFlow()
 * @method MetastoreDataPreview MetastoreDataPreview()
 * @method DeleteAlertUserGroups DeleteAlertUserGroups()
 * @method ListClusterServiceCustomActionSupportConfig ListClusterServiceCustomActionSupportConfig()
 * @method DescribeClusterScript DescribeClusterScript()
 * @method SyncDataSourceSchemaDatabase SyncDataSourceSchemaDatabase()
 * @method ListEmrAvailableResource ListEmrAvailableResource()
 * @method DeleteNote DeleteNote()
 * @method ListFlowClusterHost ListFlowClusterHost()
 * @method ModifyJobExecutionPlanParam ModifyJobExecutionPlanParam()
 * @method ListFlowClusterAllHosts ListFlowClusterAllHosts()
 * @method DescribeFlowProject DescribeFlowProject()
 * @method CloneFlow CloneFlow()
 * @method DeleteAlertDingDingGroups DeleteAlertDingDingGroups()
 * @method DeleteFlowCategory DeleteFlowCategory()
 * @method DescribeFlowProjectClusterSetting DescribeFlowProjectClusterSetting()
 * @method DescribeClusterServiceConfig DescribeClusterServiceConfig()
 * @method MetastoreDescribeDatabase MetastoreDescribeDatabase()
 * @method DescribeParagraph DescribeParagraph()
 * @method CreateFlowCategory CreateFlowCategory()
 * @method ListFlowProject ListFlowProject()
 * @method CommonApiWhiteList CommonApiWhiteList()
 * @method ListAlertContacts ListAlertContacts()
 * @method SyncDataSourceSchemaTable SyncDataSourceSchemaTable()
 * @method ContextQueryLog ContextQueryLog()
 * @method ModifyFlow ModifyFlow()
 * @method RunParagraph RunParagraph()
 * @method QueryAlarmHistory QueryAlarmHistory()
 * @method SearchLog SearchLog()
 * @method DescribeClusterResourcePoolSchedulerType DescribeClusterResourcePoolSchedulerType()
 * @method DescribeFlowInstance DescribeFlowInstance()
 * @method ListServiceLog ListServiceLog()
 * @method MetastoreListTask MetastoreListTask()
 * @method DescribeFlowJob DescribeFlowJob()
 * @method MetastoreRetryTask MetastoreRetryTask()
 * @method ListJobExecutionPlanHierarchy ListJobExecutionPlanHierarchy()
 * @method GetOpsCommandDetail GetOpsCommandDetail()
 * @method ListClusterHost ListClusterHost()
 * @method MetastoreListTablePartition MetastoreListTablePartition()
 * @method UpdateETLJob UpdateETLJob()
 * @method DescribeFlowCategory DescribeFlowCategory()
 * @method DescribeJob DescribeJob()
 * @method DescribeUserStatistics DescribeUserStatistics()
 * @method ListClusterScripts ListClusterScripts()
 * @method CreateFlowForWeb CreateFlowForWeb()
 * @method ListClusterServiceConfigHistory ListClusterServiceConfigHistory()
 * @method ReleaseCluster ReleaseCluster()
 * @method ListClusterTag ListClusterTag()
 * @method ModifyFlowProjectClusterSetting ModifyFlowProjectClusterSetting()
 * @method ListExecutionPlans ListExecutionPlans()
 * @method AddClusterService AddClusterService()
 * @method AttachPubIp AttachPubIp()
 * @method MetastoreCreateKafkaTopic MetastoreCreateKafkaTopic()
 * @method DeleteDataSource DeleteDataSource()
 * @method CreateClusterScript CreateClusterScript()
 * @method ListClusterServiceComponentHealthInfo ListClusterServiceComponentHealthInfo()
 * @method CancelETLJobRelease CancelETLJobRelease()
 * @method RetryExecutionPlan RetryExecutionPlan()
 * @method GetJobRunningTimeStatisticInfo GetJobRunningTimeStatisticInfo()
 * @method CreateUsers CreateUsers()
 * @method DescribeClusterBasicInfo DescribeClusterBasicInfo()
 * @method ModifyAlertDingDingGroup ModifyAlertDingDingGroup()
 * @method ModifyFlowCategory ModifyFlowCategory()
 * @method DescribeDataSourceSchemaTable DescribeDataSourceSchemaTable()
 * @method ListEmrMainVersion ListEmrMainVersion()
 * @method GetQueueInputStatisticInfo GetQueueInputStatisticInfo()
 * @method ResumeExecutionPlanScheduler ResumeExecutionPlanScheduler()
 * @method DescribeDataSource DescribeDataSource()
 * @method DescribeFlowNodeInstance DescribeFlowNodeInstance()
 * @method MetastoreDescribeKafkaConsumerGroup MetastoreDescribeKafkaConsumerGroup()
 * @method ListScalingRule ListScalingRule()
 * @method MetastoreListKafkaConsumerGroup MetastoreListKafkaConsumerGroup()
 * @method ReleaseETLJob ReleaseETLJob()
 * @method ReleaseClusterHostGroup ReleaseClusterHostGroup()
 * @method DescribeClusterServiceConfigHistory DescribeClusterServiceConfigHistory()
 * @method TerminateClusterOperation TerminateClusterOperation()
 * @method DescribeFlowVariableCollection DescribeFlowVariableCollection()
 * @method ListSlsLogstoreInfo ListSlsLogstoreInfo()
 * @method ListDataSourceSchemaTable ListDataSourceSchemaTable()
 * @method DeleteScalingTaskGroup DeleteScalingTaskGroup()
 * @method MetastoreCreateTable MetastoreCreateTable()
 * @method DeleteFlow DeleteFlow()
 * @method DescribeClusterOperationHostTaskLog DescribeClusterOperationHostTaskLog()
 * @method ModifyExecutionPlanClusterInfo ModifyExecutionPlanClusterInfo()
 * @method SuspendExecutionPlanScheduler SuspendExecutionPlanScheduler()
 * @method DescribeClusterStatistics DescribeClusterStatistics()
 * @method GetSupportedOpsCommand GetSupportedOpsCommand()
 * @method DetachClusterForNote DetachClusterForNote()
 * @method MetastoreUpdateKafkaTopic MetastoreUpdateKafkaTopic()
 * @method ListResourceQueue ListResourceQueue()
 * @method ListExecutionPlanInstances ListExecutionPlanInstances()
 * @method ListDataSourceSchemaDatabase ListDataSourceSchemaDatabase()
 * @method ListFlowProjectClusterSetting ListFlowProjectClusterSetting()
 * @method ModifyClusterHostGroup ModifyClusterHostGroup()
 * @method DescribeDataSourceCommand DescribeDataSourceCommand()
 * @method DeleteJob DeleteJob()
 * @method MetastoreListDataResources MetastoreListDataResources()
 * @method ModifyJob ModifyJob()
 * @method CreateAlertDingDingGroup CreateAlertDingDingGroup()
 * @method DescribeClusterTemplate DescribeClusterTemplate()
 * @method DescribeClusterService DescribeClusterService()
 * @method ModifyClusterTemplate ModifyClusterTemplate()
 * @method DeleteClusterScript DeleteClusterScript()
 * @method DescribeScalingRule DescribeScalingRule()
 * @method RunOpsCommand RunOpsCommand()
 * @method CreateJob CreateJob()
 * @method ModifyExecutionPlanScheduleInfo ModifyExecutionPlanScheduleInfo()
 * @method ModifyResourcePool ModifyResourcePool()
 * @method ListRequiredService ListRequiredService()
 * @method RenderResourcePoolXml RenderResourcePoolXml()
 * @method ListFlow ListFlow()
 * @method ResizeClusterV2 ResizeClusterV2()
 * @method DescribeETLJobSqlSchema DescribeETLJobSqlSchema()
 * @method CreateScalingTaskGroup CreateScalingTaskGroup()
 * @method DescribeFlowJobStatistic DescribeFlowJobStatistic()
 * @method CloneFlowJob CloneFlowJob()
 * @method QueryAlarmRules QueryAlarmRules()
 * @method DescribeETLJobStageOutputSchema DescribeETLJobStageOutputSchema()
 * @method DescribeSecurityGroupAttribute DescribeSecurityGroupAttribute()
 * @method MetastoreDropDatabase MetastoreDropDatabase()
 * @method GetLogHistogram GetLogHistogram()
 * @method ListClusterHostGroup ListClusterHostGroup()
 * @method ListExecutionPlanInstanceTrend ListExecutionPlanInstanceTrend()
 * @method ListClusterOperation ListClusterOperation()
 * @method CreateClusterTemplate CreateClusterTemplate()
 * @method DeleteScalingRule DeleteScalingRule()
 * @method ListFlowNodeSqlResult ListFlowNodeSqlResult()
 * @method DeleteAlertContacts DeleteAlertContacts()
 * @method ListJobExecutionInstances ListJobExecutionInstances()
 * @method KillETLJobInstance KillETLJobInstance()
 * @method ListETLJobTriggerEntity ListETLJobTriggerEntity()
 * @method CreateFlowProjectClusterSetting CreateFlowProjectClusterSetting()
 * @method CreateClusterWithTemplate CreateClusterWithTemplate()
 * @method DescribeFlowCategoryTree DescribeFlowCategoryTree()
 * @method MetastoreCreateDataResource MetastoreCreateDataResource()
 * @method CreateClusterHostGroup CreateClusterHostGroup()
 * @method ListFlowJobHistory ListFlowJobHistory()
 * @method ModifyExecutionPlanJobInfo ModifyExecutionPlanJobInfo()
 * @method AttachClusterForNote AttachClusterForNote()
 * @method GetJobInputStatisticInfo GetJobInputStatisticInfo()
 * @method StopParagraph StopParagraph()
 * @method CloneETLJob CloneETLJob()
 * @method DeleteClusterTemplate DeleteClusterTemplate()
 * @method ListExecutePlanMigrateInfo ListExecutePlanMigrateInfo()
 * @method ListScalingTaskGroup ListScalingTaskGroup()
 * @method MetastoreDeleteDataResource MetastoreDeleteDataResource()
 * @method DescribeAvailableInstanceType DescribeAvailableInstanceType()
 * @method MetastoreDescribeTable MetastoreDescribeTable()
 * @method DescribeClusterOpLog DescribeClusterOpLog()
 * @method RefreshClusterResourcePool RefreshClusterResourcePool()
 * @method ModifyFlowForWeb ModifyFlowForWeb()
 * @method MetastoreListKafkaTopic MetastoreListKafkaTopic()
 * @method ModifyClusterServiceConfig ModifyClusterServiceConfig()
 * @method ListUserStatistics ListUserStatistics()
 * @method ListClusterHostComponent ListClusterHostComponent()
 * @method DescribeFlowNodeInstanceLauncherLog DescribeFlowNodeInstanceLauncherLog()
 * @method ModifyScalingTaskGroup ModifyScalingTaskGroup()
 * @method CreateFlowProject CreateFlowProject()
 * @method RunNoteParagraphs RunNoteParagraphs()
 * @method MetastoreDescribeTask MetastoreDescribeTask()
 * @method KillExecutionJobInstance KillExecutionJobInstance()
 * @method ListAlertUserGroup ListAlertUserGroup()
 * @method ListNotes ListNotes()
 * @method ListFlowProjectUser ListFlowProjectUser()
 * @method CheckDataSource CheckDataSource()
 * @method SaveParagraph SaveParagraph()
 * @method DescribeExecutionPlan DescribeExecutionPlan()
 * @method RetryCreateUserPassword RetryCreateUserPassword()
 * @method KillExecutionPlanInstance KillExecutionPlanInstance()
 * @method MetastoreListTables MetastoreListTables()
 * @method GetOpsCommandResult GetOpsCommandResult()
 * @method ResolveETLJobSqlSchema ResolveETLJobSqlSchema()
 * @method DeleteParagraph DeleteParagraph()
 * @method CreateNote CreateNote()
 * @method UpdateNavNode UpdateNavNode()
 * @method DeleteNavNode DeleteNavNode()
 * @method UpdateDataSource UpdateDataSource()
 * @method CreateAlertContact CreateAlertContact()
 * @method CreateNavNode CreateNavNode()
 * @method DeleteClusterHostGroup DeleteClusterHostGroup()
 * @method UpdateETLJobStage UpdateETLJobStage()
 * @method AuthorizeSecurityGroup AuthorizeSecurityGroup()
 * @method ListJobs ListJobs()
 * @method ModifyScalingRule ModifyScalingRule()
 * @method RunClusterServiceAction RunClusterServiceAction()
 * @method CancelOrder CancelOrder()
 * @method GetOpsCommandResultOnce GetOpsCommandResultOnce()
 * @method ListAlertDingDingGroup ListAlertDingDingGroup()
 * @method MetastoreDescribeKafkaTopic MetastoreDescribeKafkaTopic()
 * @method MetastoreUpdateTable MetastoreUpdateTable()
 * @method DeleteETLJob DeleteETLJob()
 * @method RunExecutionPlan RunExecutionPlan()
 * @method DescribeETLJobInstance DescribeETLJobInstance()
 * @method GetUserInputStatisticInfo GetUserInputStatisticInfo()
 * @method ListJobInstanceWorkers ListJobInstanceWorkers()
 * @method ListOpsOperationTask ListOpsOperationTask()
 * @method DescribeETLJob DescribeETLJob()
 * @method ListClusters ListClusters()
 * @method UpdateProjectSetting UpdateProjectSetting()
 * @method CreateVerificationCode CreateVerificationCode()
 * @method DescribeFlow DescribeFlow()
 * @method ResumeExecutionPlanInstance ResumeExecutionPlanInstance()
 * @method SuspendFlow SuspendFlow()
 * @method CreateResourceQueue CreateResourceQueue()
 * @method ListScalingActivity ListScalingActivity()
 * @method DescribeDataSourceSchemaDatabase DescribeDataSourceSchemaDatabase()
 * @method ModifyClusterName ModifyClusterName()
 * @method KillFlowJob KillFlowJob()
 * @method ListFlowCluster ListFlowCluster()
 * @method SuspendExecutionPlanInstance SuspendExecutionPlanInstance()
 * @method CreateExecutionPlan CreateExecutionPlan()
 */
class V20160408
{
}

/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setDataSourceId($dataSourceId)
 * @method string getDataSourceId()
 * @method $this setLocationUri($locationUri)
 * @method string getLocationUri()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setDbSource($dbSource)
 * @method string getDbSource()
 * @method $this setClusterBizId($clusterBizId)
 * @method string getClusterBizId()
 * @method $this setComment($comment)
 * @method string getComment()
 */
class MetastoreCreateDatabase extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setConf($conf)
 * @method string getConf()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setNavParentId($navParentId)
 * @method string getNavParentId()
 */
class CreateDataSource extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setNavParentId($navParentId)
 * @method string getNavParentId()
 */
class CreateETLJob extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 */
class MetastoreDeleteKafkaTopic extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setScalingActivityId($scalingActivityId)
 * @method string getScalingActivityId()
 */
class DescribeScalingActivity extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setEmailVerificationCode($emailVerificationCode)
 * @method string getEmailVerificationCode()
 * @method $this setPhoneNumberVerificationCode($phoneNumberVerificationCode)
 * @method string getPhoneNumberVerificationCode()
 */
class ModifyAlertContact extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setFromDatetime($fromDatetime)
 * @method string getFromDatetime()
 * @method $this setToDatetime($toDatetime)
 * @method string getToDatetime()
 * @method $this setApplicationType($applicationType)
 * @method string getApplicationType()
 * @method $this setFinalStatus($finalStatus)
 * @method string getFinalStatus()
 */
class GetQueueSubmissionStatisticInfo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setStatusList($statusList)
 * @method array getStatusList()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListFlowNodeInstance extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setOperationId($operationId)
 * @method string getOperationId()
 * @method $this setHostId($hostId)
 * @method string getHostId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusterOperationHostTask extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setEtlJobId($etlJobId)
 * @method string getEtlJobId()
 * @method $this setReleaseId($releaseId)
 * @method string getReleaseId()
 * @method $this setReleaseVersion($releaseVersion)
 * @method int getReleaseVersion()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class ListETLJobRelease extends Request
{

}/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyFlowProject extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setFlowId($flowId)
 * @method string getFlowId()
 * @method $this setConf($conf)
 * @method string getConf()
 */
class SubmitFlow extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setOperationId($operationId)
 * @method string getOperationId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusterOperationHost extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusterService extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ListJobExecutionInstanceTrend extends Request
{

}/**
 * @method $this setId($id)
 * @method string getId()
 * @method $this setFlowId($flowId)
 * @method string getFlowId()
 * @method $this setFlowName($flowName)
 * @method string getFlowName()
 * @method $this setOwner($owner)
 * @method string getOwner()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTimeRange($timeRange)
 * @method string getTimeRange()
 * @method $this setStatusList($statusList)
 * @method array getStatusList()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setOrderType($orderType)
 * @method string getOrderType()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListFlowInstance extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setArguments($arguments)
 * @method string getArguments()
 * @method $this setRerunFail($rerunFail)
 * @method bool getRerunFail()
 */
class RetryExecutionPlanInstance extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setParentId($parentId)
 * @method string getParentId()
 * @method $this setRoot($root)
 * @method bool getRoot()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListFlowCategory extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setParentId($parentId)
 * @method string getParentId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setName($name)
 * @method string getName()
 */
class ListNavSubTree extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTopicParam($topicParam)
 * @method array getTopicParam()
 */
class MetastoreUpdateKafkaTopicBatch extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeClusterV2 extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ListEmrAvailableConfig extends Request
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
class CloneDataSource extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDataSourceName($dataSourceName)
 * @method string getDataSourceName()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setClusterReleased($clusterReleased)
 * @method bool getClusterReleased()
 */
class MetastoreListDataSource extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostIdList($hostIdList)
 * @method array getHostIdList()
 */
class RemoveClusterHosts extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setAdhoc($adhoc)
 * @method bool getAdhoc()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListFlowJob extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setType($type)
 * @method string getType()
 */
class DeleteUser extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setParentId($parentId)
 * @method int getParentId()
 * @method $this setName($name)
 * @method string getName()
 */
class ModifyJobExecutionPlanFolder extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setCurrentSize($currentSize)
 * @method int getCurrentSize()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListJobMigrateInfo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DeleteFlowProjectClusterSetting extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class MigrateJobs extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ListSupportedServiceName extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setSchedulerType($schedulerType)
 * @method string getSchedulerType()
 */
class ModifyResourcePoolSchedulerType extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setStartSchedule($startSchedule)
 * @method int getStartSchedule()
 * @method $this setEndSchedule($endSchedule)
 * @method int getEndSchedule()
 * @method $this setCronExpr($cronExpr)
 * @method string getCronExpr()
 * @method $this setCreateCluster($createCluster)
 * @method bool getCreateCluster()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setApplication($application)
 * @method string getApplication()
 * @method $this setAlertConf($alertConf)
 * @method string getAlertConf()
 * @method $this setAlertUserGroupBizId($alertUserGroupBizId)
 * @method string getAlertUserGroupBizId()
 * @method $this setAlertDingDingGroupBizId($alertDingDingGroupBizId)
 * @method string getAlertDingDingGroupBizId()
 * @method $this setParentFlowList($parentFlowList)
 * @method string getParentFlowList()
 * @method $this setParentCategory($parentCategory)
 * @method string getParentCategory()
 */
class CreateFlow extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setType($type)
 * @method string getType()
 */
class ListUsers extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setConfigTag($configTag)
 * @method string getConfigTag()
 */
class DescribeClusterServiceConfigTag extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 */
class DeleteFlowJob extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEmrVersion($emrVersion)
 * @method string getEmrVersion()
 */
class DescribeEmrMainVersion extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setPoolType($poolType)
 * @method string getPoolType()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListResourcePool extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setFromDatetime($fromDatetime)
 * @method string getFromDatetime()
 * @method $this setToDatetime($toDatetime)
 * @method string getToDatetime()
 */
class GetUserOutputStatisticInfo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setFailAct($failAct)
 * @method string getFailAct()
 * @method $this setMaxRetry($maxRetry)
 * @method int getMaxRetry()
 * @method $this setRetryInterval($retryInterval)
 * @method int getRetryInterval()
 * @method $this setParams($params)
 * @method string getParams()
 * @method $this setParamConf($paramConf)
 * @method string getParamConf()
 * @method $this setEnvConf($envConf)
 * @method string getEnvConf()
 * @method $this setRunConf($runConf)
 * @method string getRunConf()
 * @method $this setMonitorConf($monitorConf)
 * @method string getMonitorConf()
 * @method $this setMode($mode)
 * @method string getMode()
 * @method $this setParentCategory($parentCategory)
 * @method string getParentCategory()
 * @method $this setResourceList($resourceList)
 * @method array getResourceList()
 * @method $this setAdhoc($adhoc)
 * @method bool getAdhoc()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setAlertConf($alertConf)
 * @method string getAlertConf()
 */
class CreateFlowJob extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 */
class MetastoreSearchTables extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setFlowInstanceId($flowInstanceId)
 * @method string getFlowInstanceId()
 */
class ResumeFlow extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setFromDatetime($fromDatetime)
 * @method string getFromDatetime()
 * @method $this setToDatetime($toDatetime)
 * @method string getToDatetime()
 */
class GetHdfsCapacityStatisticInfo extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setFuzzyDatabaseName($fuzzyDatabaseName)
 * @method string getFuzzyDatabaseName()
 */
class MetastoreListDatabases extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 */
class ListClusterServiceQuickLink extends Request
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
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setDefault($default)
 * @method bool getDefault()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class MetastoreModifyDataResource extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class ListOpsOperation extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLogPath($logPath)
 * @method string getLogPath()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setEmrVer($emrVer)
 * @method string getEmrVer()
 * @method $this setOptionSoftWareList($optionSoftWareList)
 * @method array getOptionSoftWareList()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setHighAvailabilityEnable($highAvailabilityEnable)
 * @method bool getHighAvailabilityEnable()
 * @method $this setUseLocalMetaDb($useLocalMetaDb)
 * @method bool getUseLocalMetaDb()
 * @method $this setIoOptimized($ioOptimized)
 * @method bool getIoOptimized()
 * @method $this setEasEnable($easEnable)
 * @method bool getEasEnable()
 * @method $this setDepositType($depositType)
 * @method string getDepositType()
 * @method $this setMachineType($machineType)
 * @method string getMachineType()
 * @method $this setInstanceIdList($instanceIdList)
 * @method array getInstanceIdList()
 * @method $this setMasterInstanceIdList($masterInstanceIdList)
 * @method array getMasterInstanceIdList()
 * @method $this setIsResize($isResize)
 * @method bool getIsResize()
 * @method $this setOperateType($operateType)
 * @method string getOperateType()
 */
class OperateExistsNodeCluster extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class GetJobMigrateResult extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setFlowInstanceId($flowInstanceId)
 * @method string getFlowInstanceId()
 */
class KillFlow extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 */
class DeleteFlowProjectById extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setLogstoreName($logstoreName)
 * @method string getLogstoreName()
 * @method $this setLogFileName($logFileName)
 * @method string getLogFileName()
 */
class GetLogDownloadUrl extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setFromDatetime($fromDatetime)
 * @method string getFromDatetime()
 * @method $this setToDatetime($toDatetime)
 * @method string getToDatetime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class GetJobOutputStatisticInfo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 */
class DeleteFlowProject extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCount($count)
 * @method int getCount()
 */
class ListFailureJobExecutionInstances extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setParamBizType($paramBizType)
 * @method string getParamBizType()
 * @method $this setRelateId($relateId)
 * @method string getRelateId()
 */
class ListJobExecutionPlanParams extends Request
{

}/**
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setNodeInstanceId($nodeInstanceId)
 * @method string getNodeInstanceId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setContainerId($containerId)
 * @method string getContainerId()
 * @method $this setLogName($logName)
 * @method string getLogName()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeFlowNodeInstanceContainerLog extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class CreateUserStatistics extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setSourceType($sourceType)
 * @method string getSourceType()
 * @method $this setCreateFrom($createFrom)
 * @method string getCreateFrom()
 */
class ListDataSource extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setUserInfo($userInfo)
 * @method array getUserInfo()
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class CreateUserPassword extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeNote extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDataSourceId($dataSourceId)
 * @method string getDataSourceId()
 */
class MetastoreDescribeDataSource extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourceQueueId($resourceQueueId)
 * @method string getResourceQueueId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DeleteResourceQueue extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setUserList($userList)
 * @method string getUserList()
 */
class CreateAlertUserGroup extends Request
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
 * @method $this setLogPath($logPath)
 * @method string getLogPath()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setIsOpenPublicIp($isOpenPublicIp)
 * @method bool getIsOpenPublicIp()
 * @method $this setSecurityGroupName($securityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setAutoRenew($autoRenew)
 * @method bool getAutoRenew()
 * @method $this setAutoPayOrder($autoPayOrder)
 * @method bool getAutoPayOrder()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setUserDefinedEmrEcsRole($userDefinedEmrEcsRole)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this setEmrVer($emrVer)
 * @method string getEmrVer()
 * @method $this setOptionSoftWareList($optionSoftWareList)
 * @method array getOptionSoftWareList()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setHighAvailabilityEnable($highAvailabilityEnable)
 * @method bool getHighAvailabilityEnable()
 * @method $this setUseLocalMetaDb($useLocalMetaDb)
 * @method bool getUseLocalMetaDb()
 * @method $this setIoOptimized($ioOptimized)
 * @method bool getIoOptimized()
 * @method $this setSshEnable($sshEnable)
 * @method bool getSshEnable()
 * @method $this setInstanceGeneration($instanceGeneration)
 * @method string getInstanceGeneration()
 * @method $this setMasterPwd($masterPwd)
 * @method string getMasterPwd()
 * @method $this setKeyPairName($keyPairName)
 * @method string getKeyPairName()
 * @method $this setUserInfo($userInfo)
 * @method array getUserInfo()
 * @method $this setHostComponentInfo($hostComponentInfo)
 * @method array getHostComponentInfo()
 * @method $this setDepositType($depositType)
 * @method string getDepositType()
 * @method $this setMachineType($machineType)
 * @method string getMachineType()
 * @method $this setHostGroup($hostGroup)
 * @method array getHostGroup()
 * @method $this setBootstrapAction($bootstrapAction)
 * @method array getBootstrapAction()
 * @method $this setUseCustomHiveMetaDB($useCustomHiveMetaDB)
 * @method bool getUseCustomHiveMetaDB()
 * @method $this setInitCustomHiveMetaDB($initCustomHiveMetaDB)
 * @method bool getInitCustomHiveMetaDB()
 * @method $this setConfig($config)
 * @method array getConfig()
 * @method $this setConfigurations($configurations)
 * @method string getConfigurations()
 * @method $this setEasEnable($easEnable)
 * @method bool getEasEnable()
 * @method $this setRelatedClusterId($relatedClusterId)
 * @method string getRelatedClusterId()
 * @method $this setWhiteListType($whiteListType)
 * @method string getWhiteListType()
 * @method $this setAuthorizeContent($authorizeContent)
 * @method string getAuthorizeContent()
 */
class CreateClusterV2 extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setName($name)
 * @method string getName()
 */
class ModifyExecutionPlanBasicInfo extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setRuleCategory($ruleCategory)
 * @method string getRuleCategory()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setAdjustmentType($adjustmentType)
 * @method string getAdjustmentType()
 * @method $this setAdjustmentValue($adjustmentValue)
 * @method int getAdjustmentValue()
 * @method $this setCooldown($cooldown)
 * @method int getCooldown()
 * @method $this setLaunchTime($launchTime)
 * @method string getLaunchTime()
 * @method $this setLaunchExpirationTime($launchExpirationTime)
 * @method int getLaunchExpirationTime()
 * @method $this setRecurrenceType($recurrenceType)
 * @method string getRecurrenceType()
 * @method $this setRecurrenceValue($recurrenceValue)
 * @method string getRecurrenceValue()
 * @method $this setRecurrenceEndTime($recurrenceEndTime)
 * @method string getRecurrenceEndTime()
 * @method $this setSchedulerTrigger($schedulerTrigger)
 * @method array getSchedulerTrigger()
 * @method $this setCloudWatchTrigger($cloudWatchTrigger)
 * @method array getCloudWatchTrigger()
 */
class CreateScalingRule extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setConf($conf)
 * @method string getConf()
 */
class SubmitFlowJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setQualifiedName($qualifiedName)
 * @method string getQualifiedName()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setParentQueueId($parentQueueId)
 * @method int getParentQueueId()
 * @method $this setLeaf($leaf)
 * @method bool getLeaf()
 * @method $this setResourcePoolId($resourcePoolId)
 * @method int getResourcePoolId()
 * @method $this setConfig($config)
 * @method array getConfig()
 */
class ModifyResourceQueue extends Request
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
 * @method $this setOptionSoftWareList($optionSoftWareList)
 * @method array getOptionSoftWareList()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setHighAvailabilityEnable($highAvailabilityEnable)
 * @method bool getHighAvailabilityEnable()
 * @method $this setUseLocalMetaDb($useLocalMetaDb)
 * @method bool getUseLocalMetaDb()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setUserDefinedEmrEcsRole($userDefinedEmrEcsRole)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this setIoOptimized($ioOptimized)
 * @method bool getIoOptimized()
 * @method $this setInstanceGeneration($instanceGeneration)
 * @method string getInstanceGeneration()
 * @method $this setEasEnable($easEnable)
 * @method bool getEasEnable()
 * @method $this setWorkflowDefinition($workflowDefinition)
 * @method string getWorkflowDefinition()
 * @method $this setEcsOrder($ecsOrder)
 * @method array getEcsOrder()
 * @method $this setBootstrapAction($bootstrapAction)
 * @method array getBootstrapAction()
 * @method $this setUseCustomHiveMetaDB($useCustomHiveMetaDB)
 * @method bool getUseCustomHiveMetaDB()
 * @method $this setInitCustomHiveMetaDB($initCustomHiveMetaDB)
 * @method bool getInitCustomHiveMetaDB()
 * @method $this setConfig($config)
 * @method array getConfig()
 * @method $this setConfigurations($configurations)
 * @method string getConfigurations()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setExecutionPlanVersion($executionPlanVersion)
 * @method int getExecutionPlanVersion()
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
 * @method $this setDayOfWeek($dayOfWeek)
 * @method string getDayOfWeek()
 * @method $this setDayOfMonth($dayOfMonth)
 * @method string getDayOfMonth()
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
 * @method $this setInstanceRunParam($instanceRunParam)
 * @method array getInstanceRunParam()
 * @method $this setIsDebug($isDebug)
 * @method bool getIsDebug()
 */
class RunETLJob extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setNodeInstanceId($nodeInstanceId)
 * @method string getNodeInstanceId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ListFlowNodeInstanceContainerStatus extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFailAct($failAct)
 * @method string getFailAct()
 * @method $this setMaxRetry($maxRetry)
 * @method int getMaxRetry()
 * @method $this setRetryInterval($retryInterval)
 * @method int getRetryInterval()
 * @method $this setParams($params)
 * @method string getParams()
 * @method $this setParamConf($paramConf)
 * @method string getParamConf()
 * @method $this setCustomVariables($customVariables)
 * @method string getCustomVariables()
 * @method $this setEnvConf($envConf)
 * @method string getEnvConf()
 * @method $this setRunConf($runConf)
 * @method string getRunConf()
 * @method $this setMonitorConf($monitorConf)
 * @method string getMonitorConf()
 * @method $this setMode($mode)
 * @method string getMode()
 * @method $this setResourceList($resourceList)
 * @method array getResourceList()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setAlertConf($alertConf)
 * @method string getAlertConf()
 */
class ModifyFlowJob extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 * @method $this setDatabaseId($databaseId)
 * @method string getDatabaseId()
 * @method $this setTableId($tableId)
 * @method string getTableId()
 */
class MetastoreDropTable extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 */
class ListDependedService extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setHostInstanceIdList($hostInstanceIdList)
 * @method array getHostInstanceIdList()
 */
class MigrateClusterHostGroupHost extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 */
class DescribeScalingTaskGroup extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setFlowInstanceId($flowInstanceId)
 * @method string getFlowInstanceId()
 */
class StartFlow extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setUser($user)
 * @method array getUser()
 */
class CreateFlowProjectUser extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusterTemplates extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setNoteId($noteId)
 * @method string getNoteId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setText($text)
 * @method string getText()
 */
class CreateParagraph extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setStartTimeStamp($startTimeStamp)
 * @method int getStartTimeStamp()
 * @method $this setEndTimeStamp($endTimeStamp)
 * @method int getEndTimeStamp()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostRole($hostRole)
 * @method string getHostRole()
 */
class QuerySlsMetricData extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setFromDatetime($fromDatetime)
 * @method string getFromDatetime()
 * @method $this setToDatetime($toDatetime)
 * @method string getToDatetime()
 * @method $this setApplicationType($applicationType)
 * @method string getApplicationType()
 * @method $this setFinalStatus($finalStatus)
 * @method string getFinalStatus()
 */
class GetUserSubmissionStatisticInfo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class DeleteFlowProjectUser extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ListFlowClusterAll extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setResourcePoolId($resourcePoolId)
 * @method string getResourcePoolId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DeleteResourcePool extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setUserList($userList)
 * @method string getUserList()
 */
class ModifyAlertUserGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setFromDatetime($fromDatetime)
 * @method string getFromDatetime()
 * @method $this setToDatetime($toDatetime)
 * @method string getToDatetime()
 */
class GetQueueOutputStatisticInfo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setData($data)
 * @method string getData()
 */
class ModifyFlowVariableCollection extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setPoolType($poolType)
 * @method string getPoolType()
 * @method $this setActive($active)
 * @method bool getActive()
 * @method $this setNote($note)
 * @method string getNote()
 * @method $this setYarnSiteConfig($yarnSiteConfig)
 * @method string getYarnSiteConfig()
 * @method $this setConfig($config)
 * @method array getConfig()
 */
class CreateResourcePool extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setJobNum($jobNum)
 * @method int getJobNum()
 * @method $this setExecutePlanNum($executePlanNum)
 * @method int getExecutePlanNum()
 * @method $this setInteractionJobNum($interactionJobNum)
 * @method int getInteractionJobNum()
 * @method $this setJobMigratedNum($jobMigratedNum)
 * @method int getJobMigratedNum()
 * @method $this setExecutePlanMigratedNum($executePlanMigratedNum)
 * @method int getExecutePlanMigratedNum()
 * @method $this setInteractionJobMigratedNum($interactionJobMigratedNum)
 * @method int getInteractionJobMigratedNum()
 */
class ModifyUserStatistics extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setEtlJobId($etlJobId)
 * @method string getEtlJobId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class ListETLJobInstance extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setFlowInstanceId($flowInstanceId)
 * @method string getFlowInstanceId()
 * @method $this setReRunFail($reRunFail)
 * @method bool getReRunFail()
 */
class RerunFlow extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 */
class MetastoreDataPreview extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIds($ids)
 * @method string getIds()
 */
class DeleteAlertUserGroups extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setServiceCustomActionName($serviceCustomActionName)
 * @method string getServiceCustomActionName()
 */
class ListClusterServiceCustomActionSupportConfig extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeClusterScript extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEtlJobId($etlJobId)
 * @method string getEtlJobId()
 * @method $this setDataSourceId($dataSourceId)
 * @method string getDataSourceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class SyncDataSourceSchemaDatabase extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDestinationResource($destinationResource)
 * @method string getDestinationResource()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setInstanceChargeType($instanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setSpotStrategy($spotStrategy)
 * @method string getSpotStrategy()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setInstanceType($instanceType)
 * @method string getInstanceType()
 * @method $this setSystemDiskType($systemDiskType)
 * @method string getSystemDiskType()
 * @method $this setDataDiskType($dataDiskType)
 * @method string getDataDiskType()
 * @method $this setDepositType($depositType)
 * @method string getDepositType()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class ListEmrAvailableResource extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DeleteNote extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class ListFlowClusterHost extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setParamName($paramName)
 * @method string getParamName()
 * @method $this setParamValue($paramValue)
 * @method string getParamValue()
 */
class ModifyJobExecutionPlanParam extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class ListFlowClusterAllHosts extends Request
{

}/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeFlowProject extends Request
{

}/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class CloneFlow extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIds($ids)
 * @method string getIds()
 */
class DeleteAlertDingDingGroups extends Request
{

}/**
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 */
class DeleteFlowCategory extends Request
{

}/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeFlowProjectClusterSetting extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setConfigVersion($configVersion)
 * @method string getConfigVersion()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setHostInstanceId($hostInstanceId)
 * @method string getHostInstanceId()
 * @method $this setTagValue($tagValue)
 * @method string getTagValue()
 */
class DescribeClusterServiceConfig extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setId($id)
 * @method string getId()
 */
class MetastoreDescribeDatabase extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setNoteId($noteId)
 * @method string getNoteId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeParagraph extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setParentId($parentId)
 * @method string getParentId()
 */
class CreateFlowCategory extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListFlowProject extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class CommonApiWhiteList extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFromApp($fromApp)
 * @method string getFromApp()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setIds($ids)
 * @method string getIds()
 */
class ListAlertContacts extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEtlJobId($etlJobId)
 * @method string getEtlJobId()
 * @method $this setDataSourceId($dataSourceId)
 * @method string getDataSourceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 */
class SyncDataSourceSchemaTable extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setLogStore($logStore)
 * @method string getLogStore()
 * @method $this setFrom($from)
 * @method int getFrom()
 * @method $this setTo($to)
 * @method int getTo()
 * @method $this setPackMeta($packMeta)
 * @method string getPackMeta()
 * @method $this setPackId($packId)
 * @method string getPackId()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setTotalOffset($totalOffset)
 * @method int getTotalOffset()
 * @method $this setReverse($reverse)
 * @method bool getReverse()
 */
class ContextQueryLog extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setPeriodic($periodic)
 * @method bool getPeriodic()
 * @method $this setStartSchedule($startSchedule)
 * @method int getStartSchedule()
 * @method $this setEndSchedule($endSchedule)
 * @method int getEndSchedule()
 * @method $this setCronExpr($cronExpr)
 * @method string getCronExpr()
 * @method $this setCreateCluster($createCluster)
 * @method bool getCreateCluster()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setApplication($application)
 * @method string getApplication()
 * @method $this setAlertConf($alertConf)
 * @method string getAlertConf()
 * @method $this setAlertUserGroupBizId($alertUserGroupBizId)
 * @method string getAlertUserGroupBizId()
 * @method $this setAlertDingDingGroupBizId($alertDingDingGroupBizId)
 * @method string getAlertDingDingGroupBizId()
 * @method $this setParentFlowList($parentFlowList)
 * @method string getParentFlowList()
 * @method $this setParentCategory($parentCategory)
 * @method string getParentCategory()
 */
class ModifyFlow extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setNoteId($noteId)
 * @method string getNoteId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setText($text)
 * @method string getText()
 */
class RunParagraph extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setStartTimeStamp($startTimeStamp)
 * @method int getStartTimeStamp()
 * @method $this setEndTimeStamp($endTimeStamp)
 * @method int getEndTimeStamp()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setSize($size)
 * @method int getSize()
 */
class QueryAlarmHistory extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostInnerIp($hostInnerIp)
 * @method string getHostInnerIp()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setLogstoreName($logstoreName)
 * @method string getLogstoreName()
 * @method $this setFromTimestamp($fromTimestamp)
 * @method int getFromTimestamp()
 * @method $this setToTimestamp($toTimestamp)
 * @method int getToTimestamp()
 * @method $this setSlsQueryString($slsQueryString)
 * @method string getSlsQueryString()
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setLine($line)
 * @method int getLine()
 * @method $this setReverse($reverse)
 * @method bool getReverse()
 */
class SearchLog extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeClusterResourcePoolSchedulerType extends Request
{

}/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeFlowInstance extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setLogstoreName($logstoreName)
 * @method string getLogstoreName()
 * @method $this setMarker($marker)
 * @method string getMarker()
 * @method $this setMaxKeys($maxKeys)
 * @method int getMaxKeys()
 */
class ListServiceLog extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setDataSourceId($dataSourceId)
 * @method string getDataSourceId()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setTaskStatus($taskStatus)
 * @method string getTaskStatus()
 * @method $this setTaskSourceType($taskSourceType)
 * @method string getTaskSourceType()
 */
class MetastoreListTask extends Request
{

}/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeFlowJob extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class MetastoreRetryTask extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentId($currentId)
 * @method int getCurrentId()
 */
class ListJobExecutionPlanHierarchy extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOpsCommandName($opsCommandName)
 * @method string getOpsCommandName()
 */
class GetOpsCommandDetail extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostInstanceId($hostInstanceId)
 * @method string getHostInstanceId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setPrivateIp($privateIp)
 * @method string getPrivateIp()
 * @method $this setPublicIp($publicIp)
 * @method string getPublicIp()
 * @method $this setGroupType($groupType)
 * @method string getGroupType()
 * @method $this setComponentName($componentName)
 * @method string getComponentName()
 * @method $this setStatusList($statusList)
 * @method array getStatusList()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusterHost extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDatabaseId($databaseId)
 * @method string getDatabaseId()
 * @method $this setTableId($tableId)
 * @method string getTableId()
 */
class MetastoreListTablePartition extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setCheck($check)
 * @method bool getCheck()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setClusterConfig($clusterConfig)
 * @method string getClusterConfig()
 * @method $this setTriggerRule($triggerRule)
 * @method array getTriggerRule()
 * @method $this setAlertConfig($alertConfig)
 * @method string getAlertConfig()
 * @method $this setStage($stage)
 * @method array getStage()
 * @method $this setStageConnection($stageConnection)
 * @method array getStageConnection()
 */
class UpdateETLJob extends Request
{

}/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeFlowCategory extends Request
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
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class DescribeUserStatistics extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class ListClusterScripts extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setStartSchedule($startSchedule)
 * @method int getStartSchedule()
 * @method $this setEndSchedule($endSchedule)
 * @method int getEndSchedule()
 * @method $this setCronExpr($cronExpr)
 * @method string getCronExpr()
 * @method $this setCreateCluster($createCluster)
 * @method bool getCreateCluster()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setGraph($graph)
 * @method string getGraph()
 * @method $this setAlertConf($alertConf)
 * @method string getAlertConf()
 * @method $this setAlertUserGroupBizId($alertUserGroupBizId)
 * @method string getAlertUserGroupBizId()
 * @method $this setAlertDingDingGroupBizId($alertDingDingGroupBizId)
 * @method string getAlertDingDingGroupBizId()
 * @method $this setParentFlowList($parentFlowList)
 * @method string getParentFlowList()
 * @method $this setParentCategory($parentCategory)
 * @method string getParentCategory()
 */
class CreateFlowForWeb extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setConfigVersion($configVersion)
 * @method string getConfigVersion()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusterServiceConfigHistory extends Request
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
 * @method $this setClusterIdList($clusterIdList)
 * @method array getClusterIdList()
 */
class ListClusterTag extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setDefaultUser($defaultUser)
 * @method string getDefaultUser()
 * @method $this setDefaultQueue($defaultQueue)
 * @method string getDefaultQueue()
 * @method $this setUserList($userList)
 * @method array getUserList()
 * @method $this setQueueList($queueList)
 * @method array getQueueList()
 * @method $this setHostList($hostList)
 * @method array getHostList()
 */
class ModifyFlowProjectClusterSetting extends Request
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
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setQueryString($queryString)
 * @method string getQueryString()
 */
class ListExecutionPlans extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setComment($comment)
 * @method string getComment()
 * @method $this setService($service)
 * @method array getService()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class AddClusterService extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setInstanceIds($instanceIds)
 * @method array getInstanceIds()
 */
class AttachPubIp extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDataSourceId($dataSourceId)
 * @method string getDataSourceId()
 * @method $this setTopicName($topicName)
 * @method string getTopicName()
 * @method $this setNumPartitions($numPartitions)
 * @method int getNumPartitions()
 * @method $this setReplicationFactor($replicationFactor)
 * @method int getReplicationFactor()
 * @method $this setAdvancedConfig($advancedConfig)
 * @method array getAdvancedConfig()
 */
class MetastoreCreateKafkaTopic extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DeleteDataSource extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPath($path)
 * @method string getPath()
 * @method $this setArgs($args)
 * @method string getArgs()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setNodeIdList($nodeIdList)
 * @method string getNodeIdList()
 */
class CreateClusterScript extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 */
class ListClusterServiceComponentHealthInfo extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEtlJobId($etlJobId)
 * @method string getEtlJobId()
 * @method $this setReleaseId($releaseId)
 * @method string getReleaseId()
 */
class CancelETLJobRelease extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setExecutionPlanWorkNodeIds($executionPlanWorkNodeIds)
 * @method string getExecutionPlanWorkNodeIds()
 */
class RetryExecutionPlan extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setFromDatetime($fromDatetime)
 * @method string getFromDatetime()
 * @method $this setToDatetime($toDatetime)
 * @method string getToDatetime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class GetJobRunningTimeStatisticInfo extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setUserInfo($userInfo)
 * @method array getUserInfo()
 */
class CreateUsers extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeClusterBasicInfo extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setWebHookUrl($webHookUrl)
 * @method string getWebHookUrl()
 */
class ModifyAlertDingDingGroup extends Request
{

}/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setParentId($parentId)
 * @method string getParentId()
 */
class ModifyFlowCategory extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDataSourceId($dataSourceId)
 * @method string getDataSourceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 */
class DescribeDataSourceSchemaTable extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEmrVersion($emrVersion)
 * @method string getEmrVersion()
 * @method $this setStackName($stackName)
 * @method string getStackName()
 * @method $this setStackVersion($stackVersion)
 * @method string getStackVersion()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListEmrMainVersion extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setFromDatetime($fromDatetime)
 * @method string getFromDatetime()
 * @method $this setToDatetime($toDatetime)
 * @method string getToDatetime()
 */
class GetQueueInputStatisticInfo extends Request
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
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeDataSource extends Request
{

}/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeFlowNodeInstance extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setConsumerGroupId($consumerGroupId)
 * @method string getConsumerGroupId()
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 */
class MetastoreDescribeKafkaConsumerGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListScalingRule extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 */
class MetastoreListKafkaConsumerGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setReleaseId($releaseId)
 * @method string getReleaseId()
 */
class ReleaseETLJob extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setInstanceIdList($instanceIdList)
 * @method string getInstanceIdList()
 */
class ReleaseClusterHostGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setConfigVersion($configVersion)
 * @method string getConfigVersion()
 */
class DescribeClusterServiceConfigHistory extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setOperationId($operationId)
 * @method string getOperationId()
 */
class TerminateClusterOperation extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEntityId($entityId)
 * @method string getEntityId()
 */
class DescribeFlowVariableCollection extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setComponentName($componentName)
 * @method string getComponentName()
 */
class ListSlsLogstoreInfo extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDataSourceId($dataSourceId)
 * @method string getDataSourceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 */
class ListDataSourceSchemaTable extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 */
class DeleteScalingTaskGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 * @method $this setLocationUri($locationUri)
 * @method string getLocationUri()
 * @method $this setFieldDelimiter($fieldDelimiter)
 * @method string getFieldDelimiter()
 * @method $this setColumn($column)
 * @method array getColumn()
 * @method $this setDatabaseId($databaseId)
 * @method string getDatabaseId()
 * @method $this setCreateWith($createWith)
 * @method string getCreateWith()
 * @method $this setComment($comment)
 * @method string getComment()
 * @method $this setCreateSql($createSql)
 * @method string getCreateSql()
 * @method $this setPartition($partition)
 * @method array getPartition()
 */
class MetastoreCreateTable extends Request
{

}/**
 * @method $this setId($id)
 * @method string getId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DeleteFlow extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setOperationId($operationId)
 * @method string getOperationId()
 * @method $this setHostId($hostId)
 * @method string getHostId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class DescribeClusterOperationHostTaskLog extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
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
 * @method $this setCreateClusterOnDemand($createClusterOnDemand)
 * @method bool getCreateClusterOnDemand()
 * @method $this setEmrVer($emrVer)
 * @method string getEmrVer()
 * @method $this setOptionSoftWareList($optionSoftWareList)
 * @method array getOptionSoftWareList()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setHighAvailabilityEnable($highAvailabilityEnable)
 * @method bool getHighAvailabilityEnable()
 * @method $this setUseLocalMetaDb($useLocalMetaDb)
 * @method bool getUseLocalMetaDb()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setIoOptimized($ioOptimized)
 * @method bool getIoOptimized()
 * @method $this setInstanceGeneration($instanceGeneration)
 * @method string getInstanceGeneration()
 * @method $this setEasEnable($easEnable)
 * @method bool getEasEnable()
 * @method $this setEcsOrder($ecsOrder)
 * @method array getEcsOrder()
 * @method $this setBootstrapAction($bootstrapAction)
 * @method array getBootstrapAction()
 * @method $this setConfigurations($configurations)
 * @method string getConfigurations()
 * @method $this setId($id)
 * @method string getId()
 */
class ModifyExecutionPlanClusterInfo extends Request
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
 * @method $this setStrategy($strategy)
 * @method string getStrategy()
 */
class DescribeClusterStatistics extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class GetSupportedOpsCommand extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DetachClusterForNote extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 * @method $this setNumPartitions($numPartitions)
 * @method int getNumPartitions()
 * @method $this setAdvancedConfig($advancedConfig)
 * @method array getAdvancedConfig()
 */
class MetastoreUpdateKafkaTopic extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setPoolType($poolType)
 * @method string getPoolType()
 * @method $this setPoolId($poolId)
 * @method int getPoolId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListResourceQueue extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDataSourceId($dataSourceId)
 * @method string getDataSourceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class ListDataSourceSchemaDatabase extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListFlowProjectClusterSetting extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setHostGroupName($hostGroupName)
 * @method string getHostGroupName()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setVswitchId($vswitchId)
 * @method string getVswitchId()
 * @method $this setComment($comment)
 * @method string getComment()
 */
class ModifyClusterHostGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeDataSourceCommand extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class MetastoreListDataResources extends Request
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
 * @method $this setMaxRetry($maxRetry)
 * @method int getMaxRetry()
 * @method $this setRetryInterval($retryInterval)
 * @method int getRetryInterval()
 */
class ModifyJob extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setWebHookUrl($webHookUrl)
 * @method string getWebHookUrl()
 */
class CreateAlertDingDingGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 */
class DescribeClusterTemplate extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 */
class DescribeClusterService extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setLogPath($logPath)
 * @method string getLogPath()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setIsOpenPublicIp($isOpenPublicIp)
 * @method bool getIsOpenPublicIp()
 * @method $this setSecurityGroupName($securityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setChargeType($chargeType)
 * @method string getChargeType()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setAutoRenew($autoRenew)
 * @method bool getAutoRenew()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setUserDefinedEmrEcsRole($userDefinedEmrEcsRole)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this setEmrVer($emrVer)
 * @method string getEmrVer()
 * @method $this setOptionSoftWareList($optionSoftWareList)
 * @method array getOptionSoftWareList()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setHighAvailabilityEnable($highAvailabilityEnable)
 * @method bool getHighAvailabilityEnable()
 * @method $this setUseLocalMetaDb($useLocalMetaDb)
 * @method bool getUseLocalMetaDb()
 * @method $this setIoOptimized($ioOptimized)
 * @method bool getIoOptimized()
 * @method $this setSshEnable($sshEnable)
 * @method bool getSshEnable()
 * @method $this setInstanceGeneration($instanceGeneration)
 * @method string getInstanceGeneration()
 * @method $this setMasterPwd($masterPwd)
 * @method string getMasterPwd()
 * @method $this setHostGroup($hostGroup)
 * @method array getHostGroup()
 * @method $this setBootstrapAction($bootstrapAction)
 * @method array getBootstrapAction()
 * @method $this setConfigurations($configurations)
 * @method string getConfigurations()
 * @method $this setEasEnable($easEnable)
 * @method bool getEasEnable()
 * @method $this setDepositType($depositType)
 * @method string getDepositType()
 * @method $this setMachineType($machineType)
 * @method string getMachineType()
 * @method $this setUseCustomHiveMetaDb($useCustomHiveMetaDb)
 * @method bool getUseCustomHiveMetaDb()
 * @method $this setInitCustomHiveMetaDb($initCustomHiveMetaDb)
 * @method bool getInitCustomHiveMetaDb()
 * @method $this setConfig($config)
 * @method array getConfig()
 */
class ModifyClusterTemplate extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DeleteClusterScript extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setScalingRuleId($scalingRuleId)
 * @method string getScalingRuleId()
 */
class DescribeScalingRule extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostIdList($hostIdList)
 * @method array getHostIdList()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setOpsCommandName($opsCommandName)
 * @method string getOpsCommandName()
 * @method $this setComment($comment)
 * @method string getComment()
 * @method $this setCustomParams($customParams)
 * @method string getCustomParams()
 */
class RunOpsCommand extends Request
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
 * @method $this setMaxRetry($maxRetry)
 * @method int getMaxRetry()
 * @method $this setRetryInterval($retryInterval)
 * @method int getRetryInterval()
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
 * @method $this setStrategy($strategy)
 * @method string getStrategy()
 * @method $this setTimeInterval($timeInterval)
 * @method int getTimeInterval()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setTimeUnit($timeUnit)
 * @method string getTimeUnit()
 * @method $this setDayOfWeek($dayOfWeek)
 * @method string getDayOfWeek()
 * @method $this setDayOfMonth($dayOfMonth)
 * @method string getDayOfMonth()
 */
class ModifyExecutionPlanScheduleInfo extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setActive($active)
 * @method bool getActive()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setYarnsiteconfig($yarnsiteconfig)
 * @method string getYarnsiteconfig()
 * @method $this setConfig($config)
 * @method array getConfig()
 */
class ModifyResourcePool extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEmrVersion($emrVersion)
 * @method string getEmrVersion()
 * @method $this setServiceNameList($serviceNameList)
 * @method string getServiceNameList()
 */
class ListRequiredService extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setResourcePoolId($resourcePoolId)
 * @method string getResourcePoolId()
 */
class RenderResourcePoolXml extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPeriodic($periodic)
 * @method bool getPeriodic()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListFlow extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setAutoPayOrder($autoPayOrder)
 * @method bool getAutoPayOrder()
 * @method $this setVswitchId($vswitchId)
 * @method string getVswitchId()
 * @method $this setIsOpenPublicIp($isOpenPublicIp)
 * @method bool getIsOpenPublicIp()
 * @method $this setHostComponentInfo($hostComponentInfo)
 * @method array getHostComponentInfo()
 * @method $this setHostGroup($hostGroup)
 * @method array getHostGroup()
 */
class ResizeClusterV2 extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResolveId($resolveId)
 * @method string getResolveId()
 */
class DescribeETLJobSqlSchema extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setMinSize($minSize)
 * @method int getMinSize()
 * @method $this setMaxSize($maxSize)
 * @method int getMaxSize()
 * @method $this setDefaultCooldown($defaultCooldown)
 * @method int getDefaultCooldown()
 * @method $this setActiveRuleCategory($activeRuleCategory)
 * @method string getActiveRuleCategory()
 * @method $this setInstanceTypeList($instanceTypeList)
 * @method array getInstanceTypeList()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setDataDiskCategory($dataDiskCategory)
 * @method string getDataDiskCategory()
 * @method $this setDataDiskSize($dataDiskSize)
 * @method int getDataDiskSize()
 * @method $this setDataDiskCount($dataDiskCount)
 * @method int getDataDiskCount()
 * @method $this setSpotStrategy($spotStrategy)
 * @method string getSpotStrategy()
 * @method $this setSpotPriceLimits($spotPriceLimits)
 * @method array getSpotPriceLimits()
 * @method $this setScalingRule($scalingRule)
 * @method array getScalingRule()
 */
class CreateScalingTaskGroup extends Request
{

}/**
 * @method $this setFromApp($fromApp)
 * @method string getFromApp()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeFlowJobStatistic extends Request
{

}/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class CloneFlowJob extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class QueryAlarmRules extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEtlJobId($etlJobId)
 * @method string getEtlJobId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 */
class DescribeETLJobStageOutputSchema extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeSecurityGroupAttribute extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setDatabaseId($databaseId)
 * @method string getDatabaseId()
 */
class MetastoreDropDatabase extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostInnerIp($hostInnerIp)
 * @method string getHostInnerIp()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setLogstoreName($logstoreName)
 * @method string getLogstoreName()
 * @method $this setFromTimestamp($fromTimestamp)
 * @method int getFromTimestamp()
 * @method $this setToTimestamp($toTimestamp)
 * @method int getToTimestamp()
 * @method $this setSlsQueryString($slsQueryString)
 * @method string getSlsQueryString()
 */
class GetLogHistogram extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setHostGroupName($hostGroupName)
 * @method string getHostGroupName()
 * @method $this setHostGroupType($hostGroupType)
 * @method string getHostGroupType()
 * @method $this setStatusList($statusList)
 * @method array getStatusList()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusterHostGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ListExecutionPlanInstanceTrend extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusterOperation extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setLogPath($logPath)
 * @method string getLogPath()
 * @method $this setSecurityGroupId($securityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setIsOpenPublicIp($isOpenPublicIp)
 * @method bool getIsOpenPublicIp()
 * @method $this setSecurityGroupName($securityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setAutoRenew($autoRenew)
 * @method bool getAutoRenew()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setUserDefinedEmrEcsRole($userDefinedEmrEcsRole)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this setEmrVer($emrVer)
 * @method string getEmrVer()
 * @method $this setOptionSoftWareList($optionSoftWareList)
 * @method array getOptionSoftWareList()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setHighAvailabilityEnable($highAvailabilityEnable)
 * @method bool getHighAvailabilityEnable()
 * @method $this setUseLocalMetaDb($useLocalMetaDb)
 * @method bool getUseLocalMetaDb()
 * @method $this setIoOptimized($ioOptimized)
 * @method bool getIoOptimized()
 * @method $this setSshEnable($sshEnable)
 * @method bool getSshEnable()
 * @method $this setInstanceGeneration($instanceGeneration)
 * @method string getInstanceGeneration()
 * @method $this setMasterPwd($masterPwd)
 * @method string getMasterPwd()
 * @method $this setHostGroup($hostGroup)
 * @method array getHostGroup()
 * @method $this setBootstrapAction($bootstrapAction)
 * @method array getBootstrapAction()
 * @method $this setConfigurations($configurations)
 * @method string getConfigurations()
 * @method $this setEasEnable($easEnable)
 * @method bool getEasEnable()
 * @method $this setDepositType($depositType)
 * @method string getDepositType()
 * @method $this setMachineType($machineType)
 * @method string getMachineType()
 * @method $this setUseCustomHiveMetaDb($useCustomHiveMetaDb)
 * @method bool getUseCustomHiveMetaDb()
 * @method $this setInitCustomHiveMetaDb($initCustomHiveMetaDb)
 * @method bool getInitCustomHiveMetaDb()
 * @method $this setConfig($config)
 * @method array getConfig()
 */
class CreateClusterTemplate extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setScalingRuleId($scalingRuleId)
 * @method string getScalingRuleId()
 */
class DeleteScalingRule extends Request
{

}/**
 * @method $this setNodeInstanceId($nodeInstanceId)
 * @method string getNodeInstanceId()
 * @method $this setSqlIndex($sqlIndex)
 * @method int getSqlIndex()
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ListFlowNodeSqlResult extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setIds($ids)
 * @method string getIds()
 */
class DeleteAlertContacts extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class KillETLJobInstance extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEntityType($entityType)
 * @method string getEntityType()
 */
class ListETLJobTriggerEntity extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setDefaultUser($defaultUser)
 * @method string getDefaultUser()
 * @method $this setDefaultQueue($defaultQueue)
 * @method string getDefaultQueue()
 * @method $this setUserList($userList)
 * @method array getUserList()
 * @method $this setQueueList($queueList)
 * @method array getQueueList()
 * @method $this setHostList($hostList)
 * @method array getHostList()
 */
class CreateFlowProjectClusterSetting extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateBizId($templateBizId)
 * @method string getTemplateBizId()
 * @method $this setUniqueTag($uniqueTag)
 * @method string getUniqueTag()
 */
class CreateClusterWithTemplate extends Request
{

}/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setType($type)
 * @method string getType()
 */
class DescribeFlowCategoryTree extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setDefault($default)
 * @method bool getDefault()
 * @method $this setMetaType($metaType)
 * @method string getMetaType()
 * @method $this setAccessType($accessType)
 * @method string getAccessType()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class MetastoreCreateDataResource extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupName($hostGroupName)
 * @method string getHostGroupName()
 * @method $this setHostGroupType($hostGroupType)
 * @method string getHostGroupType()
 * @method $this setComment($comment)
 * @method string getComment()
 */
class CreateClusterHostGroup extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListFlowJobHistory extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setJobIdList($jobIdList)
 * @method array getJobIdList()
 */
class ModifyExecutionPlanJobInfo extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class AttachClusterForNote extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setFromDatetime($fromDatetime)
 * @method string getFromDatetime()
 * @method $this setToDatetime($toDatetime)
 * @method string getToDatetime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class GetJobInputStatisticInfo extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setNoteId($noteId)
 * @method string getNoteId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class StopParagraph extends Request
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
class CloneETLJob extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 */
class DeleteClusterTemplate extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setCurrentSize($currentSize)
 * @method int getCurrentSize()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListExecutePlanMigrateInfo extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class ListScalingTaskGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class MetastoreDeleteDataResource extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class DescribeAvailableInstanceType extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 * @method $this setDatabaseId($databaseId)
 * @method string getDatabaseId()
 * @method $this setId($id)
 * @method string getId()
 */
class MetastoreDescribeTable extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class DescribeClusterOpLog extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setResourcePoolId($resourcePoolId)
 * @method int getResourcePoolId()
 */
class RefreshClusterResourcePool extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setPeriodic($periodic)
 * @method bool getPeriodic()
 * @method $this setStartSchedule($startSchedule)
 * @method int getStartSchedule()
 * @method $this setEndSchedule($endSchedule)
 * @method int getEndSchedule()
 * @method $this setCronExpr($cronExpr)
 * @method string getCronExpr()
 * @method $this setCreateCluster($createCluster)
 * @method bool getCreateCluster()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setGraph($graph)
 * @method string getGraph()
 * @method $this setAlertConf($alertConf)
 * @method string getAlertConf()
 * @method $this setAlertUserGroupBizId($alertUserGroupBizId)
 * @method string getAlertUserGroupBizId()
 * @method $this setAlertDingDingGroupBizId($alertDingDingGroupBizId)
 * @method string getAlertDingDingGroupBizId()
 * @method $this setParentFlowList($parentFlowList)
 * @method string getParentFlowList()
 * @method $this setParentCategory($parentCategory)
 * @method string getParentCategory()
 */
class ModifyFlowForWeb extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDataSourceId($dataSourceId)
 * @method string getDataSourceId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setTopicName($topicName)
 * @method string getTopicName()
 */
class MetastoreListKafkaTopic extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setComment($comment)
 * @method string getComment()
 * @method $this setConfigParams($configParams)
 * @method string getConfigParams()
 * @method $this setCustomConfigParams($customConfigParams)
 * @method string getCustomConfigParams()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setHostInstanceId($hostInstanceId)
 * @method string getHostInstanceId()
 * @method $this setConfigType($configType)
 * @method string getConfigType()
 * @method $this setGatewayClusterIdList($gatewayClusterIdList)
 * @method array getGatewayClusterIdList()
 * @method $this setRefreshHostConfig($refreshHostConfig)
 * @method bool getRefreshHostConfig()
 */
class ModifyClusterServiceConfig extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setCurrentSize($currentSize)
 * @method int getCurrentSize()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setOrderMode($orderMode)
 * @method string getOrderMode()
 * @method $this setOrderFieldName($orderFieldName)
 * @method string getOrderFieldName()
 */
class ListUserStatistics extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostInstanceId($hostInstanceId)
 * @method string getHostInstanceId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setComponentName($componentName)
 * @method string getComponentName()
 * @method $this setComponentStatus($componentStatus)
 * @method string getComponentStatus()
 * @method $this setHostRole($hostRole)
 * @method string getHostRole()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListClusterHostComponent extends Request
{

}/**
 * @method $this setStart($start)
 * @method int getStart()
 * @method $this setLines($lines)
 * @method int getLines()
 * @method $this setOffset($offset)
 * @method int getOffset()
 * @method $this setLength($length)
 * @method int getLength()
 * @method $this setReverse($reverse)
 * @method bool getReverse()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setNodeInstanceId($nodeInstanceId)
 * @method string getNodeInstanceId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeFlowNodeInstanceLauncherLog extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setMinSize($minSize)
 * @method int getMinSize()
 * @method $this setMaxSize($maxSize)
 * @method int getMaxSize()
 * @method $this setDefaultCooldown($defaultCooldown)
 * @method int getDefaultCooldown()
 * @method $this setActiveRuleCategory($activeRuleCategory)
 * @method string getActiveRuleCategory()
 */
class ModifyScalingTaskGroup extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateFlowProject extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setNoteId($noteId)
 * @method string getNoteId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class RunNoteParagraphs extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class MetastoreDescribeTask extends Request
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
 * @method $this setFromApp($fromApp)
 * @method string getFromApp()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setIds($ids)
 * @method string getIds()
 */
class ListAlertUserGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ListNotes extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListFlowProjectUser extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setConf($conf)
 * @method string getConf()
 */
class CheckDataSource extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setNoteId($noteId)
 * @method string getNoteId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setText($text)
 * @method string getText()
 */
class SaveParagraph extends Request
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
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setUserInfo($userInfo)
 * @method array getUserInfo()
 */
class RetryCreateUserPassword extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class KillExecutionPlanInstance extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setDatabaseId($databaseId)
 * @method string getDatabaseId()
 * @method $this setTableId($tableId)
 * @method string getTableId()
 * @method $this setTableName($tableName)
 * @method string getTableName()
 * @method $this setFuzzyTableName($fuzzyTableName)
 * @method string getFuzzyTableName()
 */
class MetastoreListTables extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setStartCursor($startCursor)
 * @method int getStartCursor()
 * @method $this setEndCursor($endCursor)
 * @method int getEndCursor()
 */
class GetOpsCommandResult extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEtlJobId($etlJobId)
 * @method string getEtlJobId()
 * @method $this setDataSourceId($dataSourceId)
 * @method string getDataSourceId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setSql($sql)
 * @method string getSql()
 */
class ResolveETLJobSqlSchema extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setNoteId($noteId)
 * @method string getNoteId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DeleteParagraph extends Request
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
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class CreateNote extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setParentId($parentId)
 * @method string getParentId()
 */
class UpdateNavNode extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 */
class DeleteNavNode extends Request
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
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setConf($conf)
 * @method string getConf()
 */
class UpdateDataSource extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setEmailVerificationCode($emailVerificationCode)
 * @method string getEmailVerificationCode()
 * @method $this setPhoneNumberVerificationCode($phoneNumberVerificationCode)
 * @method string getPhoneNumberVerificationCode()
 */
class CreateAlertContact extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setCategoryType($categoryType)
 * @method string getCategoryType()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setObjectId($objectId)
 * @method string getObjectId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setParentId($parentId)
 * @method string getParentId()
 */
class CreateNavNode extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 */
class DeleteClusterHostGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setEtlJobId($etlJobId)
 * @method string getEtlJobId()
 * @method $this setStageName($stageName)
 * @method string getStageName()
 * @method $this setStageType($stageType)
 * @method string getStageType()
 * @method $this setStagePlugin($stagePlugin)
 * @method string getStagePlugin()
 * @method $this setStageConf($stageConf)
 * @method string getStageConf()
 */
class UpdateETLJobStage extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setBizType($bizType)
 * @method string getBizType()
 * @method $this setBizContent($bizContent)
 * @method string getBizContent()
 */
class AuthorizeSecurityGroup extends Request
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
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setQueryString($queryString)
 * @method string getQueryString()
 */
class ListJobs extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setScalingRuleId($scalingRuleId)
 * @method string getScalingRuleId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setAdjustmentType($adjustmentType)
 * @method string getAdjustmentType()
 * @method $this setAdjustmentValue($adjustmentValue)
 * @method int getAdjustmentValue()
 * @method $this setCooldown($cooldown)
 * @method int getCooldown()
 * @method $this setLaunchTime($launchTime)
 * @method string getLaunchTime()
 * @method $this setLaunchExpirationTime($launchExpirationTime)
 * @method int getLaunchExpirationTime()
 * @method $this setRecurrenceType($recurrenceType)
 * @method string getRecurrenceType()
 * @method $this setRecurrenceValue($recurrenceValue)
 * @method string getRecurrenceValue()
 * @method $this setRecurrenceEndTime($recurrenceEndTime)
 * @method string getRecurrenceEndTime()
 * @method $this setSchedulerTrigger($schedulerTrigger)
 * @method array getSchedulerTrigger()
 * @method $this setCloudWatchTrigger($cloudWatchTrigger)
 * @method array getCloudWatchTrigger()
 */
class ModifyScalingRule extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupIdList($hostGroupIdList)
 * @method array getHostGroupIdList()
 * @method $this setHostIdList($hostIdList)
 * @method string getHostIdList()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setServiceActionName($serviceActionName)
 * @method string getServiceActionName()
 * @method $this setCustomCommand($customCommand)
 * @method string getCustomCommand()
 * @method $this setComponentNameList($componentNameList)
 * @method string getComponentNameList()
 * @method $this setComment($comment)
 * @method string getComment()
 * @method $this setIsRolling($isRolling)
 * @method bool getIsRolling()
 * @method $this setExecuteStrategy($executeStrategy)
 * @method string getExecuteStrategy()
 * @method $this setCustomParams($customParams)
 * @method string getCustomParams()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setNodeCountPerBatch($nodeCountPerBatch)
 * @method int getNodeCountPerBatch()
 * @method $this setTotlerateFailCount($totlerateFailCount)
 * @method int getTotlerateFailCount()
 * @method $this setOnlyRestartStaleConfigNodes($onlyRestartStaleConfigNodes)
 * @method bool getOnlyRestartStaleConfigNodes()
 * @method $this setTurnOnMaintenanceMode($turnOnMaintenanceMode)
 * @method bool getTurnOnMaintenanceMode()
 */
class RunClusterServiceAction extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class CancelOrder extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 */
class GetOpsCommandResultOnce extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setFromApp($fromApp)
 * @method string getFromApp()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setIds($ids)
 * @method string getIds()
 */
class ListAlertDingDingGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTopicId($topicId)
 * @method string getTopicId()
 */
class MetastoreDescribeKafkaTopic extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTableId($tableId)
 * @method string getTableId()
 * @method $this setDeletePartitionName($deletePartitionName)
 * @method array getDeletePartitionName()
 * @method $this setDeleteColumnName($deleteColumnName)
 * @method array getDeleteColumnName()
 * @method $this setAddPartition($addPartition)
 * @method array getAddPartition()
 * @method $this setAddColumn($addColumn)
 * @method array getAddColumn()
 */
class MetastoreUpdateTable extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DeleteETLJob extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setArguments($arguments)
 * @method string getArguments()
 */
class RunExecutionPlan extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeETLJobInstance extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setFromDatetime($fromDatetime)
 * @method string getFromDatetime()
 * @method $this setToDatetime($toDatetime)
 * @method string getToDatetime()
 */
class GetUserInputStatisticInfo extends Request
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
 * @method $this setOperationId($operationId)
 * @method int getOperationId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class ListOpsOperationTask extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class DescribeETLJob extends Request
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
 * @method $this setDepositType($depositType)
 * @method string getDepositType()
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
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setDefaultOssPath($defaultOssPath)
 * @method string getDefaultOssPath()
 * @method $this setOssConfig($ossConfig)
 * @method string getOssConfig()
 */
class UpdateProjectSetting extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setMode($mode)
 * @method string getMode()
 * @method $this setTarget($target)
 * @method string getTarget()
 */
class CreateVerificationCode extends Request
{

}/**
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class DescribeFlow extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class ResumeExecutionPlanInstance extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setFlowInstanceId($flowInstanceId)
 * @method string getFlowInstanceId()
 */
class SuspendFlow extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setQualifiedName($qualifiedName)
 * @method string getQualifiedName()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setParentQueueId($parentQueueId)
 * @method int getParentQueueId()
 * @method $this setLeaf($leaf)
 * @method bool getLeaf()
 * @method $this setResourcePoolId($resourcePoolId)
 * @method int getResourcePoolId()
 * @method $this setConfig($config)
 * @method array getConfig()
 */
class CreateResourceQueue extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setClusterId($clusterId)
 * @method string getClusterId()
 * @method $this setHostGroupId($hostGroupId)
 * @method string getHostGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListScalingActivity extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDataSourceId($dataSourceId)
 * @method string getDataSourceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeDataSourceSchemaDatabase extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setJobInstanceId($jobInstanceId)
 * @method string getJobInstanceId()
 */
class KillFlowJob extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setProjectId($projectId)
 * @method string getProjectId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListFlowCluster extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setId($id)
 * @method string getId()
 */
class SuspendExecutionPlanInstance extends Request
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
 * @method $this setDayOfWeek($dayOfWeek)
 * @method string getDayOfWeek()
 * @method $this setDayOfMonth($dayOfMonth)
 * @method string getDayOfMonth()
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
 * @method $this setOptionSoftWareList($optionSoftWareList)
 * @method array getOptionSoftWareList()
 * @method $this setClusterType($clusterType)
 * @method string getClusterType()
 * @method $this setHighAvailabilityEnable($highAvailabilityEnable)
 * @method bool getHighAvailabilityEnable()
 * @method $this setUseLocalMetaDb($useLocalMetaDb)
 * @method bool getUseLocalMetaDb()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setNetType($netType)
 * @method string getNetType()
 * @method $this setUserDefinedEmrEcsRole($userDefinedEmrEcsRole)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this setIoOptimized($ioOptimized)
 * @method bool getIoOptimized()
 * @method $this setInstanceGeneration($instanceGeneration)
 * @method string getInstanceGeneration()
 * @method $this setEcsOrder($ecsOrder)
 * @method array getEcsOrder()
 * @method $this setBootstrapAction($bootstrapAction)
 * @method array getBootstrapAction()
 * @method $this setUseCustomHiveMetaDB($useCustomHiveMetaDB)
 * @method bool getUseCustomHiveMetaDB()
 * @method $this setInitCustomHiveMetaDB($initCustomHiveMetaDB)
 * @method bool getInitCustomHiveMetaDB()
 * @method $this setConfig($config)
 * @method array getConfig()
 * @method $this setConfigurations($configurations)
 * @method string getConfigurations()
 * @method $this setEasEnable($easEnable)
 * @method bool getEasEnable()
 * @method $this setWorkflowDefinition($workflowDefinition)
 * @method string getWorkflowDefinition()
 */
class CreateExecutionPlan extends Request
{

}