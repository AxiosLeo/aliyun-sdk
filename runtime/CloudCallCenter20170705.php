<?php

namespace aliyun\sdk\services\CloudCallCenter20170705;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170705
 *
 * @package aliyun\sdk\services\CloudCallCenter20170705
 * @method RemoveTestPhoneNumber RemoveTestPhoneNumber()
 * @method QueryCall QueryCall()
 * @method ListRecords ListRecords()
 * @method GetSurvey GetSurvey()
 * @method GetInstanceConfig GetInstanceConfig()
 * @method DescribeVnKnowledge DescribeVnKnowledge()
 * @method CreateVnRedirection CreateVnRedirection()
 * @method ListAgentEvents ListAgentEvents()
 * @method PreCreateMediaEx PreCreateMediaEx()
 * @method SilenceTimeoutVn SilenceTimeoutVn()
 * @method GetNotificationConfig GetNotificationConfig()
 * @method ListSkillGroupData ListSkillGroupData()
 * @method CreateSkillGroup CreateSkillGroup()
 * @method GetUser GetUser()
 * @method AssignPrivilegesToRole AssignPrivilegesToRole()
 * @method CreateCabInstance CreateCabInstance()
 * @method ModifyVnInstance ModifyVnInstance()
 * @method ModifyVnCategory ModifyVnCategory()
 * @method GetAgentData GetAgentData()
 * @method GetInstanceByDomainName GetInstanceByDomainName()
 * @method Refund Refund()
 * @method FindAgentData FindAgentData()
 * @method AddFunctionMeta AddFunctionMeta()
 * @method ListFlowTemplates ListFlowTemplates()
 * @method DeleteInstanceEx DeleteInstanceEx()
 * @method PickOutboundNumbers PickOutboundNumbers()
 * @method ListVoiceAppraise ListVoiceAppraise()
 * @method ModifyFunctionMeta ModifyFunctionMeta()
 * @method BeginVnDialogue BeginVnDialogue()
 * @method DeleteRole DeleteRole()
 * @method RefreshToken RefreshToken()
 * @method ListSkillGroupsOfUser ListSkillGroupsOfUser()
 * @method DisablePhoneNumber DisablePhoneNumber()
 * @method GetTaobaoOrder GetTaobaoOrder()
 * @method ListVnConversations ListVnConversations()
 * @method RemoveTbAliyunUserMappingByTbUid RemoveTbAliyunUserMappingByTbUid()
 * @method DialogueLite DialogueLite()
 * @method doCheckResource doCheckResource()
 * @method CreatePredictiveJobGroup CreatePredictiveJobGroup()
 * @method ListVnPublishHistories ListVnPublishHistories()
 * @method CreatePrivacyNumberPool CreatePrivacyNumberPool()
 * @method DeleteContactFlow DeleteContactFlow()
 * @method DescribeVnNavigationConfig DescribeVnNavigationConfig()
 * @method ListUsers ListUsers()
 * @method ListCategories ListCategories()
 * @method DeleteSipAgentGroup DeleteSipAgentGroup()
 * @method GetJobStatusByCallId GetJobStatusByCallId()
 * @method CreateOrModifySystemSpecification CreateOrModifySystemSpecification()
 * @method ModifyMedia ModifyMedia()
 * @method GradeCabService GradeCabService()
 * @method GetJobTemplateDownloadParams GetJobTemplateDownloadParams()
 * @method DeleteScenario DeleteScenario()
 * @method QueryVnNavigationScripts QueryVnNavigationScripts()
 * @method ModifySurvey ModifySurvey()
 * @method DebugAuthorizedVn DebugAuthorizedVn()
 * @method ListStrategies ListStrategies()
 * @method ModifySkillGroupEx ModifySkillGroupEx()
 * @method CreatePhoneRepayOrder CreatePhoneRepayOrder()
 * @method DebugIntent DebugIntent()
 * @method DescribeVnRedirection DescribeVnRedirection()
 * @method ListTask ListTask()
 * @method CreateStrategy CreateStrategy()
 * @method ReleaseService ReleaseService()
 * @method UploadMediaCallback UploadMediaCallback()
 * @method ModifySipAgentGroup ModifySipAgentGroup()
 * @method ListOverviewRealTimeReport ListOverviewRealTimeReport()
 * @method ListPredictiveJobStatus ListPredictiveJobStatus()
 * @method ListCustomerNumbers ListCustomerNumbers()
 * @method ListBasicStatisticsReportSubItems ListBasicStatisticsReportSubItems()
 * @method ListContactFlows ListContactFlows()
 * @method GetJobGroup GetJobGroup()
 * @method SendPredefinedShortMessage SendPredefinedShortMessage()
 * @method ProcessRepliedShortMessages ProcessRepliedShortMessages()
 * @method CreateScenario CreateScenario()
 * @method ModifyBatchJobs ModifyBatchJobs()
 * @method ListOutboundPhoneNumberOfUser ListOutboundPhoneNumberOfUser()
 * @method QueryAliyunCorpNumber QueryAliyunCorpNumber()
 * @method ModifyJobGroup ModifyJobGroup()
 * @method ModifyContactFlow ModifyContactFlow()
 * @method ListConfigItemForFlat ListConfigItemForFlat()
 * @method ListOverviewAccumulateReport ListOverviewAccumulateReport()
 * @method CopyCorpIdentify CopyCorpIdentify()
 * @method QueryNumberCorp QueryNumberCorp()
 * @method DebugBeginVnDialogue DebugBeginVnDialogue()
 * @method CreateSurvey CreateSurvey()
 * @method BatchCreateFeeRecord BatchCreateFeeRecord()
 * @method DescribeVnInstance DescribeVnInstance()
 * @method DebugCollectedVnNumber DebugCollectedVnNumber()
 * @method DeleteStrategy DeleteStrategy()
 * @method ListCorpIdentifyOssLink ListCorpIdentifyOssLink()
 * @method doPhysicalDeleteResource doPhysicalDeleteResource()
 * @method ModifyVnComplainingConfig ModifyVnComplainingConfig()
 * @method DuplicateVnInstance DuplicateVnInstance()
 * @method DialogueVn DialogueVn()
 * @method CreatePredictiveJobs CreatePredictiveJobs()
 * @method GetConsumedAmountMonthly GetConsumedAmountMonthly()
 * @method BatchUpdateTaobaoUserMap BatchUpdateTaobaoUserMap()
 * @method ResumePredictiveJobs ResumePredictiveJobs()
 * @method DescribeVnPerformanceIndex DescribeVnPerformanceIndex()
 * @method ListAllImsUsers ListAllImsUsers()
 * @method FindRecords FindRecords()
 * @method CreateRamInstance CreateRamInstance()
 * @method CreateFeeRecord CreateFeeRecord()
 * @method ListVnConversationDetails ListVnConversationDetails()
 * @method AuthorizedVn AuthorizedVn()
 * @method ListPhoneNumbers ListPhoneNumbers()
 * @method CreateTaobaoOrder CreateTaobaoOrder()
 * @method ListSkillGroupSummaryReportsByInterval ListSkillGroupSummaryReportsByInterval()
 * @method TransformTtsToWav TransformTtsToWav()
 * @method GetInstanceSummaryReportByInterval GetInstanceSummaryReportByInterval()
 * @method ListJobsByGroup ListJobsByGroup()
 * @method GetJob GetJob()
 * @method PushSipAgentGroup PushSipAgentGroup()
 * @method ResumeService ResumeService()
 * @method ListRecentCallRecords ListRecentCallRecords()
 * @method FindUsers FindUsers()
 * @method AddTestPhoneNumber AddTestPhoneNumber()
 * @method PutConfigItemForFlat PutConfigItemForFlat()
 * @method ModifyVnKnowledge ModifyVnKnowledge()
 * @method GetCabInstance GetCabInstance()
 * @method ListAgentSummaryReports ListAgentSummaryReports()
 * @method CreateTbAliyunUserMapping CreateTbAliyunUserMapping()
 * @method GetAgentState GetAgentState()
 * @method ListInstancesOfUser ListInstancesOfUser()
 * @method ListVnInstances ListVnInstances()
 * @method GetCallMeasureSummaryReport GetCallMeasureSummaryReport()
 * @method EnableCabService EnableCabService()
 * @method GetContactFlowVersion GetContactFlowVersion()
 * @method UnbindPrivacyNumber UnbindPrivacyNumber()
 * @method GetConfigItemForFlat GetConfigItemForFlat()
 * @method SuspendPredictiveJobs SuspendPredictiveJobs()
 * @method BatchDeleteVnNavigationScripts BatchDeleteVnNavigationScripts()
 * @method ListAgentStates ListAgentStates()
 * @method GetSmsConfig GetSmsConfig()
 * @method ModifyPrivacyNumberCallDetail ModifyPrivacyNumberCallDetail()
 * @method AssignRolesToUser AssignRolesToUser()
 * @method GetJobDataUploadParams GetJobDataUploadParams()
 * @method CreateCategory CreateCategory()
 * @method QueryVoiceNumberStockCount QueryVoiceNumberStockCount()
 * @method ListCallDetailRecords ListCallDetailRecords()
 * @method RecordFailure RecordFailure()
 * @method ListTestPhoneNumbers ListTestPhoneNumbers()
 * @method ListPrivacyNumberCallDetails ListPrivacyNumberCallDetails()
 * @method GetNavigatorContactFlow GetNavigatorContactFlow()
 * @method CallOnlinePrivacyNumber CallOnlinePrivacyNumber()
 * @method CreateInstanceEx CreateInstanceEx()
 * @method CreatePrivacyNumberAccount CreatePrivacyNumberAccount()
 * @method BeginContactFlowVersionModification BeginContactFlowVersionModification()
 * @method StartJob StartJob()
 * @method DeleteInstance DeleteInstance()
 * @method PreCreateMedia PreCreateMedia()
 * @method RollbackVnInstance RollbackVnInstance()
 * @method ModifyVnUnrecognizingConfig ModifyVnUnrecognizingConfig()
 * @method ModifyPhoneNumber ModifyPhoneNumber()
 * @method ListRealTimeAgent ListRealTimeAgent()
 * @method DeleteSkillGroup DeleteSkillGroup()
 * @method ListVnNavigationScripts ListVnNavigationScripts()
 * @method PickOutboundNumbersByTags PickOutboundNumbersByTags()
 * @method doLogicalDeleteResource doLogicalDeleteResource()
 * @method DeletePrivacyNumberPool DeletePrivacyNumberPool()
 * @method CreateVoiceAppraise CreateVoiceAppraise()
 * @method SendShortMessage SendShortMessage()
 * @method DeleteCategory DeleteCategory()
 * @method ListPredictiveJobGroups ListPredictiveJobGroups()
 * @method GetInvokeRole GetInvokeRole()
 * @method CreateCorpNumber CreateCorpNumber()
 * @method ListAvailableTestPhoneNumbers ListAvailableTestPhoneNumbers()
 * @method ModifyUserEx ModifyUserEx()
 * @method AddPhoneNumberEx AddPhoneNumberEx()
 * @method AssignUsers AssignUsers()
 * @method DescribeVnCategoryTree DescribeVnCategoryTree()
 * @method GetInstanceState GetInstanceState()
 * @method ResumeJobs ResumeJobs()
 * @method FallbackContactFlowVersion FallbackContactFlowVersion()
 * @method CreateInstance CreateInstance()
 * @method GetNumberRegionInfo GetNumberRegionInfo()
 * @method BatchMoveVnNavigationScripts BatchMoveVnNavigationScripts()
 * @method ValidNotInUsePhoneNumber ValidNotInUsePhoneNumber()
 * @method ListCallMeasureSummaryReports ListCallMeasureSummaryReports()
 * @method ListScenarioParameters ListScenarioParameters()
 * @method ModifyVnRepeatingConfig ModifyVnRepeatingConfig()
 * @method CreateCCCPhoneNumberOrder CreateCCCPhoneNumberOrder()
 * @method GetCabTask GetCabTask()
 * @method GetTwoPartiesCall GetTwoPartiesCall()
 * @method CreateUsers CreateUsers()
 * @method CreateVnKnowledge CreateVnKnowledge()
 * @method ListJobGroups ListJobGroups()
 * @method QueryUnsetStatusCall QueryUnsetStatusCall()
 * @method ApplyCorpIdentify ApplyCorpIdentify()
 * @method GetSkillGroupIdByTaskId GetSkillGroupIdByTaskId()
 * @method ListCallDetailDatas ListCallDetailDatas()
 * @method SetProvider SetProvider()
 * @method GetSipAgentGroupInfo GetSipAgentGroupInfo()
 * @method CreateTask CreateTask()
 * @method GetTbAliyunUserMappingByTbUid GetTbAliyunUserMappingByTbUid()
 * @method UpdateTaobaoOrder UpdateTaobaoOrder()
 * @method PublishContactFlowVersion PublishContactFlowVersion()
 * @method CommitContactFlowVersionModification CommitContactFlowVersionModification()
 * @method DeleteVnNavigationScript DeleteVnNavigationScript()
 * @method AddSipAgentGroup AddSipAgentGroup()
 * @method AssignUsersEx AssignUsersEx()
 * @method ListRoles ListRoles()
 * @method DebugDialogue DebugDialogue()
 * @method GetServiceExtensions GetServiceExtensions()
 * @method ListBarCharts ListBarCharts()
 * @method DeleteFeeRecordByBizId DeleteFeeRecordByBizId()
 * @method CreateBatchJobs CreateBatchJobs()
 * @method CancelContactFlowVersionModification CancelContactFlowVersionModification()
 * @method PickLocalNumber PickLocalNumber()
 * @method Dial Dial()
 * @method UpdateNumberStatus UpdateNumberStatus()
 * @method QueryNumberCorpIdentify QueryNumberCorpIdentify()
 * @method ListRecordingByContactId ListRecordingByContactId()
 * @method SuspendService SuspendService()
 * @method ModifyContactFlowVersion ModifyContactFlowVersion()
 * @method Decrypt Decrypt()
 * @method QueryVnConversations QueryVnConversations()
 * @method PreModifyMedia PreModifyMedia()
 * @method AddCustomerNumber AddCustomerNumber()
 * @method ListSurveys ListSurveys()
 * @method RemoveContactFlowFromPhoneNumber RemoveContactFlowFromPhoneNumber()
 * @method GetInstanceSummaryReport GetInstanceSummaryReport()
 * @method DownloadRecording DownloadRecording()
 * @method CreateUser CreateUser()
 * @method CollectedVnNumber CollectedVnNumber()
 * @method ModifyVnSilenceTimeoutConfig ModifyVnSilenceTimeoutConfig()
 * @method CreateRole CreateRole()
 * @method ListPredictiveJobs ListPredictiveJobs()
 * @method ListMediasWithPublic ListMediasWithPublic()
 * @method ListUsersOfRole ListUsersOfRole()
 * @method Dialogue Dialogue()
 * @method ListWorkflowOfAgent ListWorkflowOfAgent()
 * @method GetAggregateTaobaoOrder GetAggregateTaobaoOrder()
 * @method Demonstrate Demonstrate()
 * @method GetPredictiveJob GetPredictiveJob()
 * @method GetJobDataOssUploadParams GetJobDataOssUploadParams()
 * @method SuspendJobs SuspendJobs()
 * @method BindAXNPrivacyNumber BindAXNPrivacyNumber()
 * @method PutInstanceConfig PutInstanceConfig()
 * @method QueryResDistribute QueryResDistribute()
 * @method CreateVnCategory CreateVnCategory()
 * @method ListDetailOfSkillGroup ListDetailOfSkillGroup()
 * @method PutConfigItemsForFlat PutConfigItemsForFlat()
 * @method ModifyCategory ModifyCategory()
 * @method DeleteCustomerNumber DeleteCustomerNumber()
 * @method StartBack2BackCall StartBack2BackCall()
 * @method GetPrivacyNumberAccount GetPrivacyNumberAccount()
 * @method GetCorpNumber GetCorpNumber()
 * @method UploadCorpIdentifyFile UploadCorpIdentifyFile()
 * @method ListVnCategories ListVnCategories()
 * @method ListRecordingsByContactId ListRecordingsByContactId()
 * @method CreateMediaEx CreateMediaEx()
 * @method CreateScenarioFromTemplate CreateScenarioFromTemplate()
 * @method PublishSurvey PublishSurvey()
 * @method DownloadMedia DownloadMedia()
 * @method GetOssUrlForUploadFile GetOssUrlForUploadFile()
 * @method DeleteScenarioParameter DeleteScenarioParameter()
 * @method CancelPredictiveJobs CancelPredictiveJobs()
 * @method ListSkillGroups ListSkillGroups()
 * @method ModifyVnNavigationConfig ModifyVnNavigationConfig()
 * @method GetInstance GetInstance()
 * @method SimpleDial SimpleDial()
 * @method GetConsumedAmount GetConsumedAmount()
 * @method CreateSmsConfig CreateSmsConfig()
 * @method ModifyInstance ModifyInstance()
 * @method RemoveUsersFromSkillGroup RemoveUsersFromSkillGroup()
 * @method EnableVnInstance EnableVnInstance()
 * @method QueryRedialIndicator QueryRedialIndicator()
 * @method ListUsersOfSkillGroup ListUsersOfSkillGroup()
 * @method ModifySkillGroup ModifySkillGroup()
 * @method ListPhoneNumbersByRamId ListPhoneNumbersByRamId()
 * @method CreateVnInstance CreateVnInstance()
 * @method InvokeFunctionCompute InvokeFunctionCompute()
 * @method PublishCabIvr PublishCabIvr()
 * @method ModifyVnAskingBackConfig ModifyVnAskingBackConfig()
 * @method ListRecordings ListRecordings()
 * @method GetContactFlow GetContactFlow()
 * @method GenerateOverallStatisticsReport GenerateOverallStatisticsReport()
 * @method DeleteTaobaoOrder DeleteTaobaoOrder()
 * @method SubmitBatchJobs SubmitBatchJobs()
 * @method ListMedias ListMedias()
 * @method CancelJobs CancelJobs()
 * @method RemoveUsers RemoveUsers()
 * @method CreateScenarioParameter CreateScenarioParameter()
 * @method OrderSucceededCallback OrderSucceededCallback()
 * @method ModifyNotificationConfig ModifyNotificationConfig()
 * @method Appraise Appraise()
 * @method Log Log()
 * @method ListJobStatus ListJobStatus()
 * @method DeleteVnInstance DeleteVnInstance()
 * @method Encrypt Encrypt()
 * @method ListUnrecognizedIntents ListUnrecognizedIntents()
 * @method GenerateBasicStatisticsReport GenerateBasicStatisticsReport()
 * @method RemovePhoneNumber RemovePhoneNumber()
 * @method GetCorpIdentify GetCorpIdentify()
 * @method ListPrivilegesOfUser ListPrivilegesOfUser()
 * @method EnablePhoneNumber EnablePhoneNumber()
 * @method ModifyVnRedirection ModifyVnRedirection()
 * @method ListPrivilegesOfRole ListPrivilegesOfRole()
 * @method ListPerformanceSummary ListPerformanceSummary()
 * @method UpdateTenant UpdateTenant()
 * @method ListPrivacyNumbersOfPool ListPrivacyNumbersOfPool()
 * @method InvokeSendMessage InvokeSendMessage()
 * @method DownloadOriginalStatisticsReport DownloadOriginalStatisticsReport()
 * @method DownloadUnreachableContacts DownloadUnreachableContacts()
 * @method ListAgentData ListAgentData()
 * @method ListConversationsWithUnrecognizedIntents ListConversationsWithUnrecognizedIntents()
 * @method GetJobs GetJobs()
 * @method TwoPartiesCall TwoPartiesCall()
 * @method CreateMedia CreateMedia()
 * @method ListPredictiveJobGroupOverallStatus ListPredictiveJobGroupOverallStatus()
 * @method ListImsUsers ListImsUsers()
 * @method ListRecordingOfDualTrack ListRecordingOfDualTrack()
 * @method ListScenarios ListScenarios()
 * @method ListPrivilegesByLoginName ListPrivilegesByLoginName()
 * @method DebugDialogueVn DebugDialogueVn()
 * @method ListCallEventDetailByContactId ListCallEventDetailByContactId()
 * @method DeleteSurvey DeleteSurvey()
 * @method GetConfigItem GetConfigItem()
 * @method DeleteVnCategory DeleteVnCategory()
 * @method ListAgentSummaryReportsByInterval ListAgentSummaryReportsByInterval()
 * @method CommonQueryTaobaoOrder CommonQueryTaobaoOrder()
 * @method ListUnreachableContacts ListUnreachableContacts()
 * @method ListRolesOfUser ListRolesOfUser()
 * @method UpdateCabServiceStatus UpdateCabServiceStatus()
 * @method ReleaseCabService ReleaseCabService()
 * @method AssignContactFlowToPhoneNumber AssignContactFlowToPhoneNumber()
 * @method RemoveUsersEx RemoveUsersEx()
 * @method ModifyCabInstance ModifyCabInstance()
 * @method StandardTemplateDemo StandardTemplateDemo()
 * @method EnableService EnableService()
 * @method ModifyStrategy ModifyStrategy()
 * @method DeleteMedia DeleteMedia()
 * @method DownloadTask DownloadTask()
 * @method MoveVnNavigationScript MoveVnNavigationScript()
 * @method RemoveRolesFromUser RemoveRolesFromUser()
 * @method GetStrategy GetStrategy()
 * @method GetContactIdentifyByOutBoundTaskId GetContactIdentifyByOutBoundTaskId()
 * @method DisableVnInstance DisableVnInstance()
 * @method AddBulkPhoneNumbers AddBulkPhoneNumbers()
 * @method DownloadBasicStatisticsReport DownloadBasicStatisticsReport()
 * @method ListFunctionMetas ListFunctionMetas()
 * @method Verify Verify()
 * @method CreateContactFlow CreateContactFlow()
 * @method GetNewbieTaskStatus GetNewbieTaskStatus()
 * @method RequestLoginInfo RequestLoginInfo()
 * @method QueryRandomNumbers QueryRandomNumbers()
 * @method ModifyUser ModifyUser()
 * @method ModifyRole ModifyRole()
 * @method GenerateAgentStatisticReport GenerateAgentStatisticReport()
 * @method DownloadRecord DownloadRecord()
 * @method DeleteJobGroup DeleteJobGroup()
 * @method UpdateTaobaoUserMap UpdateTaobaoUserMap()
 * @method GetAcquaintance GetAcquaintance()
 * @method CreateCorpIdentify CreateCorpIdentify()
 * @method ModifyVnGreetingConfig ModifyVnGreetingConfig()
 * @method ListSkillGroupSummaryReports ListSkillGroupSummaryReports()
 * @method GetExecutionDetailsOfPredictiveJob GetExecutionDetailsOfPredictiveJob()
 * @method ValidateUniqueDomainName ValidateUniqueDomainName()
 * @method DeleteFunctionMeta DeleteFunctionMeta()
 * @method CreateAXBBindRelation CreateAXBBindRelation()
 * @method TestFcInvocation TestFcInvocation()
 * @method AbortPredictiveJobs AbortPredictiveJobs()
 * @method MoveVnCategory MoveVnCategory()
 * @method LaunchAppraise LaunchAppraise()
 * @method RemovePrivilegesFromRole RemovePrivilegesFromRole()
 * @method DeleteCabInstance DeleteCabInstance()
 * @method LaunchShortMessageAppraise LaunchShortMessageAppraise()
 * @method UpdateTaobaoAccessTokenByAliyunPk UpdateTaobaoAccessTokenByAliyunPk()
 * @method GetPredictiveJobGroup GetPredictiveJobGroup()
 * @method ModifyScenario ModifyScenario()
 * @method GetScenario GetScenario()
 * @method GetInstanceSummaryReportSinceMidnight GetInstanceSummaryReportSinceMidnight()
 * @method AddUsersToSkillGroup AddUsersToSkillGroup()
 * @method AssignJobs AssignJobs()
 * @method CreateJobGroup CreateJobGroup()
 * @method DownloadConversationDetails DownloadConversationDetails()
 * @method UploadMedia UploadMedia()
 * @method PublishVnInstance PublishVnInstance()
 */
