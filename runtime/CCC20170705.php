<?php

namespace aliyun\sdk\services\CCC20170705;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170705
 *
 * @package aliyun\sdk\services\CCC20170705
 * @method GetSurvey GetSurvey()
 * @method ListAgentEvents ListAgentEvents()
 * @method CreateSkillGroup CreateSkillGroup()
 * @method GetUser GetUser()
 * @method CreateCabInstance CreateCabInstance()
 * @method GetAgentData GetAgentData()
 * @method PickOutboundNumbers PickOutboundNumbers()
 * @method ListVoiceAppraise ListVoiceAppraise()
 * @method RefreshToken RefreshToken()
 * @method ListScenarioTemplates ListScenarioTemplates()
 * @method ListSkillGroupsOfUser ListSkillGroupsOfUser()
 * @method ListUsers ListUsers()
 * @method GetJobStatusByCallId GetJobStatusByCallId()
 * @method ModifyMedia ModifyMedia()
 * @method GetJobTemplateDownloadParams GetJobTemplateDownloadParams()
 * @method ModifySurvey ModifySurvey()
 * @method ListPredictiveJobStatus ListPredictiveJobStatus()
 * @method ListBasicStatisticsReportSubItems ListBasicStatisticsReportSubItems()
 * @method ListContactFlows ListContactFlows()
 * @method ListConfig ListConfig()
 * @method GetJobGroup GetJobGroup()
 * @method SendPredefinedShortMessage SendPredefinedShortMessage()
 * @method ListSkillGroupStates ListSkillGroupStates()
 * @method CreateScenario CreateScenario()
 * @method ListOutboundPhoneNumberOfUser ListOutboundPhoneNumberOfUser()
 * @method CreateSurvey CreateSurvey()
 * @method GetConversationList GetConversationList()
 * @method CreatePredictiveJobs CreatePredictiveJobs()
 * @method ListPhoneNumbers ListPhoneNumbers()
 * @method ModifySkillGroupOfUser ModifySkillGroupOfUser()
 * @method ListSkillGroupSummaryReportsByInterval ListSkillGroupSummaryReportsByInterval()
 * @method GetInstanceSummaryReportByInterval GetInstanceSummaryReportByInterval()
 * @method ListJobsByGroup ListJobsByGroup()
 * @method GetJob GetJob()
 * @method ListRecentCallRecords ListRecentCallRecords()
 * @method FindUsers FindUsers()
 * @method ListAgentSummaryReports ListAgentSummaryReports()
 * @method GetAgentState GetAgentState()
 * @method GetCallMeasureSummaryReport GetCallMeasureSummaryReport()
 * @method ListAgentStates ListAgentStates()
 * @method GetSmsConfig GetSmsConfig()
 * @method ModifyPrivacyNumberCallDetail ModifyPrivacyNumberCallDetail()
 * @method GetJobDataUploadParams GetJobDataUploadParams()
 * @method RemoveNumberFromSkillGroup RemoveNumberFromSkillGroup()
 * @method ListCallDetailRecords ListCallDetailRecords()
 * @method ListPrivacyNumberCallDetails ListPrivacyNumberCallDetails()
 * @method CallOnlinePrivacyNumber CallOnlinePrivacyNumber()
 * @method StartJob StartJob()
 * @method DeleteInstance DeleteInstance()
 * @method PreCreateMedia PreCreateMedia()
 * @method ModifyPhoneNumber ModifyPhoneNumber()
 * @method ListRealTimeAgent ListRealTimeAgent()
 * @method DeleteSkillGroup DeleteSkillGroup()
 * @method PickOutboundNumbersByTags PickOutboundNumbersByTags()
 * @method CreateVoiceAppraise CreateVoiceAppraise()
 * @method ListAgentSummaryReportsSinceMidnight ListAgentSummaryReportsSinceMidnight()
 * @method AssignUsers AssignUsers()
 * @method GetInstanceState GetInstanceState()
 * @method ResumeJobs ResumeJobs()
 * @method GetConfig GetConfig()
 * @method CreateInstance CreateInstance()
 * @method GetNumberRegionInfo GetNumberRegionInfo()
 * @method ListCallMeasureSummaryReports ListCallMeasureSummaryReports()
 * @method ListJobGroups ListJobGroups()
 * @method PublishContactFlowVersion PublishContactFlowVersion()
 * @method CommitContactFlowVersionModification CommitContactFlowVersionModification()
 * @method AddPhoneNumber AddPhoneNumber()
 * @method ListRoles ListRoles()
 * @method GetServiceExtensions GetServiceExtensions()
 * @method CreateBatchJobs CreateBatchJobs()
 * @method PickLocalNumber PickLocalNumber()
 * @method PreModifyMedia PreModifyMedia()
 * @method ListSurveys ListSurveys()
 * @method GetInstanceSummaryReport GetInstanceSummaryReport()
 * @method DownloadRecording DownloadRecording()
 * @method CreateUser CreateUser()
 * @method AddNumberToSkillGroup AddNumberToSkillGroup()
 * @method Dialogue Dialogue()
 * @method GetPredictiveJob GetPredictiveJob()
 * @method SuspendJobs SuspendJobs()
 * @method CreateCCCPostOrder CreateCCCPostOrder()
 * @method StartBack2BackCall StartBack2BackCall()
 * @method ListRecordingsByContactId ListRecordingsByContactId()
 * @method CreateScenarioFromTemplate CreateScenarioFromTemplate()
 * @method GetConversationDetailByContactId GetConversationDetailByContactId()
 * @method PublishSurvey PublishSurvey()
 * @method CancelPredictiveJobs CancelPredictiveJobs()
 * @method ListSkillGroups ListSkillGroups()
 * @method GetInstance GetInstance()
 * @method SimpleDial SimpleDial()
 * @method RemoveUsersFromSkillGroup RemoveUsersFromSkillGroup()
 * @method QueryRedialIndicator QueryRedialIndicator()
 * @method ListUsersOfSkillGroup ListUsersOfSkillGroup()
 * @method ModifySkillGroup ModifySkillGroup()
 * @method ListRecordings ListRecordings()
 * @method SubmitBatchJobs SubmitBatchJobs()
 * @method ListMedias ListMedias()
 * @method CancelJobs CancelJobs()
 * @method RemoveUsers RemoveUsers()
 * @method ModifyNotificationConfig ModifyNotificationConfig()
 * @method ListJobStatus ListJobStatus()
 * @method RemovePhoneNumber RemovePhoneNumber()
 * @method ListPrivilegesOfUser ListPrivilegesOfUser()
 * @method DownloadOriginalStatisticsReport DownloadOriginalStatisticsReport()
 * @method DownloadUnreachableContacts DownloadUnreachableContacts()
 * @method TwoPartiesCall TwoPartiesCall()
 * @method CreateMedia CreateMedia()
 * @method ListRecordingOfDualTrack ListRecordingOfDualTrack()
 * @method ListScenarios ListScenarios()
 * @method DeleteSurvey DeleteSurvey()
 * @method ListAgentSummaryReportsByInterval ListAgentSummaryReportsByInterval()
 * @method ListUnreachableContacts ListUnreachableContacts()
 * @method ListSkillGroupSummaryReportsSinceMidnight ListSkillGroupSummaryReportsSinceMidnight()
 * @method DeleteMedia DeleteMedia()
 * @method GetContactIdentifyByOutBoundTaskId GetContactIdentifyByOutBoundTaskId()
 * @method AddBulkPhoneNumbers AddBulkPhoneNumbers()
 * @method CreateContactFlow CreateContactFlow()
 * @method RequestLoginInfo RequestLoginInfo()
 * @method ModifyUser ModifyUser()
 * @method GenerateAgentStatisticReport GenerateAgentStatisticReport()
 * @method DeleteJobGroup DeleteJobGroup()
 * @method GetTaskList GetTaskList()
 * @method ListSkillGroupSummaryReports ListSkillGroupSummaryReports()
 * @method ListIvrTrackingDetail ListIvrTrackingDetail()
 * @method GetJobList GetJobList()
 * @method LaunchAppraise LaunchAppraise()
 * @method LaunchShortMessageAppraise LaunchShortMessageAppraise()
 * @method ModifyScenario ModifyScenario()
 * @method GetScenario GetScenario()
 * @method GetInstanceSummaryReportSinceMidnight GetInstanceSummaryReportSinceMidnight()
 * @method AssignJobs AssignJobs()
 * @method CreateJobGroup CreateJobGroup()
 */