class V20170705
{
}

/**
 * @method $this setPhoneNumberId($phoneNumberId)
 * @method string getPhoneNumberId()
 */
class RemoveTestPhoneNumber extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method array getTaskId()
 */
class QueryCall extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setQueryParam($queryParam)
 * @method string getQueryParam()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListRecords extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setSurveyId($surveyId)
 * @method string getSurveyId()
 */
class GetSurvey extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetInstanceConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNavigationScriptId($navigationScriptId)
 * @method string getNavigationScriptId()
 */
class DescribeVnKnowledge extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCategoryId($categoryId)
 * @method string getCategoryId()
 * @method $this setUserUtterance($userUtterance)
 * @method string getUserUtterance()
 * @method $this setSimilarUtterances($similarUtterances)
 * @method array getSimilarUtterances()
 * @method $this setPrompt($prompt)
 * @method string getPrompt()
 * @method $this setInterruptible($interruptible)
 * @method bool getInterruptible()
 * @method $this setRedirectionType($redirectionType)
 * @method string getRedirectionType()
 * @method $this setRedirectionTarget($redirectionTarget)
 * @method string getRedirectionTarget()
 */
class CreateVnRedirection extends Request
{

}/**
 * @method $this setRamId($ramId)
 * @method int getRamId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setStopTime($stopTime)
 * @method int getStopTime()
 * @method $this setEvent($event)
 * @method string getEvent()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAgentEvents extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 */
class PreCreateMediaEx extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setConversationId($conversationId)
 * @method string getConversationId()
 * @method $this setInitialContext($initialContext)
 * @method string getInitialContext()
 */
class SilenceTimeoutVn extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetNotificationConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartDay($startDay)
 * @method string getStartDay()
 * @method $this setEndDay($endDay)
 * @method string getEndDay()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListSkillGroupData extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setRoutingStrategy($routingStrategy)
 * @method string getRoutingStrategy()
 * @method $this setOutboundPhoneNumberId($outboundPhoneNumberId)
 * @method array getOutboundPhoneNumberId()
 * @method $this setUserId($userId)
 * @method array getUserId()
 * @method $this setSkillLevel($skillLevel)
 * @method array getSkillLevel()
 * @method $this setAllowPrivateOutboundNumber($allowPrivateOutboundNumber)
 * @method bool getAllowPrivateOutboundNumber()
 */
class CreateSkillGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class GetUser extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRoleId($roleId)
 * @method string getRoleId()
 * @method $this setPrivilegeId($privilegeId)
 * @method array getPrivilegeId()
 */
class AssignPrivilegesToRole extends Request
{

}/**
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 * @method $this setInstanceDescription($instanceDescription)
 * @method string getInstanceDescription()
 * @method $this setMaxConcurrentConversation($maxConcurrentConversation)
 * @method int getMaxConcurrentConversation()
 * @method $this setCallCenterInstanceId($callCenterInstanceId)
 * @method string getCallCenterInstanceId()
 */
class CreateCabInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setConcurrency($concurrency)
 * @method int getConcurrency()
 */
class ModifyVnInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCategoryId($categoryId)
 * @method string getCategoryId()
 * @method $this setName($name)
 * @method string getName()
 */
class ModifyVnCategory extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setStartDay($startDay)
 * @method string getStartDay()
 * @method $this setEndDay($endDay)
 * @method string getEndDay()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetAgentData extends Request
{

}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class GetInstanceByDomainName extends Request
{

}/**
 * @method $this setdata($data)
 * @method string getdata()
 */
class Refund extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartDay($startDay)
 * @method string getStartDay()
 * @method $this setEndDay($endDay)
 * @method string getEndDay()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCriteria($criteria)
 * @method string getCriteria()
 */
class FindAgentData extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setService($service)
 * @method string getService()
 * @method $this setFunctionName($functionName)
 * @method string getFunctionName()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class AddFunctionMeta extends Request
{

}/**
 * @method $this setNameKeyword($nameKeyword)
 * @method string getNameKeyword()
 * @method $this setFlowTemplatesType($flowTemplatesType)
 * @method int getFlowTemplatesType()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListFlowTemplates extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DeleteInstanceEx extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCalleeNumber($calleeNumber)
 * @method string getCalleeNumber()
 * @method $this setCandidateNumber($candidateNumber)
 * @method array getCandidateNumber()
 * @method $this setCount($count)
 * @method int getCount()
 */
class PickOutboundNumbers extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ListVoiceAppraise extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setFunctionId($functionId)
 * @method string getFunctionId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setService($service)
 * @method string getService()
 * @method $this setFunctionName($functionName)
 * @method string getFunctionName()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyFunctionMeta extends Request
{

}/**
 * @method $this setCalledNumber($calledNumber)
 * @method string getCalledNumber()
 * @method $this setCallingNumber($callingNumber)
 * @method string getCallingNumber()
 * @method $this setConversationId($conversationId)
 * @method string getConversationId()
 * @method $this setInitialContext($initialContext)
 * @method string getInitialContext()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class BeginVnDialogue extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRoleId($roleId)
 * @method string getRoleId()
 */
class DeleteRole extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class RefreshToken extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class ListSkillGroupsOfUser extends Request
{

}/**
 * @method $this setCommodityInstanceId($commodityInstanceId)
 * @method string getCommodityInstanceId()
 */
class DisablePhoneNumber extends Request
{

}/**
 * @method $this setTaobaoUid($taobaoUid)
 * @method int getTaobaoUid()
 * @method $this setstartTime($startTime)
 * @method int getstartTime()
 * @method $this setendTime($endTime)
 * @method int getendTime()
 * @method $this setincludeAll($includeAll)
 * @method bool getincludeAll()
 * @method $this setexpiredOnly($expiredOnly)
 * @method bool getexpiredOnly()
 * @method $this setarticleCode($articleCode)
 * @method string getarticleCode()
 * @method $this setarticleItemCode($articleItemCode)
 * @method string getarticleItemCode()
 * @method $this settype($type)
 * @method int gettype()
 */
class GetTaobaoOrder extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListVnConversations extends Request
{

}/**
 * @method $this setTbUserid($tbUserid)
 * @method int getTbUserid()
 */
class RemoveTbAliyunUserMappingByTbUid extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCallType($callType)
 * @method string getCallType()
 * @method $this setUtterance($utterance)
 * @method string getUtterance()
 * @method $this setVendorParams($vendorParams)
 * @method string getVendorParams()
 */
class DialogueLite extends Request
{

}/**
 * @method $this setInterrupt($interrupt)
 * @method bool getInterrupt()
 * @method $this setInvoker($invoker)
 * @method string getInvoker()
 * @method $this setPk($pk)
 * @method string getPk()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setHid($hid)
 * @method int getHid()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($taskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($taskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($gmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($success)
 * @method bool getSuccess()
 * @method $this setMessage($message)
 * @method string getMessage()
 * @method $this setLevel($level)
 * @method int getLevel()
 * @method $this setUrl($url)
 * @method string getUrl()
 * @method $this setPrompt($prompt)
 * @method string getPrompt()
 */
class doCheckResource extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setStrategyJson($strategyJson)
 * @method string getStrategyJson()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setJobsJson($jobsJson)
 * @method array getJobsJson()
 * @method $this setJobFilePath($jobFilePath)
 * @method string getJobFilePath()
 */
class CreatePredictiveJobGroup extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ListVnPublishHistories extends Request
{

}/**
 * @method $this setProviderId($providerId)
 * @method string getProviderId()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setType($type)
 * @method string getType()
 */
class CreatePrivacyNumberPool extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactFlowId($contactFlowId)
 * @method string getContactFlowId()
 */
class DeleteContactFlow extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeVnNavigationConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListUsers extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setType($type)
 * @method int getType()
 */
class ListCategories extends Request
{

}/**
 * @method $this setProvider($provider)
 * @method string getProvider()
 * @method $this setId($id)
 * @method int getId()
 */
class DeleteSipAgentGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCallId($callId)
 * @method string getCallId()
 */
class GetJobStatusByCallId extends Request
{

}/**
 * @method $this setMaxInstances($maxInstances)
 * @method int getMaxInstances()
 * @method $this setMaxAgents($maxAgents)
 * @method int getMaxAgents()
 * @method $this setMaxOnlineAgents($maxOnlineAgents)
 * @method int getMaxOnlineAgents()
 * @method $this setStorageMaxDays($storageMaxDays)
 * @method int getStorageMaxDays()
 * @method $this setStorageMaxSize($storageMaxSize)
 * @method int getStorageMaxSize()
 * @method $this setMaxPhoneNumbers($maxPhoneNumbers)
 * @method int getMaxPhoneNumbers()
 * @method $this setMaxSkillGroups($maxSkillGroups)
 * @method int getMaxSkillGroups()
 * @method $this setMaxContactFlows($maxContactFlows)
 * @method int getMaxContactFlows()
 * @method $this setMaxRoles($maxRoles)
 * @method int getMaxRoles()
 */
class CreateOrModifySystemSpecification extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setOssFileName($ossFileName)
 * @method string getOssFileName()
 * @method $this setOssFilePath($ossFilePath)
 * @method string getOssFilePath()
 * @method $this setUploadResult($uploadResult)
 * @method string getUploadResult()
 */
class ModifyMedia extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setComponents($components)
 * @method string getComponents()
 */
class GradeCabService extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 */
class GetJobTemplateDownloadParams extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 */
class DeleteScenario extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCategoryId($categoryId)
 * @method string getCategoryId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryVnNavigationScripts extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSurveyId($surveyId)
 * @method string getSurveyId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFlowId($flowId)
 * @method string getFlowId()
 * @method $this setFlowJson($flowJson)
 * @method string getFlowJson()
 * @method $this setCorpora($corpora)
 * @method string getCorpora()
 * @method $this setSpeechOptimizationParam($speechOptimizationParam)
 * @method string getSpeechOptimizationParam()
 * @method $this setGlobalQuestions($globalQuestions)
 * @method string getGlobalQuestions()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setRound($round)
 * @method int getRound()
 * @method $this setBeebotId($beebotId)
 * @method string getBeebotId()
 * @method $this setFlowJsonOssKey($flowJsonOssKey)
 * @method string getFlowJsonOssKey()
 */
class ModifySurvey extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setConversationId($conversationId)
 * @method string getConversationId()
 * @method $this setInitialContext($initialContext)
 * @method string getInitialContext()
 */
class DebugAuthorizedVn extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ListStrategies extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setRoutingStrategy($routingStrategy)
 * @method string getRoutingStrategy()
 * @method $this setOutboundPhoneNumberId($outboundPhoneNumberId)
 * @method array getOutboundPhoneNumberId()
 * @method $this setUserId($userId)
 * @method array getUserId()
 * @method $this setSkillLevel($skillLevel)
 * @method array getSkillLevel()
 * @method $this setAllowPrivateOutboundNumber($allowPrivateOutboundNumber)
 * @method bool getAllowPrivateOutboundNumber()
 */
class ModifySkillGroupEx extends Request
{

}/**
 * @method $this setRealNameInsId($realNameInsId)
 * @method string getRealNameInsId()
 * @method $this setRegionNameCity($regionNameCity)
 * @method string getRegionNameCity()
 * @method $this setRegionNameProvince($regionNameProvince)
 * @method string getRegionNameProvince()
 * @method $this setCorpName($corpName)
 * @method string getCorpName()
 * @method $this setSpecId($specId)
 * @method string getSpecId()
 * @method $this setSpecName($specName)
 * @method string getSpecName()
 * @method $this setMonthlyPrice($monthlyPrice)
 * @method string getMonthlyPrice()
 * @method $this setNumber($number)
 * @method array getNumber()
 * @method $this setBuyerId($buyerId)
 * @method int getBuyerId()
 * @method $this setPayerId($payerId)
 * @method int getPayerId()
 */
class CreatePhoneRepayOrder extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setNewSession($newSession)
 * @method bool getNewSession()
 * @method $this setCallId($callId)
 * @method string getCallId()
 * @method $this setSurveyId($surveyId)
 * @method string getSurveyId()
 * @method $this setUtterance($utterance)
 * @method string getUtterance()
 */
class DebugIntent extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNavigationScriptId($navigationScriptId)
 * @method string getNavigationScriptId()
 */
class DescribeVnRedirection extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListTask extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStrategyJson($strategyJson)
 * @method string getStrategyJson()
 */
class CreateStrategy extends Request
{

}/**
 * @method $this setOwnerUid($ownerUid)
 * @method int getOwnerUid()
 */
class ReleaseService extends Request
{

}/**
 * @method $this setInstance($instance)
 * @method string getInstance()
 * @method $this setCallbackBody($callbackBody)
 * @method string getCallbackBody()
 */
class UploadMediaCallback extends Request
{

}/**
 * @method $this setProvider($provider)
 * @method string getProvider()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setSendInterface($sendInterface)
 * @method int getSendInterface()
 */
class ModifySipAgentGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 */
class ListOverviewRealTimeReport extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setTimeAlignment($timeAlignment)
 * @method string getTimeAlignment()
 * @method $this setContactName($contactName)
 * @method string getContactName()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListPredictiveJobStatus extends Request
{

}/**
 * @method $this setProvider($provider)
 * @method string getProvider()
 */
class ListCustomerNumbers extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListBasicStatisticsReportSubItems extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ListContactFlows extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 */
class GetJobGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPhoneNumbers($phoneNumbers)
 * @method string getPhoneNumbers()
 * @method $this setConfigId($configId)
 * @method int getConfigId()
 * @method $this setTemplateParam($templateParam)
 * @method string getTemplateParam()
 */
class SendPredefinedShortMessage extends Request
{

}/**
 * @method $this setSmsUpMessage($smsUpMessage)
 * @method array getSmsUpMessage()
 */
class ProcessRepliedShortMessages extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setStrategyJson($strategyJson)
 * @method string getStrategyJson()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setBeebotVersion($beebotVersion)
 * @method string getBeebotVersion()
 * @method $this setSurveysJson($surveysJson)
 * @method array getSurveysJson()
 */
class CreateScenario extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setStrategyJson($strategyJson)
 * @method string getStrategyJson()
 * @method $this setCallingNumber($callingNumber)
 * @method array getCallingNumber()
 * @method $this setJobFilePath($jobFilePath)
 * @method string getJobFilePath()
 * @method $this setSubmitted($submitted)
 * @method bool getSubmitted()
 */