class V20170705
{
}

/**
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
 * @method $this setRamId($ramId)
 * @method int getRamId()
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
 * @method $this setStartDay($startDay)
 * @method string getStartDay()
 * @method $this setEndDay($endDay)
 * @method string getEndDay()
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetAgentData extends Request
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
 */
class RefreshToken extends Request
{
}/**
 */
class ListScenarioTemplates extends Request
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
 * @method $this setCallId($callId)
 * @method string getCallId()
 */
class GetJobStatusByCallId extends Request
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
 */
class ModifySurvey extends Request
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
 * @method $this setConfigItem($configItem)
 * @method array getConfigItem()
 */
class ListConfig extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupIds($skillGroupIds)
 * @method string getSkillGroupIds()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListSkillGroupStates extends Request
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
 * @method $this setSurveysJson($surveysJson)
 * @method array getSurveysJson()
 */
class CreateScenario extends Request
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
 */
class CreateSurvey extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class GetConversationList extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setOutboundOnly($outboundOnly)
 * @method bool getOutboundOnly()
 */
class ListPhoneNumbers extends Request
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
class ModifySkillGroupOfUser extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupIds($skillGroupIds)
 * @method string getSkillGroupIds()
 * @method $this setInterval($interval)
 * @method string getInterval()
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
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setStopTime($stopTime)
 * @method int getStopTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCriteria($criteria)
 * @method string getCriteria()
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setAgentIds($agentIds)
 * @method string getAgentIds()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAgentSummaryReports extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setAgentIds($agentIds)
 * @method string getAgentIds()
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
 * @method $this setFileName($fileName)
 * @method string getFileName()
 */