class ModifyBatchJobs extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class ListOutboundPhoneNumberOfUser extends Request
{

}/**
 * @method $this setTaobaoUid($taobaoUid)
 * @method int getTaobaoUid()
 * @method $this setAvailableOnly($availableOnly)
 * @method bool getAvailableOnly()
 */
class QueryAliyunCorpNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setStrategyJson($strategyJson)
 * @method string getStrategyJson()
 * @method $this setCallingNumber($callingNumber)
 * @method array getCallingNumber()
 */
class ModifyJobGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactFlowId($contactFlowId)
 * @method string getContactFlowId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setType($type)
 * @method string getType()
 */
class ModifyContactFlow extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setConfigItem($configItem)
 * @method array getConfigItem()
 */
class ListConfigItemForFlat extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setDate($date)
 * @method string getDate()
 * @method $this setIndicatorName($indicatorName)
 * @method array getIndicatorName()
 */
class ListOverviewAccumulateReport extends Request
{

}/**
 * @method $this setRegionNameCity($regionNameCity)
 * @method string getRegionNameCity()
 * @method $this setRegionNameProvince($regionNameProvince)
 * @method string getRegionNameProvince()
 * @method $this setOffsiteCertPic($offsiteCertPic)
 * @method string getOffsiteCertPic()
 * @method $this setRealNameInsId($realNameInsId)
 * @method string getRealNameInsId()
 * @method $this setOrderId($orderId)
 * @method string getOrderId()
 */
class CopyCorpIdentify extends Request
{

}/**
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setWorkOrderId($workOrderId)
 * @method string getWorkOrderId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryNumberCorp extends Request
{

}/**
 * @method $this setCalledNumber($calledNumber)
 * @method string getCalledNumber()
 * @method $this setCallingNumber($callingNumber)
 * @method string getCallingNumber()
 * @method $this setConversationId($conversationId)
 * @method string getConversationId()
 * @method $this setInitialContext($initialContext)
 * @method string getInitialContext()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DebugBeginVnDialogue extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFlowJson($flowJson)
 * @method string getFlowJson()
 * @method $this setCorpora($corpora)
 * @method string getCorpora()
 * @method $this setSpeechOptimizationParam($speechOptimizationParam)
 * @method string getSpeechOptimizationParam()
 * @method $this setGlobalQuestions($globalQuestions)
 * @method string getGlobalQuestions()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setRound($round)
 * @method int getRound()
 * @method $this setBeebotId($beebotId)
 * @method string getBeebotId()
 * @method $this setFlowJsonOssKey($flowJsonOssKey)
 * @method string getFlowJsonOssKey()
 */
class CreateSurvey extends Request
{

}/**
 * @method $this setRecord($record)
 * @method array getRecord()
 */
class BatchCreateFeeRecord extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeVnInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setConversationId($conversationId)
 * @method string getConversationId()
 * @method $this setNumber($number)
 * @method string getNumber()
 */
class DebugCollectedVnNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStrategyId($strategyId)
 * @method string getStrategyId()
 */
class DeleteStrategy extends Request
{

}/**
 * @method $this setPics($pics)
 * @method string getPics()
 */
class ListCorpIdentifyOssLink extends Request
{

}/**
 * @method $this setInterrupt($interrupt)
 * @method bool getInterrupt()
 * @method $this setInvoker($invoker)
 * @method string getInvoker()
 * @method $this setPk($pk)
 * @method string getPk()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setHid($hid)
 * @method int getHid()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($taskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($taskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($gmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($success)
 * @method bool getSuccess()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class doPhysicalDeleteResource extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUtterances($utterances)
 * @method array getUtterances()
 * @method $this setPrompt($prompt)
 * @method string getPrompt()
 * @method $this setFinalAction($finalAction)
 * @method string getFinalAction()
 * @method $this setFinalActionParams($finalActionParams)
 * @method string getFinalActionParams()
 */
class ModifyVnComplainingConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DuplicateVnInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setConversationId($conversationId)
 * @method string getConversationId()
 * @method $this setUtterance($utterance)
 * @method string getUtterance()
 * @method $this setCalledNumber($calledNumber)
 * @method string getCalledNumber()
 * @method $this setCallingNumber($callingNumber)
 * @method string getCallingNumber()
 * @method $this setAdditionalContext($additionalContext)
 * @method string getAdditionalContext()
 */
class DialogueVn extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setStrategyJson($strategyJson)
 * @method string getStrategyJson()
 * @method $this setJobsJson($jobsJson)
 * @method array getJobsJson()
 */
class CreatePredictiveJobs extends Request
{

}/**
 * @method $this setphone($phone)
 * @method string getphone()
 * @method $this setpageSize($pageSize)
 * @method int getpageSize()
 * @method $this setpageNumber($pageNumber)
 * @method int getpageNumber()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class GetConsumedAmountMonthly extends Request
{

}/**
 * @method $this setTaobaoAliyunAccount($taobaoAliyunAccount)
 * @method array getTaobaoAliyunAccount()
 */
class BatchUpdateTaobaoUserMap extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setAll($all)
 * @method bool getAll()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setJobId($jobId)
 * @method array getJobId()
 */
class ResumePredictiveJobs extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTimeUnit($timeUnit)
 * @method string getTimeUnit()
 */
class DescribeVnPerformanceIndex extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAllImsUsers extends Request
{

}/**
 * @method $this setInstance($instance)
 * @method string getInstance()
 * @method $this setQuery($query)
 * @method string getQuery()
 */
class FindRecords extends Request
{

}/**
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setSubscriptionType($subscriptionType)
 * @method string getSubscriptionType()
 * @method $this setRole($role)
 * @method string getRole()
 */
class CreateRamInstance extends Request
{

}/**
 * @method $this settaobaoMainUid($taobaoMainUid)
 * @method int gettaobaoMainUid()
 * @method $this settaobaoUid($taobaoUid)
 * @method int gettaobaoUid()
 * @method $this setmainRamId($mainRamId)
 * @method int getmainRamId()
 * @method $this setramId($ramId)
 * @method int getramId()
 * @method $this setcaller($caller)
 * @method string getcaller()
 * @method $this setcallee($callee)
 * @method string getcallee()
 * @method $this setstatusCode($statusCode)
 * @method string getstatusCode()
 * @method $this setduration($duration)
 * @method int getduration()
 * @method $this setorigDuration($origDuration)
 * @method int getorigDuration()
 * @method $this setbizId($bizId)
 * @method string getbizId()
 * @method $this setstartTime($startTime)
 * @method int getstartTime()
 * @method $this setendTime($endTime)
 * @method int getendTime()
 */
class CreateFeeRecord extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setConversationId($conversationId)
 * @method string getConversationId()
 */
class ListVnConversationDetails extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setConversationId($conversationId)
 * @method string getConversationId()
 * @method $this setInitialContext($initialContext)
 * @method string getInitialContext()
 */
class AuthorizedVn extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setOutboundOnly($outboundOnly)
 * @method bool getOutboundOnly()
 */
class ListPhoneNumbers extends Request
{

}/**
 * @method $this setTaobaoUid($taobaoUid)
 * @method int getTaobaoUid()
 * @method $this settype($type)
 * @method int gettype()
 * @method $this setstatus($status)
 * @method int getstatus()
 * @method $this setExpiresIn($expiresIn)
 * @method int getExpiresIn()
 * @method $this setIncomingAccount($incomingAccount)
 * @method int getIncomingAccount()
 * @method $this setOutcomingAccount($outcomingAccount)
 * @method int getOutcomingAccount()
 * @method $this setOrderRecordId($orderRecordId)
 * @method int getOrderRecordId()
 * @method $this setPlanId($planId)
 * @method int getPlanId()
 * @method $this setStartDate($startDate)
 * @method int getStartDate()
 * @method $this setProdFee($prodFee)
 * @method Float getProdFee()
 * @method $this setTaobaoNick($taobaoNick)
 * @method string getTaobaoNick()
 * @method $this setPayDate($payDate)
 * @method int getPayDate()
 * @method $this setOrderId($orderId)
 * @method int getOrderId()
 * @method $this setParentOrderId($parentOrderId)
 * @method int getParentOrderId()
 * @method $this setFactMoney($factMoney)
 * @method Float getFactMoney()
 * @method $this setArticleCode($articleCode)
 * @method string getArticleCode()
 * @method $this setarticleItemCode($articleItemCode)
 * @method string getarticleItemCode()
 */
class CreateTaobaoOrder extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupIds($skillGroupIds)
 * @method string getSkillGroupIds()
 * @method $this setAgents($agents)
 * @method string getAgents()
 * @method $this setIntervalType($intervalType)
 * @method string getIntervalType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListSkillGroupSummaryReportsByInterval extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTts($tts)
 * @method string getTts()
 */
class TransformTtsToWav extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setIntervalType($intervalType)
 * @method string getIntervalType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class GetInstanceSummaryReportByInterval extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setJobStatus($jobStatus)
 * @method string getJobStatus()
 * @method $this setJobFailureReason($jobFailureReason)
 * @method string getJobFailureReason()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListJobsByGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetJob extends Request
{

}/**
 * @method $this setProvider($provider)
 * @method string getProvider()
 */
class PushSipAgentGroup extends Request
{

}/**
 * @method $this setOwnerUid($ownerUid)
 * @method int getOwnerUid()
 */
class ResumeService extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setStopTime($stopTime)
 * @method int getStopTime()
 * @method $this setCriteria($criteria)
 * @method string getCriteria()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListRecentCallRecords extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCriteria($criteria)
 * @method string getCriteria()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class FindUsers extends Request
{

}/**
 * @method $this setNumber($number)
 * @method string getNumber()
 * @method $this setTrunks($trunks)
 * @method int getTrunks()
 * @method $this setInboundOnly($inboundOnly)
 * @method bool getInboundOnly()
 */
class AddTestPhoneNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setValue($value)
 * @method string getValue()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setDimensionName($dimensionName)
 * @method string getDimensionName()
 */
class PutConfigItemForFlat extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNavigationScriptId($navigationScriptId)
 * @method string getNavigationScriptId()
 * @method $this setUserUtterance($userUtterance)
 * @method string getUserUtterance()
 * @method $this setSimilarUtterances($similarUtterances)
 * @method array getSimilarUtterances()
 * @method $this setAnswer($answer)
 * @method string getAnswer()
 * @method $this setInterruptible($interruptible)
 * @method bool getInterruptible()
 */
class ModifyVnKnowledge extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetCabInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setAgentIds($agentIds)
 * @method string getAgentIds()
 * @method $this setDisplayNameLike($displayNameLike)
 * @method string getDisplayNameLike()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setOrderByOccupancyRate($orderByOccupancyRate)
 * @method string getOrderByOccupancyRate()
 * @method $this setOrderByTotalCalls($orderByTotalCalls)
 * @method string getOrderByTotalCalls()
 * @method $this setOrderByTotalTalkTime($orderByTotalTalkTime)
 * @method string getOrderByTotalTalkTime()
 * @method $this setOrderByInboundTotalCalls($orderByInboundTotalCalls)
 * @method string getOrderByInboundTotalCalls()
 * @method $this setOrderByInboundTotalTalkTime($orderByInboundTotalTalkTime)
 * @method string getOrderByInboundTotalTalkTime()
 * @method $this setOrderByOutboundTotalCalls($orderByOutboundTotalCalls)
 * @method string getOrderByOutboundTotalCalls()
 * @method $this setOrderByOutboundTotalTalkTime($orderByOutboundTotalTalkTime)
 * @method string getOrderByOutboundTotalTalkTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAgentSummaryReports extends Request
{

}/**
 * @method $this setTbUserid($tbUserid)
 * @method int getTbUserid()
 * @method $this setTbNickname($tbNickname)
 * @method string getTbNickname()
 * @method $this setAliyunPk($aliyunPk)
 * @method int getAliyunPk()
 * @method $this setSubAccount($subAccount)
 * @method bool getSubAccount()
 * @method $this setPrimaryAccountPk($primaryAccountPk)
 * @method int getPrimaryAccountPk()
 * @method $this setAliyunAkId($aliyunAkId)
 * @method string getAliyunAkId()
 * @method $this setAliyunAkSecret($aliyunAkSecret)
 * @method string getAliyunAkSecret()
 */
class CreateTbAliyunUserMapping extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDn($dn)
 * @method string getDn()
 * @method $this setAgentId($agentId)
 * @method string getAgentId()
 */
class GetAgentState extends Request
{

}/**
 */
class ListInstancesOfUser extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListVnInstances extends Request
{

}/**
 * @method $this setIntervalType($intervalType)
 * @method string getIntervalType()
 * @method $this setYear($year)
 * @method int getYear()
 * @method $this setMonth($month)
 * @method int getMonth()
 * @method $this setDay($day)
 * @method int getDay()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetCallMeasureSummaryReport extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setComponents($components)
 * @method string getComponents()
 * @method $this setCommodityInstanceId($commodityInstanceId)
 * @method string getCommodityInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class EnableCabService extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactFlowVersionId($contactFlowVersionId)
 * @method string getContactFlowVersionId()
 */
class GetContactFlowVersion extends Request
{

}/**
 * @method $this setProviderId($providerId)
 * @method string getProviderId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setSubId($subId)
 * @method string getSubId()
 */
class UnbindPrivacyNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setDimensionName($dimensionName)
 * @method string getDimensionName()
 */
class GetConfigItemForFlat extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setAll($all)
 * @method bool getAll()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setJobId($jobId)
 * @method array getJobId()
 */
class SuspendPredictiveJobs extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNavigationScriptIds($navigationScriptIds)
 * @method array getNavigationScriptIds()
 */
class BatchDeleteVnNavigationScripts extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setAgents($agents)
 * @method string getAgents()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAgentStates extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenario($scenario)
 * @method array getScenario()
 */
class GetSmsConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCallId($callId)
 * @method string getCallId()
 * @method $this setContactId($contactId)
 * @method string getContactId()
 */
class ModifyPrivacyNumberCallDetail extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setRoleId($roleId)
 * @method array getRoleId()
 */
class AssignRolesToUser extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 */
class GetJobDataUploadParams extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setOptions($options)
 * @method string getOptions()
 * @method $this setType($type)
 * @method int getType()
 */
class CreateCategory extends Request
{

}/**
 * @method $this setProvince($province)
 * @method string getProvince()
 * @method $this setCity($city)
 * @method string getCity()
 * @method $this setSpecId($specId)
 * @method array getSpecId()
 */
class QueryVoiceNumberStockCount extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setStopTime($stopTime)
 * @method int getStopTime()
 * @method $this setCriteria($criteria)
 * @method string getCriteria()
 * @method $this setContactType($contactType)
 * @method string getContactType()
 * @method $this setContactDisposition($contactDisposition)
 * @method string getContactDisposition()
 * @method $this setWithRecording($withRecording)
 * @method bool getWithRecording()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListCallDetailRecords extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCallId($callId)
 * @method string getCallId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setActualTime($actualTime)
 * @method int getActualTime()
 * @method $this setCallingNumber($callingNumber)
 * @method string getCallingNumber()
 * @method $this setCalledNumber($calledNumber)
 * @method string getCalledNumber()
 * @method $this setDispositionCode($dispositionCode)
 * @method string getDispositionCode()
 */
class RecordFailure extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListTestPhoneNumbers extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setContactId($contactId)
 * @method string getContactId()
 * @method $this setAgentId($agentId)
 * @method string getAgentId()
 * @method $this setAgentName($agentName)
 * @method string getAgentName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListPrivacyNumberCallDetails extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetNavigatorContactFlow extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTelA($telA)
 * @method string getTelA()
 * @method $this setTelB($telB)
 * @method string getTelB()
 */
class CallOnlinePrivacyNumber extends Request
{

}/**
 * @method $this setCreateInstanceParam($createInstanceParam)
 * @method string getCreateInstanceParam()
 */
class CreateInstanceEx extends Request
{

}/**
 * @method $this setProviderId($providerId)
 * @method string getProviderId()
 * @method $this setAccountId($accountId)
 * @method string getAccountId()
 * @method $this setAuthToken($authToken)
 * @method string getAuthToken()
 */
class CreatePrivacyNumberAccount extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactFlowId($contactFlowId)
 * @method string getContactFlowId()
 */
class BeginContactFlowVersionModification extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setCallingNumber($callingNumber)
 * @method array getCallingNumber()
 * @method $this setJobJson($jobJson)
 * @method string getJobJson()
 * @method $this setSelfHostedCallCenter($selfHostedCallCenter)
 * @method bool getSelfHostedCallCenter()
 */
class StartJob extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DeleteInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setContent($content)
 * @method string getContent()
 */
class PreCreateMedia extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTargetVersion($targetVersion)
 * @method string getTargetVersion()
 */
class RollbackVnInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPrompt($prompt)
 * @method string getPrompt()
 * @method $this setThreshold($threshold)
 * @method int getThreshold()
 * @method $this setFinalPrompt($finalPrompt)
 * @method string getFinalPrompt()
 * @method $this setFinalAction($finalAction)
 * @method string getFinalAction()
 * @method $this setFinalActionParams($finalActionParams)
 * @method string getFinalActionParams()
 */
class ModifyVnUnrecognizingConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPhoneNumberId($phoneNumberId)
 * @method string getPhoneNumberId()
 * @method $this setUsage($usage)
 * @method string getUsage()
 * @method $this setContactFlowId($contactFlowId)
 * @method string getContactFlowId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method array getSkillGroupId()
 */
class ModifyPhoneNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ListRealTimeAgent extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 */
class DeleteSkillGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCategoryId($categoryId)
 * @method string getCategoryId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListVnNavigationScripts extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCalleeNumber($calleeNumber)
 * @method string getCalleeNumber()
 * @method $this setServiceTag($serviceTag)
 * @method array getServiceTag()
 * @method $this setSkillGroupId($skillGroupId)
 * @method array getSkillGroupId()
 * @method $this setCount($count)
 * @method int getCount()
 * @method $this setPrioritizedCallerArea($prioritizedCallerArea)
 * @method array getPrioritizedCallerArea()
 */
class PickOutboundNumbersByTags extends Request
{

}/**
 * @method $this setInterrupt($interrupt)
 * @method bool getInterrupt()
 * @method $this setInvoker($invoker)
 * @method string getInvoker()
 * @method $this setPk($pk)
 * @method string getPk()
 * @method $this setBid($bid)
 * @method string getBid()
 * @method $this setHid($hid)
 * @method int getHid()
 * @method $this setCountry($country)
 * @method string getCountry()
 * @method $this setTaskIdentifier($taskIdentifier)
 * @method string getTaskIdentifier()
 * @method $this setTaskExtraData($taskExtraData)
 * @method string getTaskExtraData()
 * @method $this setGmtWakeup($gmtWakeup)
 * @method string getGmtWakeup()
 * @method $this setSuccess($success)
 * @method bool getSuccess()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class doLogicalDeleteResource extends Request
{

}/**
 * @method $this setPoolId($poolId)
 * @method string getPoolId()
 */
class DeletePrivacyNumberPool extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactFlowVersionId($contactFlowVersionId)
 * @method string getContactFlowVersionId()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setIsAppraise($isAppraise)
 * @method bool getIsAppraise()
 */
class CreateVoiceAppraise extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPhoneNumbers($phoneNumbers)
 * @method string getPhoneNumbers()
 * @method $this setSignName($signName)
 * @method string getSignName()
 * @method $this setTemplateCode($templateCode)
 * @method string getTemplateCode()
 * @method $this setTemplateParam($templateParam)
 * @method string getTemplateParam()
 * @method $this setSmsUpExtendCode($smsUpExtendCode)
 * @method string getSmsUpExtendCode()
 * @method $this setOutId($outId)
 * @method string getOutId()
 */
class SendShortMessage extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setCategoryId($categoryId)
 * @method string getCategoryId()
 */
class DeleteCategory extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListPredictiveJobGroups extends Request
{

}/**
 * @method $this setRoleName($roleName)
 * @method string getRoleName()
 */
class GetInvokeRole extends Request
{

}/**
 * @method $this setTaobaoUid($taobaoUid)
 * @method int getTaobaoUid()
 * @method $this setRamId($ramId)
 * @method int getRamId()
 * @method $this setRealNameInsId($realNameInsId)
 * @method int getRealNameInsId()
 * @method $this setNumber($number)
 * @method string getNumber()
 * @method $this setregionNameProvince($regionNameProvince)
 * @method string getregionNameProvince()
 * @method $this setregionNameCity($regionNameCity)
 * @method string getregionNameCity()
 * @method $this setcorpName($corpName)
 * @method string getcorpName()
 * @method $this setmonthlyPrice($monthlyPrice)
 * @method string getmonthlyPrice()
 */
class CreateCorpNumber extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAvailableTestPhoneNumbers extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setRoleId($roleId)
 * @method array getRoleId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method array getSkillGroupId()
 * @method $this setSkillLevel($skillLevel)
 * @method array getSkillLevel()
 */
class ModifyUserEx extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setUsage($usage)
 * @method string getUsage()
 * @method $this setContactFlowId($contactFlowId)
 * @method string getContactFlowId()
 */
class AddPhoneNumberEx extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserRamId($userRamId)
 * @method array getUserRamId()
 * @method $this setRoleId($roleId)
 * @method array getRoleId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method array getSkillGroupId()
 * @method $this setSkillLevel($skillLevel)
 * @method array getSkillLevel()
 */
class AssignUsers extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeVnCategoryTree extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetInstanceState extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setAll($all)
 * @method bool getAll()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setJobId($jobId)
 * @method array getJobId()
 * @method $this setJobReferenceId($jobReferenceId)
 * @method array getJobReferenceId()
 */
class ResumeJobs extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactFlowVersionId($contactFlowVersionId)
 * @method string getContactFlowVersionId()
 */
class FallbackContactFlowVersion extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 * @method $this setStorageMaxDays($storageMaxDays)
 * @method int getStorageMaxDays()
 * @method $this setStorageMaxSize($storageMaxSize)
 * @method int getStorageMaxSize()
 * @method $this setDirectoryId($directoryId)
 * @method string getDirectoryId()
 * @method $this setAdminRamId($adminRamId)
 * @method array getAdminRamId()
 * @method $this setPhoneNumber($phoneNumber)
 * @method array getPhoneNumber()
 * @method $this setUserObject($userObject)
 * @method array getUserObject()
 */
class CreateInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNumber($number)
 * @method string getNumber()
 */
class GetNumberRegionInfo extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNavigationScriptIds($navigationScriptIds)
 * @method array getNavigationScriptIds()
 * @method $this setTargetCategoryId($targetCategoryId)
 * @method string getTargetCategoryId()
 */
class BatchMoveVnNavigationScripts extends Request
{

}/**
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 */
class ValidNotInUsePhoneNumber extends Request
{

}/**
 * @method $this setIntervalType($intervalType)
 * @method string getIntervalType()
 */
class ListCallMeasureSummaryReports extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setType($type)
 * @method string getType()
 */
class ListScenarioParameters extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUtterances($utterances)
 * @method array getUtterances()
 */
class ModifyVnRepeatingConfig extends Request
{

}/**
 * @method $this setRealNameInsId($realNameInsId)
 * @method string getRealNameInsId()
 * @method $this setRegionNameCity($regionNameCity)
 * @method string getRegionNameCity()
 * @method $this setRegionNameProvince($regionNameProvince)
 * @method string getRegionNameProvince()
 * @method $this setCorpName($corpName)
 * @method string getCorpName()
 * @method $this setSpecId($specId)
 * @method string getSpecId()
 * @method $this setSpecName($specName)
 * @method string getSpecName()
 * @method $this setMonthlyPrice($monthlyPrice)
 * @method int getMonthlyPrice()
 * @method $this setNumber($number)
 * @method array getNumber()
 */
class CreateCCCPhoneNumberOrder extends Request
{

}/**
 * @method $this setAccTaskId($accTaskId)
 * @method string getAccTaskId()
 */
class GetCabTask extends Request
{

}/**
 * @method $this setAccTaskId($accTaskId)
 * @method string getAccTaskId()
 */
class GetTwoPartiesCall extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setSeparator($separator)
 * @method string getSeparator()
 * @method $this setRoleId($roleId)
 * @method array getRoleId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method array getSkillGroupId()
 * @method $this setSkillLevel($skillLevel)
 * @method array getSkillLevel()
 * @method $this setUser($user)
 * @method array getUser()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setConfirmEmail($confirmEmail)
 * @method string getConfirmEmail()
 * @method $this setResetPassword($resetPassword)
 * @method bool getResetPassword()
 */
class CreateUsers extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCategoryId($categoryId)
 * @method string getCategoryId()
 * @method $this setUserUtterance($userUtterance)
 * @method string getUserUtterance()
 * @method $this setSimilarUtterances($similarUtterances)
 * @method array getSimilarUtterances()
 * @method $this setAnswer($answer)
 * @method string getAnswer()
 * @method $this setInterruptible($interruptible)
 * @method bool getInterruptible()
 */