class GetJobDataUploadParams extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setNumber($number)
 * @method string getNumber()
 */
class RemoveNumberFromSkillGroup extends Request
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
 * @method $this setContactId($contactId)
 * @method string getContactId()
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
 * @method $this setTelA($telA)
 * @method string getTelA()
 * @method $this setTelB($telB)
 * @method string getTelB()
 */
class CallOnlinePrivacyNumber extends Request
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
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setAgentIds($agentIds)
 * @method string getAgentIds()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAgentSummaryReportsSinceMidnight extends Request
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
 * @method $this setName($name)
 * @method string getName()
 * @method $this setObjectId($objectId)
 * @method string getObjectId()
 * @method $this setObjectType($objectType)
 * @method string getObjectType()
 */
class GetConfig extends Request
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
 * @method $this setIntervalType($intervalType)
 * @method string getIntervalType()
 */
class ListCallMeasureSummaryReports extends Request
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
 * @method $this setPhoneNumber($phoneNumber)
 * @method string getPhoneNumber()
 * @method $this setUsage($usage)
 * @method string getUsage()
 * @method $this setContactFlowId($contactFlowId)
 * @method string getContactFlowId()
 */
class AddPhoneNumber extends Request
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
 * @method $this setServiceType($serviceType)
 * @method string getServiceType()
 */
class GetServiceExtensions extends Request
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
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
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
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setNumber($number)
 * @method string getNumber()
 */
class AddNumberToSkillGroup extends Request
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
 * @method $this setActionKey($actionKey)
 * @method string getActionKey()
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
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class CreateCCCPostOrder extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setWorkflowId($workflowId)
 * @method string getWorkflowId()
 * @method $this setCallCenterNumber($callCenterNumber)
 * @method string getCallCenterNumber()
 * @method $this setCaller($caller)
 * @method string getCaller()
 * @method $this setCallee($callee)
 * @method string getCallee()
 */
class StartBack2BackCall extends Request
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
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setVariables($variables)
 * @method string getVariables()
 */
class CreateScenarioFromTemplate extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setContactId($contactId)
 * @method string getContactId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetConversationDetailByContactId extends Request
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
 * @method $this setContactId($contactId)
 * @method string getContactId()
 * @method $this setMockResponse($mockResponse)
 * @method bool getMockResponse()
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
 * @method $this setOutboundPhoneNumberId($outboundPhoneNumberId)
 * @method array getOutboundPhoneNumberId()
 * @method $this setUserId($userId)
 * @method array getUserId()
 * @method $this setSkillLevel($skillLevel)
 * @method array getSkillLevel()
 * @method $this setAllowPrivateOutboundNumber($allowPrivateOutboundNumber)
 * @method bool getAllowPrivateOutboundNumber()
 */
class ModifySkillGroup extends Request
{
}/**
 * @method $this setStopTime($stopTime)
 * @method int getStopTime()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
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
 * @method $this setPhoneNumberId($phoneNumberId)
 * @method string getPhoneNumberId()
 */
class RemovePhoneNumber extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSkillGroupId($skillGroupId)
 * @method string getSkillGroupId()
 * @method $this setAgentIds($agentIds)
 * @method string getAgentIds()
 * @method $this setInterval($interval)
 * @method string getInterval()
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
 * @method $this setSkillGroups($skillGroups)
 * @method string getSkillGroups()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListSkillGroupSummaryReportsSinceMidnight extends Request
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
 * @method $this setOutboundTaskId($outboundTaskId)
 * @method string getOutboundTaskId()
 */
class GetContactIdentifyByOutBoundTaskId extends Request
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
class RequestLoginInfo extends Request
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
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 */
class DeleteJobGroup extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobId($jobId)
 * @method string getJobId()
 */
class GetTaskList extends Request
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
 * @method $this setContactId($contactId)
 * @method string getContactId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setStopTime($stopTime)
 * @method int getStopTime()
 * @method $this setCallingNumber($callingNumber)
 * @method string getCallingNumber()
 * @method $this setCalledNumber($calledNumber)
 * @method string getCalledNumber()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListIvrTrackingDetail extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setJobGroupId($jobGroupId)
 * @method string getJobGroupId()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setQueryAll($queryAll)
 * @method bool getQueryAll()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetJobList extends Request
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
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class GetInstanceSummaryReportSinceMidnight extends Request
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
}