class CreateVnKnowledge extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListJobGroups extends Request
{

}/**
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setQueryUpstream($queryUpstream)
 * @method bool getQueryUpstream()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryUnsetStatusCall extends Request
{

}/**
 * @method $this setLegalPersonrCertNumber($legalPersonrCertNumber)
 * @method string getLegalPersonrCertNumber()
 * @method $this setLegalPersonName($legalPersonName)
 * @method string getLegalPersonName()
 * @method $this setManagerContactPhoneNumber($managerContactPhoneNumber)
 * @method string getManagerContactPhoneNumber()
 * @method $this setOrganizationCode($organizationCode)
 * @method string getOrganizationCode()
 * @method $this setTelecomUndertakingPic($telecomUndertakingPic)
 * @method string getTelecomUndertakingPic()
 * @method $this setManagerCertPic($managerCertPic)
 * @method string getManagerCertPic()
 * @method $this setRegionNameCity($regionNameCity)
 * @method string getRegionNameCity()
 * @method $this setRegionNameProvince($regionNameProvince)
 * @method string getRegionNameProvince()
 * @method $this setCorpName($corpName)
 * @method string getCorpName()
 * @method $this setManagerName($managerName)
 * @method string getManagerName()
 * @method $this setManagerCertNumber($managerCertNumber)
 * @method string getManagerCertNumber()
 * @method $this setNumberApplicationLetterPic($numberApplicationLetterPic)
 * @method string getNumberApplicationLetterPic()
 * @method $this setBusinessLicensePic($businessLicensePic)
 * @method string getBusinessLicensePic()
 * @method $this setBusinessLicenseAddress($businessLicenseAddress)
 * @method string getBusinessLicenseAddress()
 * @method $this setApplyRemark($applyRemark)
 * @method string getApplyRemark()
 * @method $this setProcedureDesc($procedureDesc)
 * @method string getProcedureDesc()
 * @method $this setRegisteredFundCode($registeredFundCode)
 * @method string getRegisteredFundCode()
 * @method $this setSpecIdArray($specIdArray)
 * @method string getSpecIdArray()
 * @method $this setCorporationCertPic($corporationCertPic)
 * @method string getCorporationCertPic()
 * @method $this setBusinessType($businessType)
 * @method int getBusinessType()
 * @method $this setBusinessTypeDesc($businessTypeDesc)
 * @method string getBusinessTypeDesc()
 */
class ApplyCorpIdentify extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class GetSkillGroupIdByTaskId extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setStopTime($stopTime)
 * @method int getStopTime()
 * @method $this setCriteria($criteria)
 * @method string getCriteria()
 * @method $this setWithRecording($withRecording)
 * @method bool getWithRecording()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListCallDetailDatas extends Request
{

}/**
 * @method $this setProvider($provider)
 * @method string getProvider()
 */
class SetProvider extends Request
{

}/**
 * @method $this setProvider($provider)
 * @method string getProvider()
 */
class GetSipAgentGroupInfo extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setExtraAttr($extraAttr)
 * @method string getExtraAttr()
 */
class CreateTask extends Request
{

}/**
 * @method $this setTbUserid($tbUserid)
 * @method int getTbUserid()
 */
class GetTbAliyunUserMappingByTbUid extends Request
{

}/**
 * @method $this setOrder($order)
 * @method array getOrder()
 */
class UpdateTaobaoOrder extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactFlowVersionId($contactFlowVersionId)
 * @method string getContactFlowVersionId()
 */
class PublishContactFlowVersion extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactFlowVersionId($contactFlowVersionId)
 * @method string getContactFlowVersionId()
 * @method $this setCanvas($canvas)
 * @method string getCanvas()
 * @method $this setContent($content)
 * @method string getContent()
 */
class CommitContactFlowVersionModification extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNavigationScriptId($navigationScriptId)
 * @method string getNavigationScriptId()
 */
class DeleteVnNavigationScript extends Request
{

}/**
 * @method $this setProvider($provider)
 * @method string getProvider()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setSendInterface($sendInterface)
 * @method string getSendInterface()
 */
class AddSipAgentGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setuserRamInfo($userRamInfo)
 * @method array getuserRamInfo()
 * @method $this setRoleId($roleId)
 * @method array getRoleId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method array getSkillGroupId()
 * @method $this setSkillLevel($skillLevel)
 * @method array getSkillLevel()
 */
class AssignUsersEx extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ListRoles extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNewSession($newSession)
 * @method bool getNewSession()
 * @method $this setSurveyId($surveyId)
 * @method string getSurveyId()
 * @method $this setCallId($callId)
 * @method string getCallId()
 * @method $this setCallType($callType)
 * @method string getCallType()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setUtterance($utterance)
 * @method string getUtterance()
 * @method $this setActionParams($actionParams)
 * @method string getActionParams()
 * @method $this setCallingNumber($callingNumber)
 * @method string getCallingNumber()
 * @method $this setCalledNumber($calledNumber)
 * @method string getCalledNumber()
 */
class DebugDialogue extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setServiceType($serviceType)
 * @method string getServiceType()
 */
class GetServiceExtensions extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setDate($date)
 * @method string getDate()
 * @method $this setIndicatorName($indicatorName)
 * @method array getIndicatorName()
 */
class ListBarCharts extends Request
{

}/**
 * @method $this setbizId($bizId)
 * @method string getbizId()
 */
class DeleteFeeRecordByBizId extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setStrategyJson($strategyJson)
 * @method string getStrategyJson()
 * @method $this setCallingNumber($callingNumber)
 * @method array getCallingNumber()
 * @method $this setJobFilePath($jobFilePath)
 * @method string getJobFilePath()
 * @method $this setSubmitted($submitted)
 * @method bool getSubmitted()
 */
class CreateBatchJobs extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactFlowVersionId($contactFlowVersionId)
 * @method string getContactFlowVersionId()
 */
class CancelContactFlowVersionModification extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCalleeNumber($calleeNumber)
 * @method string getCalleeNumber()
 * @method $this setCandidateNumber($candidateNumber)
 * @method array getCandidateNumber()
 */
class PickLocalNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCaller($caller)
 * @method string getCaller()
 * @method $this setCallee($callee)
 * @method string getCallee()
 * @method $this setRoutingStrategy($routingStrategy)
 * @method string getRoutingStrategy()
 * @method $this setCabInstanceId($cabInstanceId)
 * @method string getCabInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setBizName($bizName)
 * @method string getBizName()
 * @method $this setContactFlowId($contactFlowId)
 * @method string getContactFlowId()
 * @method $this setContactFlowName($contactFlowName)
 * @method string getContactFlowName()
 * @method $this setProvider($provider)
 * @method string getProvider()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setAppToken($appToken)
 * @method string getAppToken()
 */
class Dial extends Request
{

}/**
 * @method $this setnumberStatus($numberStatus)
 * @method array getnumberStatus()
 */
class UpdateNumberStatus extends Request
{

}/**
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setWorkOrderId($workOrderId)
 * @method string getWorkOrderId()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryNumberCorpIdentify extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactId($contactId)
 * @method string getContactId()
 */
class ListRecordingByContactId extends Request
{

}/**
 * @method $this setOwnerUid($ownerUid)
 * @method int getOwnerUid()
 */
class SuspendService extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactFlowVersionId($contactFlowVersionId)
 * @method string getContactFlowVersionId()
 * @method $this setCanvas($canvas)
 * @method string getCanvas()
 * @method $this setContent($content)
 * @method string getContent()
 */
class ModifyContactFlowVersion extends Request
{

}/**
 * @method $this setPublicKey($publicKey)
 * @method string getPublicKey()
 * @method $this setCypherText($cypherText)
 * @method array getCypherText()
 */
class Decrypt extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCallingNumber($callingNumber)
 * @method string getCallingNumber()
 * @method $this setBeginTimeLeftRange($beginTimeLeftRange)
 * @method int getBeginTimeLeftRange()
 * @method $this setBeginTimeRightRange($beginTimeRightRange)
 * @method int getBeginTimeRightRange()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryVnConversations extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setContent($content)
 * @method string getContent()
 */
class PreModifyMedia extends Request
{

}/**
 * @method $this setProvider($provider)
 * @method string getProvider()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 */
class AddCustomerNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 */
class ListSurveys extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPhoneNumberId($phoneNumberId)
 * @method string getPhoneNumberId()
 * @method $this setContactFlowId($contactFlowId)
 * @method string getContactFlowId()
 */
class RemoveContactFlowFromPhoneNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class GetInstanceSummaryReport extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setChannel($channel)
 * @method string getChannel()
 */
class DownloadRecording extends Request
{

}/**
 * @method $this setDisplayName($displayName)
 * @method string getDisplayName()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLoginName($loginName)
 * @method string getLoginName()
 * @method $this setPhone($phone)
 * @method string getPhone()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setPrivateOutboundNumberId($privateOutboundNumberId)
 * @method string getPrivateOutboundNumberId()
 * @method $this setRoleId($roleId)
 * @method array getRoleId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method array getSkillGroupId()
 * @method $this setSkillLevel($skillLevel)
 * @method array getSkillLevel()
 */
class CreateUser extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setConversationId($conversationId)
 * @method string getConversationId()
 * @method $this setNumber($number)
 * @method string getNumber()
 */
class CollectedVnNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPrompt($prompt)
 * @method string getPrompt()
 * @method $this setTimeout($timeout)
 * @method int getTimeout()
 * @method $this setThreshold($threshold)
 * @method int getThreshold()
 * @method $this setFinalPrompt($finalPrompt)
 * @method string getFinalPrompt()
 * @method $this setFinalAction($finalAction)
 * @method string getFinalAction()
 * @method $this setFinalActionParams($finalActionParams)
 * @method string getFinalActionParams()
 */
class ModifyVnSilenceTimeoutConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setPrivilegeId($privilegeId)
 * @method array getPrivilegeId()
 * @method $this setUserId($userId)
 * @method array getUserId()
 */
class CreateRole extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setTimeAlignment($timeAlignment)
 * @method string getTimeAlignment()
 * @method $this setContactName($contactName)
 * @method string getContactName()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setJobStatus($jobStatus)
 * @method string getJobStatus()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListPredictiveJobs extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNamePrefix($namePrefix)
 * @method string getNamePrefix()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListMediasWithPublic extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRoleId($roleId)
 * @method string getRoleId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListUsersOfRole extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCallId($callId)
 * @method string getCallId()
 * @method $this setCallType($callType)
 * @method string getCallType()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setUtterance($utterance)
 * @method string getUtterance()
 * @method $this setActionParams($actionParams)
 * @method string getActionParams()
 * @method $this setCallingNumber($callingNumber)
 * @method string getCallingNumber()
 * @method $this setCalledNumber($calledNumber)
 * @method string getCalledNumber()
 */
class Dialogue extends Request
{

}/**
 * @method $this setRamId($ramId)
 * @method int getRamId()
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setStopTime($stopTime)
 * @method int getStopTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListWorkflowOfAgent extends Request
{

}/**
 * @method $this setTaobaoUid($taobaoUid)
 * @method int getTaobaoUid()
 */
class GetAggregateTaobaoOrder extends Request
{

}/**
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 */
class Demonstrate extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetPredictiveJob extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 */
class GetJobDataOssUploadParams extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setAll($all)
 * @method bool getAll()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setJobId($jobId)
 * @method array getJobId()
 * @method $this setJobReferenceId($jobReferenceId)
 * @method array getJobReferenceId()
 */
class SuspendJobs extends Request
{

}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setProviderId($providerId)
 * @method string getProviderId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setPoolId($poolId)
 * @method string getPoolId()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setTelX($telX)
 * @method string getTelX()
 * @method $this setPoolName($poolName)
 * @method string getPoolName()
 * @method $this setAreaCode($areaCode)
 * @method string getAreaCode()
 * @method $this setExtra($extra)
 * @method string getExtra()
 * @method $this setRegionNameCity($regionNameCity)
 * @method string getRegionNameCity()
 */
class BindAXNPrivacyNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setname($name)
 * @method array getname()
 * @method $this setvalue($value)
 * @method array getvalue()
 */
class PutInstanceConfig extends Request
{

}/**
 * @method $this setSpecId($specId)
 * @method int getSpecId()
 */
class QueryResDistribute extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setParentId($parentId)
 * @method string getParentId()
 */
class CreateVnCategory extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartDay($startDay)
 * @method string getStartDay()
 * @method $this setEndDay($endDay)
 * @method string getEndDay()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 */
class ListDetailOfSkillGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setConfigItem($configItem)
 * @method array getConfigItem()
 */
class PutConfigItemsForFlat extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setCategoryId($categoryId)
 * @method string getCategoryId()
 * @method $this setOptions($options)
 * @method string getOptions()
 * @method $this setModifyOption($modifyOption)
 * @method string getModifyOption()
 */
class ModifyCategory extends Request
{

}/**
 * @method $this setProvider($provider)
 * @method string getProvider()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 */
class DeleteCustomerNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactFlowId($contactFlowId)
 * @method string getContactFlowId()
 * @method $this setCallCenterNumber($callCenterNumber)
 * @method string getCallCenterNumber()
 * @method $this setCaller($caller)
 * @method string getCaller()
 * @method $this setCallee($callee)
 * @method string getCallee()
 * @method $this setTag($tag)
 * @method string getTag()
 */
class StartBack2BackCall extends Request
{

}/**
 * @method $this setProviderId($providerId)
 * @method string getProviderId()
 */
class GetPrivacyNumberAccount extends Request
{

}/**
 * @method $this setTaobaoUid($taobaoUid)
 * @method int getTaobaoUid()
 * @method $this setRamId($ramId)
 * @method int getRamId()
 */
class GetCorpNumber extends Request
{

}/**
 * @method $this setCccKey($cccKey)
 * @method string getCccKey()
 * @method $this setDayuKey($dayuKey)
 * @method string getDayuKey()
 */
class UploadCorpIdentifyFile extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setParentId($parentId)
 * @method string getParentId()
 */
class ListVnCategories extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactId($contactId)
 * @method string getContactId()
 */
class ListRecordingsByContactId extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setOssFileName($ossFileName)
 * @method string getOssFileName()
 * @method $this setOssFilePath($ossFilePath)
 * @method string getOssFilePath()
 * @method $this setUploadResult($uploadResult)
 * @method string getUploadResult()
 */
class CreateMediaEx extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setVariables($variables)
 * @method string getVariables()
 * @method $this setBeebotVersion($beebotVersion)
 * @method string getBeebotVersion()
 */
class CreateScenarioFromTemplate extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setSurveyId($surveyId)
 * @method string getSurveyId()
 */
class PublishSurvey extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setChannel($channel)
 * @method string getChannel()
 */
class DownloadMedia extends Request
{

}/**
 * @method $this setFile($file)
 * @method string getFile()
 */
class GetOssUrlForUploadFile extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setScenarioParameterId($scenarioParameterId)
 * @method string getScenarioParameterId()
 */
class DeleteScenarioParameter extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setAll($all)
 * @method bool getAll()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setJobId($jobId)
 * @method array getJobId()
 */
class CancelPredictiveJobs extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ListSkillGroups extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setGreetingConfig($greetingConfig)
 * @method string getGreetingConfig()
 * @method $this setAskingBackConfig($askingBackConfig)
 * @method string getAskingBackConfig()
 * @method $this setRepeatingConfig($repeatingConfig)
 * @method string getRepeatingConfig()
 * @method $this setUnrecognizingConfig($unrecognizingConfig)
 * @method string getUnrecognizingConfig()
 * @method $this setComplainingConfig($complainingConfig)
 * @method string getComplainingConfig()
 * @method $this setSilenceTimeoutConfig($silenceTimeoutConfig)
 * @method string getSilenceTimeoutConfig()
 */
class ModifyVnNavigationConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCaller($caller)
 * @method string getCaller()
 * @method $this setCallee($callee)
 * @method string getCallee()
 * @method $this setContractFlowId($contractFlowId)
 * @method string getContractFlowId()
 */
class SimpleDial extends Request
{

}/**
 * @method $this settaobaoMainUid($taobaoMainUid)
 * @method int gettaobaoMainUid()
 * @method $this settaobaoUid($taobaoUid)
 * @method int gettaobaoUid()
 * @method $this setmainRamId($mainRamId)
 * @method int getmainRamId()
 * @method $this setramId($ramId)
 * @method int getramId()
 * @method $this setphone($phone)
 * @method string getphone()
 * @method $this setstartTime($startTime)
 * @method int getstartTime()
 * @method $this setendTime($endTime)
 * @method int getendTime()
 */
class GetConsumedAmount extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setSignName($signName)
 * @method string getSignName()
 * @method $this setTemplateCode($templateCode)
 * @method string getTemplateCode()
 * @method $this setExtra($extra)
 * @method string getExtra()
 * @method $this setScenario($scenario)
 * @method int getScenario()
 */
class CreateSmsConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setBucket($bucket)
 * @method string getBucket()
 * @method $this setStorageMaxDays($storageMaxDays)
 * @method int getStorageMaxDays()
 * @method $this setStorageMaxSize($storageMaxSize)
 * @method int getStorageMaxSize()
 */
class ModifyInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setUserId($userId)
 * @method array getUserId()
 */
class RemoveUsersFromSkillGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class EnableVnInstance extends Request
{

}/**
 * @method $this setContactId($contactId)
 * @method string getContactId()
 * @method $this setMockResponse($mockResponse)
 * @method string getMockResponse()
 */
class QueryRedialIndicator extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListUsersOfSkillGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setRoutingStrategy($routingStrategy)
 * @method string getRoutingStrategy()
 * @method $this setAllowPrivateOutboundNumber($allowPrivateOutboundNumber)
 * @method bool getAllowPrivateOutboundNumber()
 */
class ModifySkillGroup extends Request
{

}/**
 * @method $this setRamId($ramId)
 * @method int getRamId()
 */
class ListPhoneNumbersByRamId extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setConcurrency($concurrency)
 * @method int getConcurrency()
 */
class CreateVnInstance extends Request
{

}/**
 * @method $this setTenantId($tenantId)
 * @method string getTenantId()
 * @method $this setFunctionId($functionId)
 * @method string getFunctionId()
 * @method $this setParameter($parameter)
 * @method string getParameter()
 */
class InvokeFunctionCompute extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class PublishCabIvr extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setEnabled($enabled)
 * @method bool getEnabled()
 * @method $this setPrompt($prompt)
 * @method string getPrompt()
 * @method $this setEnableNegativeFeedback($enableNegativeFeedback)
 * @method bool getEnableNegativeFeedback()
 * @method $this setNegativeFeedbackUtterances($negativeFeedbackUtterances)
 * @method array getNegativeFeedbackUtterances()
 * @method $this setNegativeFeedbackPrompt($negativeFeedbackPrompt)
 * @method string getNegativeFeedbackPrompt()
 * @method $this setNegativeFeedbackAction($negativeFeedbackAction)
 * @method string getNegativeFeedbackAction()
 * @method $this setNegativeFeedbackActionParams($negativeFeedbackActionParams)
 * @method string getNegativeFeedbackActionParams()
 */
class ModifyVnAskingBackConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setStopTime($stopTime)
 * @method int getStopTime()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setAgentId($agentId)
 * @method string getAgentId()
 * @method $this setCriteria($criteria)
 * @method string getCriteria()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListRecordings extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetContactFlow extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 */
class GenerateOverallStatisticsReport extends Request
{

}/**
 * @method $this setOrderId($orderId)
 * @method int getOrderId()
 */
class DeleteTaobaoOrder extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 */
class SubmitBatchJobs extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNamePrefix($namePrefix)
 * @method string getNamePrefix()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListMedias extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setAll($all)
 * @method bool getAll()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setJobId($jobId)
 * @method array getJobId()
 * @method $this setJobReferenceId($jobReferenceId)
 * @method array getJobReferenceId()
 */
class CancelJobs extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method array getUserId()
 */
class RemoveUsers extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setDefaultValue($defaultValue)
 * @method string getDefaultValue()
 */
class CreateScenarioParameter extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setdata($data)
 * @method string getdata()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class OrderSucceededCallback extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setProducerId($producerId)
 * @method string getProducerId()
 * @method $this setAccessPoint($accessPoint)
 * @method string getAccessPoint()
 * @method $this setTopic($topic)
 * @method string getTopic()
 * @method $this setSubscriptions($subscriptions)
 * @method array getSubscriptions()
 */
class ModifyNotificationConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRamId($ramId)
 * @method string getRamId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setPressKey($pressKey)
 * @method string getPressKey()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setPressKeyMapping($pressKeyMapping)
 * @method string getPressKeyMapping()
 * @method $this setAcid($acid)
 * @method string getAcid()
 * @method $this setSource($source)
 * @method string getSource()
 */
class Appraise extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setMessage($message)
 * @method string getMessage()
 */
class Log extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setTimeAlignment($timeAlignment)
 * @method string getTimeAlignment()
 * @method $this setContactName($contactName)
 * @method string getContactName()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListJobStatus extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DeleteVnInstance extends Request
{

}/**
 * @method $this setPublicKey($publicKey)
 * @method string getPublicKey()
 * @method $this setPlainText($plainText)
 * @method array getPlainText()
 */
class Encrypt extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListUnrecognizedIntents extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 */
class GenerateBasicStatisticsReport extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPhoneNumberId($phoneNumberId)
 * @method string getPhoneNumberId()
 */
class RemovePhoneNumber extends Request
{

}/**
 * @method $this setTaobaoUid($taobaoUid)
 * @method int getTaobaoUid()
 * @method $this setRamId($ramId)
 * @method int getRamId()
 */
class GetCorpIdentify extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class ListPrivilegesOfUser extends Request
{

}/**
 * @method $this setCommodityInstanceId($commodityInstanceId)
 * @method string getCommodityInstanceId()
 */
class EnablePhoneNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNavigationScriptId($navigationScriptId)
 * @method string getNavigationScriptId()
 * @method $this setUserUtterance($userUtterance)
 * @method string getUserUtterance()
 * @method $this setSimilarUtterances($similarUtterances)
 * @method array getSimilarUtterances()
 * @method $this setPrompt($prompt)
 * @method string getPrompt()
 * @method $this setInterruptible($interruptible)
 * @method bool getInterruptible()
 * @method $this setRedirectionType($redirectionType)
 * @method string getRedirectionType()
 * @method $this setRedirectionTarget($redirectionTarget)
 * @method string getRedirectionTarget()
 */
class ModifyVnRedirection extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRoleId($roleId)
 * @method string getRoleId()
 */
class ListPrivilegesOfRole extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPhoneNumberId($phoneNumberId)
 * @method string getPhoneNumberId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setStopTime($stopTime)
 * @method int getStopTime()
 */
class ListPerformanceSummary extends Request
{

}/**
 * @method $this setUpdateTenantData($updateTenantData)
 * @method array getUpdateTenantData()
 */
class UpdateTenant extends Request
{

}/**
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setProviderId($providerId)
 * @method string getProviderId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setPoolId($poolId)
 * @method string getPoolId()
 */
class ListPrivacyNumbersOfPool extends Request
{

}/**
 * @method $this setTenantId($tenantId)
 * @method string getTenantId()
 * @method $this setConfigId($configId)
 * @method string getConfigId()
 * @method $this setTemplateParam($templateParam)
 * @method string getTemplateParam()
 * @method $this setPhoneNumbers($phoneNumbers)
 * @method string getPhoneNumbers()
 */
class InvokeSendMessage extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 */
class DownloadOriginalStatisticsReport extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 */
class DownloadUnreachableContacts extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartDay($startDay)
 * @method string getStartDay()
 * @method $this setEndDay($endDay)
 * @method string getEndDay()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAgentData extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setNodeId($nodeId)
 * @method string getNodeId()
 */
class ListConversationsWithUnrecognizedIntents extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobId($jobId)
 * @method array getJobId()
 */
class GetJobs extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCaller($caller)
 * @method string getCaller()
 * @method $this setCalleeAgent($calleeAgent)
 * @method string getCalleeAgent()
 * @method $this setCalleeCustomer($calleeCustomer)
 * @method string getCalleeCustomer()
 */
class TwoPartiesCall extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setOssFileName($ossFileName)
 * @method string getOssFileName()
 * @method $this setOssFilePath($ossFilePath)
 * @method string getOssFilePath()
 * @method $this setUploadResult($uploadResult)
 * @method string getUploadResult()
 */
class CreateMedia extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ListPredictiveJobGroupOverallStatus extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListImsUsers extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setConnectId($connectId)
 * @method string getConnectId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setStopTime($stopTime)
 * @method int getStopTime()
 * @method $this setCallingNumber($callingNumber)
 * @method string getCallingNumber()
 * @method $this setCalledNumber($calledNumber)
 * @method string getCalledNumber()
 * @method $this setAgentId($agentId)
 * @method string getAgentId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListRecordingOfDualTrack extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ListScenarios extends Request
{

}/**
 * @method $this setLoginName($loginName)
 * @method string getLoginName()
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 */
class ListPrivilegesByLoginName extends Request
{

}/**
 * @method $this setConversationId($conversationId)
 * @method string getConversationId()
 * @method $this setAdditionalContext($additionalContext)
 * @method string getAdditionalContext()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUtterance($utterance)
 * @method string getUtterance()
 */
class DebugDialogueVn extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactId($contactId)
 * @method string getContactId()
 */
class ListCallEventDetailByContactId extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setSurveyId($surveyId)
 * @method string getSurveyId()
 */
class DeleteSurvey extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setInherit($inherit)
 * @method bool getInherit()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setDimensionName($dimensionName)
 * @method string getDimensionName()
 */
class GetConfigItem extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCategoryId($categoryId)
 * @method string getCategoryId()
 */
class DeleteVnCategory extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setAgentIds($agentIds)
 * @method string getAgentIds()
 * @method $this setIntervalType($intervalType)
 * @method string getIntervalType()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAgentSummaryReportsByInterval extends Request
{

}/**
 * @method $this setTaobaoUid($taobaoUid)
 * @method int getTaobaoUid()
 * @method $this setstartTime($startTime)
 * @method int getstartTime()
 * @method $this setendTime($endTime)
 * @method int getendTime()
 * @method $this setStatusList($statusList)
 * @method string getStatusList()
 * @method $this setarticleCodeList($articleCodeList)
 * @method string getarticleCodeList()
 * @method $this setarticleItemCodeList($articleItemCodeList)
 * @method string getarticleItemCodeList()
 * @method $this settypeList($typeList)
 * @method string gettypeList()
 */
class CommonQueryTaobaoOrder extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListUnreachableContacts extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class ListRolesOfUser extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setSuspend($suspend)
 * @method bool getSuspend()
 */
class UpdateCabServiceStatus extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 */
class ReleaseCabService extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPhoneNumberId($phoneNumberId)
 * @method string getPhoneNumberId()
 * @method $this setContactFlowId($contactFlowId)
 * @method string getContactFlowId()
 */
class AssignContactFlowToPhoneNumber extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method array getUserId()
 */
class RemoveUsersEx extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstanceName($instanceName)
 * @method string getInstanceName()
 * @method $this setInstanceDescription($instanceDescription)
 * @method string getInstanceDescription()
 * @method $this setMaxConcurrentConversation($maxConcurrentConversation)
 * @method int getMaxConcurrentConversation()
 * @method $this setCallCenterInstanceId($callCenterInstanceId)
 * @method string getCallCenterInstanceId()
 */
class ModifyCabInstance extends Request
{

}/**
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 */
class StandardTemplateDemo extends Request
{

}/**
 * @method $this setAliyunPk($aliyunPk)
 * @method int getAliyunPk()
 */
class EnableService extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStrategyId($strategyId)
 * @method string getStrategyId()
 * @method $this setStrategyJson($strategyJson)
 * @method string getStrategyJson()
 */
class ModifyStrategy extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 */
class DeleteMedia extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 * @method $this setChannel($channel)
 * @method string getChannel()
 */
class DownloadTask extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setNavigationScriptId($navigationScriptId)
 * @method string getNavigationScriptId()
 * @method $this setTargetCategoryId($targetCategoryId)
 * @method string getTargetCategoryId()
 */
class MoveVnNavigationScript extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setRoleId($roleId)
 * @method array getRoleId()
 */
class RemoveRolesFromUser extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStrategyId($strategyId)
 * @method string getStrategyId()
 */
class GetStrategy extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setOutboundTaskId($outboundTaskId)
 * @method string getOutboundTaskId()
 */
class GetContactIdentifyByOutBoundTaskId extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DisableVnInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setPhoneNumber($phoneNumber)
 * @method array getPhoneNumber()
 * @method $this setUsage($usage)
 * @method string getUsage()
 * @method $this setContactFlowId($contactFlowId)
 * @method string getContactFlowId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method array getSkillGroupId()
 */
class AddBulkPhoneNumbers extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 */
class DownloadBasicStatisticsReport extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class ListFunctionMetas extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setdata($data)
 * @method string getdata()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 */
class Verify extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setCanvas($canvas)
 * @method string getCanvas()
 * @method $this setContent($content)
 * @method string getContent()
 */
class CreateContactFlow extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetNewbieTaskStatus extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class RequestLoginInfo extends Request
{

}/**
 * @method $this setProvince($province)
 * @method string getProvince()
 * @method $this setCity($city)
 * @method string getCity()
 * @method $this setRemainCount($remainCount)
 * @method int getRemainCount()
 * @method $this setOrderId($orderId)
 * @method int getOrderId()
 * @method $this setMonthlyPrice($monthlyPrice)
 * @method int getMonthlyPrice()
 * @method $this setSpecId($specId)
 * @method int getSpecId()
 */
class QueryRandomNumbers extends Request
{

}/**
 * @method $this setDisplayName($displayName)
 * @method string getDisplayName()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setPhone($phone)
 * @method string getPhone()
 * @method $this setEmail($email)
 * @method string getEmail()
 * @method $this setPrivateOutboundNumberId($privateOutboundNumberId)
 * @method string getPrivateOutboundNumberId()
 * @method $this setRoleId($roleId)
 * @method array getRoleId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method array getSkillGroupId()
 * @method $this setSkillLevel($skillLevel)
 * @method array getSkillLevel()
 */
class ModifyUser extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRoleId($roleId)
 * @method string getRoleId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setPrivilegeId($privilegeId)
 * @method array getPrivilegeId()
 * @method $this setUserId($userId)
 * @method array getUserId()
 */
class ModifyRole extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setAgentId($agentId)
 * @method string getAgentId()
 * @method $this setStartDate($startDate)
 * @method string getStartDate()
 * @method $this setEndDate($endDate)
 * @method string getEndDate()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GenerateAgentStatisticReport extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setConnectId($connectId)
 * @method string getConnectId()
 * @method $this setChannel($channel)
 * @method string getChannel()
 */
class DownloadRecord extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 */
class DeleteJobGroup extends Request
{

}/**
 * @method $this settaobaoUid($taobaoUid)
 * @method int gettaobaoUid()
 * @method $this setstatus($status)
 * @method int getstatus()
 */
class UpdateTaobaoUserMap extends Request
{

}/**
 * @method $this setTenant($tenant)
 * @method string getTenant()
 * @method $this setNumber($number)
 * @method string getNumber()
 * @method $this setLimitCount($limitCount)
 * @method int getLimitCount()
 * @method $this setContactType($contactType)
 * @method int getContactType()
 * @method $this setContactDisposition($contactDisposition)
 * @method int getContactDisposition()
 * @method $this setDays($days)
 * @method int getDays()
 */
class GetAcquaintance extends Request
{

}/**
 * @method $this setcorpName($corpName)
 * @method string getcorpName()
 * @method $this setTaobaoUid($taobaoUid)
 * @method int getTaobaoUid()
 * @method $this setRamId($ramId)
 * @method int getRamId()
 * @method $this setOrderId($orderId)
 * @method int getOrderId()
 * @method $this setpartnerId($partnerId)
 * @method int getpartnerId()
 * @method $this setapplyRemark($applyRemark)
 * @method string getapplyRemark()
 * @method $this setregionNameProvince($regionNameProvince)
 * @method string getregionNameProvince()
 * @method $this setregionNameCity($regionNameCity)
 * @method string getregionNameCity()
 * @method $this setlegalPersonName($legalPersonName)
 * @method string getlegalPersonName()
 * @method $this setlegalPersonCertNumber($legalPersonCertNumber)
 * @method string getlegalPersonCertNumber()
 * @method $this setmanagerContactPhoneNumber($managerContactPhoneNumber)
 * @method string getmanagerContactPhoneNumber()
 * @method $this setmanagerName($managerName)
 * @method string getmanagerName()
 * @method $this setbusinessLicenseAddress($businessLicenseAddress)
 * @method string getbusinessLicenseAddress()
 * @method $this setmanagerCertNumber($managerCertNumber)
 * @method string getmanagerCertNumber()
 * @method $this setorganizationCode($organizationCode)
 * @method string getorganizationCode()
 * @method $this settelecomUndertakingPic($telecomUndertakingPic)
 * @method string gettelecomUndertakingPic()
 * @method $this setmanagerCertPic($managerCertPic)
 * @method string getmanagerCertPic()
 * @method $this setnumberApplicationLetterPic($numberApplicationLetterPic)
 * @method string getnumberApplicationLetterPic()
 * @method $this setbusinessLicensePic($businessLicensePic)
 * @method string getbusinessLicensePic()
 * @method $this setprocedureDesc($procedureDesc)
 * @method string getprocedureDesc()
 */
class CreateCorpIdentify extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setGreetingWords($greetingWords)
 * @method string getGreetingWords()
 */
class ModifyVnGreetingConfig extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupIds($skillGroupIds)
 * @method string getSkillGroupIds()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setOrderByOccupancyRate($orderByOccupancyRate)
 * @method string getOrderByOccupancyRate()
 * @method $this setOrderByTotalCalls($orderByTotalCalls)
 * @method string getOrderByTotalCalls()
 * @method $this setOrderByTotalTalkTime($orderByTotalTalkTime)
 * @method string getOrderByTotalTalkTime()
 * @method $this setOrderByInboundTotalCalls($orderByInboundTotalCalls)
 * @method string getOrderByInboundTotalCalls()
 * @method $this setOrderByInboundTotalTalkTime($orderByInboundTotalTalkTime)
 * @method string getOrderByInboundTotalTalkTime()
 * @method $this setOrderByOutboundTotalCalls($orderByOutboundTotalCalls)
 * @method string getOrderByOutboundTotalCalls()
 * @method $this setOrderByOutboundTotalTalkTime($orderByOutboundTotalTalkTime)
 * @method string getOrderByOutboundTotalTalkTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListSkillGroupSummaryReports extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetExecutionDetailsOfPredictiveJob extends Request
{

}/**
 * @method $this setDomainName($domainName)
 * @method string getDomainName()
 */
class ValidateUniqueDomainName extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setFunctionId($functionId)
 * @method string getFunctionId()
 */
class DeleteFunctionMeta extends Request
{

}/**
 * @method $this setProviderId($providerId)
 * @method string getProviderId()
 * @method $this setBizId($bizId)
 * @method string getBizId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setPoolId($poolId)
 * @method string getPoolId()
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setPoolName($poolName)
 * @method string getPoolName()
 * @method $this setExtra($extra)
 * @method string getExtra()
 */
class CreateAXBBindRelation extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setService($service)
 * @method string getService()
 * @method $this setFunctionName($functionName)
 * @method string getFunctionName()
 * @method $this setRole($role)
 * @method string getRole()
 * @method $this setParameter($parameter)
 * @method string getParameter()
 */
class TestFcInvocation extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setAll($all)
 * @method bool getAll()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setJobId($jobId)
 * @method array getJobId()
 */
class AbortPredictiveJobs extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTargetParentId($targetParentId)
 * @method string getTargetParentId()
 * @method $this setCategoryId($categoryId)
 * @method string getCategoryId()
 * @method $this setTargetPreviousSiblingId($targetPreviousSiblingId)
 * @method string getTargetPreviousSiblingId()
 */
class MoveVnCategory extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setAcid($acid)
 * @method string getAcid()
 */
class LaunchAppraise extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setRoleId($roleId)
 * @method string getRoleId()
 * @method $this setPrivilegeId($privilegeId)
 * @method array getPrivilegeId()
 */
class RemovePrivilegesFromRole extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DeleteCabInstance extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setAcid($acid)
 * @method string getAcid()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setContactType($contactType)
 * @method int getContactType()
 * @method $this setPhoneNumbers($phoneNumbers)
 * @method string getPhoneNumbers()
 */
class LaunchShortMessageAppraise extends Request
{

}/**
 * @method $this setAliyunPk($aliyunPk)
 * @method int getAliyunPk()
 * @method $this setTaobaoAccessToken($taobaoAccessToken)
 * @method string getTaobaoAccessToken()
 * @method $this setTaobaoAccessTokenExpiresIn($taobaoAccessTokenExpiresIn)
 * @method int getTaobaoAccessTokenExpiresIn()
 */
class UpdateTaobaoAccessTokenByAliyunPk extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 */
class GetPredictiveJobGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setVariables($variables)
 * @method string getVariables()
 */
class ModifyScenario extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 */
class GetScenario extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class GetInstanceSummaryReportSinceMidnight extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setUserId($userId)
 * @method array getUserId()
 * @method $this setSkillLevel($skillLevel)
 * @method array getSkillLevel()
 */
class AddUsersToSkillGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setStrategyJson($strategyJson)
 * @method string getStrategyJson()
 * @method $this setCallingNumber($callingNumber)
 * @method array getCallingNumber()
 * @method $this setJobsJson($jobsJson)
 * @method array getJobsJson()
 */
class AssignJobs extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setScenarioId($scenarioId)
 * @method string getScenarioId()
 * @method $this setStrategyJson($strategyJson)
 * @method string getStrategyJson()
 * @method $this setCallingNumber($callingNumber)
 * @method array getCallingNumber()
 */
class CreateJobGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 */
class DownloadConversationDetails extends Request
{

}/**
 * @method $this setInstance($instance)
 * @method string getInstance()
 * @method $this setMedia($media)
 * @method int getMedia()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setCallbackUrl($callbackUrl)
 * @method string getCallbackUrl()
 * @method $this setCallbackHost($callbackHost)
 * @method string getCallbackHost()
 */
class UploadMedia extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class PublishVnInstance extends Request
{

}