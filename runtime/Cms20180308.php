<?php

namespace aliyun\sdk\services\Cms20180308;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180308
 *
 * @package aliyun\sdk\services\Cms20180308
 * @method PutMetricAlarm PutMetricAlarm()
 * @method ListEventRuleNamesByTarget ListEventRuleNamesByTarget()
 * @method ListEventRules ListEventRules()
 * @method DeleteGroupDynamicRule DeleteGroupDynamicRule()
 * @method ProfileSet ProfileSet()
 * @method DeleteEventTargets DeleteEventTargets()
 * @method AccessKeyGet AccessKeyGet()
 * @method ListS2SEventTargets ListS2SEventTargets()
 * @method DeleteS2SEventRule DeleteS2SEventRule()
 * @method ListMonitoringTemplates ListMonitoringTemplates()
 * @method QueryMonitorData QueryMonitorData()
 * @method DescribeTaskDetail DescribeTaskDetail()
 * @method QueryMetricList QueryMetricList()
 * @method DescribeMetricRuleTargets DescribeMetricRuleTargets()
 * @method QuerySystemEventCount QuerySystemEventCount()
 * @method NodeStatusList NodeStatusList()
 * @method QueryCustomEventCount QueryCustomEventCount()
 * @method QueryMetricMeta QueryMetricMeta()
 * @method PutEventRule PutEventRule()
 * @method NodeInstall NodeInstall()
 * @method QueryTaskMonitorData QueryTaskMonitorData()
 * @method NodeList NodeList()
 * @method QueryStaticsResponseTime QueryStaticsResponseTime()
 * @method ListAlarm ListAlarm()
 * @method ListMetricMeta ListMetricMeta()
 * @method DeleteEventRule DeleteEventRule()
 * @method DisableS2SEventRule DisableS2SEventRule()
 * @method DescribeAlertHistoryList DescribeAlertHistoryList()
 * @method PutMetricRuleTargets PutMetricRuleTargets()
 * @method NodeProcesses NodeProcesses()
 * @method DescribeContact DescribeContact()
 * @method ListMyGroupInstancesDetails ListMyGroupInstancesDetails()
 * @method PutEvent PutEvent()
 * @method QuerySystemEventDetail QuerySystemEventDetail()
 * @method PutGroupDynamicRule PutGroupDynamicRule()
 * @method QueryCustomEventDetail QueryCustomEventDetail()
 * @method GetMyGroups GetMyGroups()
 * @method ListEventTargetsByRule ListEventTargetsByRule()
 * @method TaskConfigList TaskConfigList()
 * @method TaskConfigDelete TaskConfigDelete()
 * @method DescribeAlarmsForResources DescribeAlarmsForResources()
 * @method QueryStaticsErrorRate QueryStaticsErrorRate()
 * @method NodeProcessCreate NodeProcessCreate()
 * @method NodeStatus NodeStatus()
 * @method DescribeISPAreaCity DescribeISPAreaCity()
 * @method ListGroupDynamicRule ListGroupDynamicRule()
 * @method UntagResourcesSystemTags UntagResourcesSystemTags()
 * @method NodeUninstall NodeUninstall()
 * @method QueryMetricDimensions QueryMetricDimensions()
 * @method DeleteMonitoringTemplate DeleteMonitoringTemplate()
 * @method DeleteTasks DeleteTasks()
 * @method DeleteCustomMetric DeleteCustomMetric()
 * @method ApplyTemplate ApplyTemplate()
 * @method PutMetricData PutMetricData()
 * @method EnableActiceAlert EnableActiceAlert()
 * @method SendDryRunSystemEvent SendDryRunSystemEvent()
 * @method GetMonitoringTemplate GetMonitoringTemplate()
 * @method StopTasks StopTasks()
 * @method ListS2SEventRule ListS2SEventRule()
 * @method GetContacts GetContacts()
 * @method PutSystemEvent PutSystemEvent()
 * @method EnableActiveAlert EnableActiveAlert()
 * @method TagResourcesSystemTags TagResourcesSystemTags()
 * @method TaskConfigCreate TaskConfigCreate()
 * @method CreateAlarm CreateAlarm()
 * @method TaskConfigModify TaskConfigModify()
 * @method EnableEventRule EnableEventRule()
 * @method NodeProcessDelete NodeProcessDelete()
 * @method DescribeTasks DescribeTasks()
 * @method CreateTask CreateTask()
 * @method ListContactGroup ListContactGroup()
 * @method ListNotifyPolicy ListNotifyPolicy()
 * @method CreateMyGroups CreateMyGroups()
 * @method ApplyMonitoringTemplate ApplyMonitoringTemplate()
 * @method TaskConfigUnhealthy TaskConfigUnhealthy()
 * @method PutCustomMetric PutCustomMetric()
 * @method DescribeEventRule DescribeEventRule()
 * @method ListMyGroupCategories ListMyGroupCategories()
 * @method CreateMonitoringTemplate CreateMonitoringTemplate()
 * @method QueryMetricTop QueryMetricTop()
 * @method QueryCustomMetricList QueryCustomMetricList()
 * @method DeleteMyGroups DeleteMyGroups()
 * @method ListMyGroupInstances ListMyGroupInstances()
 * @method ListActiveAlertRule ListActiveAlertRule()
 * @method ListMyGroups ListMyGroups()
 * @method DeleteS2SEventTargets DeleteS2SEventTargets()
 * @method DisableActiceAlert DisableActiceAlert()
 * @method QuerySystemEventHistogram QuerySystemEventHistogram()
 * @method UpdateMyGroupInstances UpdateMyGroupInstances()
 * @method DisableActiveAlert DisableActiveAlert()
 * @method AddMyGroupInstances AddMyGroupInstances()
 * @method QueryProjectMeta QueryProjectMeta()
 * @method DisableAlarm DisableAlarm()
 * @method ProfileGet ProfileGet()
 * @method DeleteAlarm DeleteAlarm()
 * @method QueryStaticsAvailability QueryStaticsAvailability()
 * @method GetMyGroupAlert GetMyGroupAlert()
 * @method DescribeAlarmHistory DescribeAlarmHistory()
 * @method PutS2SEventTargets PutS2SEventTargets()
 * @method EnableS2SEventRule EnableS2SEventRule()
 * @method ListProductOfActiveAlert ListProductOfActiveAlert()
 * @method DescribeAlarms DescribeAlarms()
 * @method InnerListTagResources InnerListTagResources()
 * @method DeleteMyGroupInstances DeleteMyGroupInstances()
 * @method UpdateMonitoringTemplate UpdateMonitoringTemplate()
 * @method QueryMetricLast QueryMetricLast()
 * @method ListProductOfActiceAlert ListProductOfActiceAlert()
 * @method DisableEventRule DisableEventRule()
 * @method QueryMetricData QueryMetricData()
 * @method RemoveMetricRuleTargets RemoveMetricRuleTargets()
 * @method GetNotifyPolicy GetNotifyPolicy()
 * @method ListAlarmHistory ListAlarmHistory()
 * @method PutS2SEventRule PutS2SEventRule()
 * @method PutEventTargets PutEventTargets()
 * @method UpdateMyGroups UpdateMyGroups()
 * @method UpdateMyGroupMembers UpdateMyGroupMembers()
 * @method QueryCustomEventHistogram QueryCustomEventHistogram()
 * @method UpdateMyGroupAlert UpdateMyGroupAlert()
 * @method DescribeConsoleViews DescribeConsoleViews()
 * @method QuerySystemEventDemo QuerySystemEventDemo()
 * @method ModifyTask ModifyTask()
 * @method TaskConfigEnable TaskConfigEnable()
 * @method EnableAlarm EnableAlarm()
 * @method UpdateAlarm UpdateAlarm()
 * @method StartTasks StartTasks()
 * @method DeleteNotifyPolicy DeleteNotifyPolicy()
 * @method QueryErrorDistribution QueryErrorDistribution()
 * @method CreateMyGroupAlertBatch CreateMyGroupAlertBatch()
 * @method CreateNotifyPolicy CreateNotifyPolicy()
 */
class V20180308
{
}

/**
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setAlertName($alertName)
 * @method string getAlertName()
 * @method $this setEvaluationCount($evaluationCount)
 * @method int getEvaluationCount()
 * @method $this setContactGroups($contactGroups)
 * @method string getContactGroups()
 * @method $this setEffectiveInterval($effectiveInterval)
 * @method string getEffectiveInterval()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setSilenceTime($silenceTime)
 * @method int getSilenceTime()
 * @method $this setWebhook($webhook)
 * @method string getWebhook()
 * @method $this setDisplayName($displayName)
 * @method string getDisplayName()
 * @method $this setNoEffectiveInterval($noEffectiveInterval)
 * @method string getNoEffectiveInterval()
 * @method $this setResources($resources)
 * @method string getResources()
 * @method $this setSubject($subject)
 * @method string getSubject()
 * @method $this setLevel($level)
 * @method int getLevel()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setDeepDive($deepDive)
 * @method string getDeepDive()
 * @method $this setStatistics($statistics)
 * @method string getStatistics()
 * @method $this setComparisonOperator($comparisonOperator)
 * @method string getComparisonOperator()
 * @method $this setThreshold($threshold)
 * @method string getThreshold()
 * @method $this setFilter($filter)
 * @method string getFilter()
 * @method $this setInterval($interval)
 * @method string getInterval()
 */
class PutMetricAlarm extends Request
{

}/**
 * @method $this setTargetArn($targetArn)
 * @method string getTargetArn()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class ListEventRuleNamesByTarget extends Request
{

}/**
 * @method $this setNamePrefix($namePrefix)
 * @method string getNamePrefix()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class ListEventRules extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCategory($category)
 * @method string getCategory()
 */
class DeleteGroupDynamicRule extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setAutoInstall($autoInstall)
 * @method bool getAutoInstall()
 * @method $this setEnableInstallAgentNewECS($enableInstallAgentNewECS)
 * @method bool getEnableInstallAgentNewECS()
 * @method $this setEnableActiveAlert($enableActiveAlert)
 * @method string getEnableActiveAlert()
 */
class ProfileSet extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setIds($ids)
 * @method array getIds()
 */
class DeleteEventTargets extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 */
class AccessKeyGet extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 */
class ListS2SEventTargets extends Request
{

}/**
 * @method $this setNames($names)
 * @method array getNames()
 */
class DeleteS2SEventRule extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setTotal($total)
 * @method bool getTotal()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setHistory($history)
 * @method bool getHistory()
 */
class ListMonitoringTemplates extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setmetricName($metricName)
 * @method string getmetricName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setLength($length)
 * @method int getLength()
 */
class QueryMonitorData extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class DescribeTaskDetail extends Request
{

}/**
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setLength($length)
 * @method string getLength()
 * @method $this setExpress($express)
 * @method string getExpress()
 */
class QueryMetricList extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 */
class DescribeMetricRuleTargets extends Request
{

}/**
 * @method $this setQueryJson($queryJson)
 * @method string getQueryJson()
 */
class QuerySystemEventCount extends Request
{

}/**
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 */
class NodeStatusList extends Request
{

}/**
 * @method $this setQueryJson($queryJson)
 * @method string getQueryJson()
 */
class QueryCustomEventCount extends Request
{

}/**
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setLabels($labels)
 * @method string getLabels()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryMetricMeta extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setEventPattern($eventPattern)
 * @method array getEventPattern()
 */
class PutEventRule extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setForce($force)
 * @method bool getForce()
 */
class NodeInstall extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setmetricName($metricName)
 * @method string getmetricName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setLength($length)
 * @method int getLength()
 */
class QueryTaskMonitorData extends Request
{

}/**
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 * @method $this setSerialNumbers($serialNumbers)
 * @method string getSerialNumbers()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setInstanceRegionId($instanceRegionId)
 * @method string getInstanceRegionId()
 */
class NodeList extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setTimeRange($timeRange)
 * @method string getTimeRange()
 */
class QueryStaticsResponseTime extends Request
{

}/**
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setIsEnable($isEnable)
 * @method bool getIsEnable()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAlarm extends Request
{

}/**
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setTags($tags)
 * @method string getTags()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 */
class ListMetricMeta extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setRuleNames($ruleNames)
 * @method array getRuleNames()
 */
class DeleteEventRule extends Request
{

}/**
 * @method $this setNames($names)
 * @method array getNames()
 */
class DisableS2SEventRule extends Request
{

}/**
 * @method $this setAlertName($alertName)
 * @method string getAlertName()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setAscending($ascending)
 * @method bool getAscending()
 * @method $this setOnlyCount($onlyCount)
 * @method bool getOnlyCount()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPage($page)
 * @method int getPage()
 */
class DescribeAlertHistoryList extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setActions($actions)
 * @method string getActions()
 * @method $this setTargets($targets)
 * @method array getTargets()
 */
class PutMetricRuleTargets extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class NodeProcesses extends Request
{

}/**
 * @method $this setContactName($contactName)
 * @method string getContactName()
 */
class DescribeContact extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setTotal($total)
 * @method bool getTotal()
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 */
class ListMyGroupInstancesDetails extends Request
{

}/**
 * @method $this setEventInfo($eventInfo)
 * @method string getEventInfo()
 */
class PutEvent extends Request
{

}/**
 * @method $this setQueryJson($queryJson)
 * @method string getQueryJson()
 */
class QuerySystemEventDetail extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setGroupRuleArrayJson($groupRuleArrayJson)
 * @method string getGroupRuleArrayJson()
 */
class PutGroupDynamicRule extends Request
{

}/**
 * @method $this setQueryJson($queryJson)
 * @method string getQueryJson()
 */
class QueryCustomEventDetail extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSelectContactGroups($selectContactGroups)
 * @method bool getSelectContactGroups()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBindUrl($bindUrl)
 * @method string getBindUrl()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class GetMyGroups extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 */
class ListEventTargetsByRule extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class TaskConfigList extends Request
{

}/**
 * @method $this setIdList($idList)
 * @method array getIdList()
 */
class TaskConfigDelete extends Request
{

}/**
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setEnableState($enableState)
 * @method bool getEnableState()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setAlertState($alertState)
 * @method string getAlertState()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 */
class DescribeAlarmsForResources extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setTimeRange($timeRange)
 * @method string getTimeRange()
 */
class QueryStaticsErrorRate extends Request
{

}/**
 * @method $this setProcessName($processName)
 * @method string getProcessName()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setProcessUser($processUser)
 * @method string getProcessUser()
 * @method $this setCommand($command)
 * @method string getCommand()
 */
class NodeProcessCreate extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class NodeStatus extends Request
{

}/**
 * @method $this setIsp($isp)
 * @method string getIsp()
 * @method $this setCity($city)
 * @method string getCity()
 */
class DescribeISPAreaCity extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class ListGroupDynamicRule extends Request
{

}/**
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTagKey($tagKey)
 * @method array getTagKey()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTagOwnerUid($tagOwnerUid)
 * @method string getTagOwnerUid()
 * @method $this setTagOwnerBid($tagOwnerBid)
 * @method string getTagOwnerBid()
 * @method $this setAll($all)
 * @method bool getAll()
 */
class UntagResourcesSystemTags extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class NodeUninstall extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 */
class QueryMetricDimensions extends Request
{

}/**
 * @method $this setId($id)
 * @method string getId()
 */
class DeleteMonitoringTemplate extends Request
{

}/**
 * @method $this setTaskIds($taskIds)
 * @method string getTaskIds()
 * @method $this setIsDeleteAlarms($isDeleteAlarms)
 * @method int getIsDeleteAlarms()
 */
class DeleteTasks extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setMd5($md5)
 * @method string getMd5()
 * @method $this setUUID($uUID)
 * @method string getUUID()
 */
class DeleteCustomMetric extends Request
{

}/**
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setSilenceTime($silenceTime)
 * @method int getSilenceTime()
 * @method $this setEnableStartTime($enableStartTime)
 * @method int getEnableStartTime()
 * @method $this setEnableEndTime($enableEndTime)
 * @method int getEnableEndTime()
 * @method $this setNotifyLevel($notifyLevel)
 * @method int getNotifyLevel()
 * @method $this setApplyMode($applyMode)
 * @method string getApplyMode()
 */
class ApplyTemplate extends Request
{

}/**
 * @method $this setBody($body)
 * @method string getBody()
 */
class PutMetricData extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class EnableActiceAlert extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setEventName($eventName)
 * @method string getEventName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setEventContent($eventContent)
 * @method string getEventContent()
 */
class SendDryRunSystemEvent extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setId($id)
 * @method string getId()
 */
class GetMonitoringTemplate extends Request
{

}/**
 * @method $this setTaskIds($taskIds)
 * @method string getTaskIds()
 */
class StopTasks extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class ListS2SEventRule extends Request
{

}/**
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class GetContacts extends Request
{

}/**
 * @method $this setEventInfo($eventInfo)
 * @method string getEventInfo()
 */
class PutSystemEvent extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class EnableActiveAlert extends Request
{

}/**
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTagOwnerUid($tagOwnerUid)
 * @method string getTagOwnerUid()
 * @method $this setTagOwnerBid($tagOwnerBid)
 * @method string getTagOwnerBid()
 * @method $this setScope($scope)
 * @method string getScope()
 */
class TagResourcesSystemTags extends Request
{

}/**
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setTaskScope($taskScope)
 * @method string getTaskScope()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 * @method $this setInstanceList($instanceList)
 * @method array getInstanceList()
 * @method $this setAlertConfig($alertConfig)
 * @method string getAlertConfig()
 */
class TaskConfigCreate extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setStatistics($statistics)
 * @method string getStatistics()
 * @method $this setComparisonOperator($comparisonOperator)
 * @method string getComparisonOperator()
 * @method $this setThreshold($threshold)
 * @method string getThreshold()
 * @method $this setEvaluationCount($evaluationCount)
 * @method int getEvaluationCount()
 * @method $this setContactGroups($contactGroups)
 * @method string getContactGroups()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setSilenceTime($silenceTime)
 * @method int getSilenceTime()
 * @method $this setNotifyType($notifyType)
 * @method int getNotifyType()
 * @method $this setWebhook($webhook)
 * @method string getWebhook()
 * @method $this setDryRun($dryRun)
 * @method bool getDryRun()
 */
class CreateAlarm extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setTaskScope($taskScope)
 * @method string getTaskScope()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setJsonData($jsonData)
 * @method string getJsonData()
 * @method $this setInstanceList($instanceList)
 * @method array getInstanceList()
 * @method $this setAlertConfig($alertConfig)
 * @method string getAlertConfig()
 */
class TaskConfigModify extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setRuleNames($ruleNames)
 * @method array getRuleNames()
 */
class EnableEventRule extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setId($id)
 * @method string getId()
 */
class NodeProcessDelete extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeTasks extends Request
{

}/**
 * @method $this setAddress($address)
 * @method string getAddress()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspCity($ispCity)
 * @method string getIspCity()
 * @method $this setOptions($options)
 * @method string getOptions()
 * @method $this setAlertRule($alertRule)
 * @method string getAlertRule()
 * @method $this setAlertIds($alertIds)
 * @method string getAlertIds()
 * @method $this setcaller($caller)
 * @method string getcaller()
 */
class CreateTask extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListContactGroup extends Request
{

}/**
 * @method $this setAlertName($alertName)
 * @method string getAlertName()
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class ListNotifyPolicy extends Request
{

}/**
 * @method $this setType($type)
 * @method string getType()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 * @method $this setBindUrl($bindUrl)
 * @method string getBindUrl()
 * @method $this setContactGroups($contactGroups)
 * @method string getContactGroups()
 * @method $this setOptions($options)
 * @method string getOptions()
 */
class CreateMyGroups extends Request
{

}/**
 * @method $this setSilenceTime($silenceTime)
 * @method int getSilenceTime()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 * @method $this setEnableStartTime($enableStartTime)
 * @method int getEnableStartTime()
 * @method $this setEnableEndTime($enableEndTime)
 * @method int getEnableEndTime()
 * @method $this setNotifyLevel($notifyLevel)
 * @method int getNotifyLevel()
 * @method $this setApplyMode($applyMode)
 * @method string getApplyMode()
 * @method $this setWebhook($webhook)
 * @method string getWebhook()
 */
class ApplyMonitoringTemplate extends Request
{

}/**
 * @method $this setTaskIdList($taskIdList)
 * @method array getTaskIdList()
 */
class TaskConfigUnhealthy extends Request
{

}/**
 * @method $this setMetricList($metricList)
 * @method string getMetricList()
 */
class PutCustomMetric extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 */
class DescribeEventRule extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class ListMyGroupCategories extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setAlertTemplatesJson($alertTemplatesJson)
 * @method string getAlertTemplatesJson()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setEventRuleTemplatesJson($eventRuleTemplatesJson)
 * @method string getEventRuleTemplatesJson()
 */
class CreateMonitoringTemplate extends Request
{

}/**
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setOrderby($orderby)
 * @method string getOrderby()
 * @method $this setOrderDesc($orderDesc)
 * @method string getOrderDesc()
 * @method $this setLength($length)
 * @method string getLength()
 * @method $this setExpress($express)
 * @method string getExpress()
 */
class QueryMetricTop extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setMd5($md5)
 * @method string getMd5()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setSize($size)
 * @method string getSize()
 */
class QueryCustomMetricList extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class DeleteMyGroups extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setTotal($total)
 * @method bool getTotal()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 */
class ListMyGroupInstances extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method string getUserId()
 * @method $this setProduct($product)
 * @method string getProduct()
 */
class ListActiveAlertRule extends Request
{

}/**
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSelectContactGroups($selectContactGroups)
 * @method bool getSelectContactGroups()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBindUrls($bindUrls)
 * @method string getBindUrls()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class ListMyGroups extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setIds($ids)
 * @method array getIds()
 */
class DeleteS2SEventTargets extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class DisableActiceAlert extends Request
{

}/**
 * @method $this setQueryJson($queryJson)
 * @method string getQueryJson()
 */
class QuerySystemEventHistogram extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setInstances($instances)
 * @method string getInstances()
 */
class UpdateMyGroupInstances extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class DisableActiveAlert extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setInstances($instances)
 * @method string getInstances()
 */
class AddMyGroupInstances extends Request
{

}/**
 * @method $this setLabels($labels)
 * @method string getLabels()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryProjectMeta extends Request
{

}/**
 * @method $this setId($id)
 * @method string getId()
 */
class DisableAlarm extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 */
class ProfileGet extends Request
{

}/**
 * @method $this setId($id)
 * @method string getId()
 */
class DeleteAlarm extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setTimeRange($timeRange)
 * @method string getTimeRange()
 */
class QueryStaticsAvailability extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setAlertName($alertName)
 * @method string getAlertName()
 */
class GetMyGroupAlert extends Request
{

}/**
 * @method $this setAlertName($alertName)
 * @method string getAlertName()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setAscending($ascending)
 * @method bool getAscending()
 * @method $this setOnlyCount($onlyCount)
 * @method bool getOnlyCount()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPage($page)
 * @method int getPage()
 */
class DescribeAlarmHistory extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setFunctionComputers($functionComputers)
 * @method array getFunctionComputers()
 * @method $this setMns($mns)
 * @method array getMns()
 * @method $this setActions($actions)
 * @method string getActions()
 */
class PutS2SEventTargets extends Request
{

}/**
 * @method $this setNames($names)
 * @method array getNames()
 */
class EnableS2SEventRule extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class ListProductOfActiveAlert extends Request
{

}/**
 * @method $this setGroupBy($groupBy)
 * @method string getGroupBy()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setEnableState($enableState)
 * @method bool getEnableState()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setAlertState($alertState)
 * @method string getAlertState()
 * @method $this setDisplayName($displayName)
 * @method string getDisplayName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setNames($names)
 * @method string getNames()
 * @method $this setNameKeyword($nameKeyword)
 * @method string getNameKeyword()
 */
class DescribeAlarms extends Request
{

}/**
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setNextToken($nextToken)
 * @method string getNextToken()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setTagOwnerUid($tagOwnerUid)
 * @method string getTagOwnerUid()
 * @method $this setTagOwnerBid($tagOwnerBid)
 * @method string getTagOwnerBid()
 * @method $this setScope($scope)
 * @method string getScope()
 */
class InnerListTagResources extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 * @method $this setInstanceIdList($instanceIdList)
 * @method string getInstanceIdList()
 * @method $this setCategory($category)
 * @method string getCategory()
 */
class DeleteMyGroupInstances extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setAlertTemplatesJson($alertTemplatesJson)
 * @method string getAlertTemplatesJson()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setRestVersion($restVersion)
 * @method int getRestVersion()
 * @method $this setEventRuleTemplatesJson($eventRuleTemplatesJson)
 * @method string getEventRuleTemplatesJson()
 */
class UpdateMonitoringTemplate extends Request
{

}/**
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setLength($length)
 * @method string getLength()
 * @method $this setExpress($express)
 * @method string getExpress()
 */
class QueryMetricLast extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method string getUserId()
 */
class ListProductOfActiceAlert extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setRuleNames($ruleNames)
 * @method array getRuleNames()
 */
class DisableEventRule extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setExpress($express)
 * @method string getExpress()
 * @method $this setLength($length)
 * @method string getLength()
 */
class QueryMetricData extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setTargetIds($targetIds)
 * @method array getTargetIds()
 * @method $this setContactGroupTargetIds($contactGroupTargetIds)
 * @method array getContactGroupTargetIds()
 * @method $this setWebhookTargetIds($webhookTargetIds)
 * @method array getWebhookTargetIds()
 */
class RemoveMetricRuleTargets extends Request
{

}/**
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setAlertName($alertName)
 * @method string getAlertName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class GetNotifyPolicy extends Request
{

}/**
 * @method $this setId($id)
 * @method string getId()
 * @method $this setSize($size)
 * @method int getSize()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setCursor($cursor)
 * @method string getCursor()
 */
class ListAlarmHistory extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setEventPattern($eventPattern)
 * @method array getEventPattern()
 * @method $this setJSONFilter($jSONFilter)
 * @method string getJSONFilter()
 */
class PutS2SEventRule extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setFcParameters($fcParameters)
 * @method array getFcParameters()
 * @method $this setContactParameters($contactParameters)
 * @method array getContactParameters()
 * @method $this setMnsParameters($mnsParameters)
 * @method array getMnsParameters()
 * @method $this setWebhookParameters($webhookParameters)
 * @method array getWebhookParameters()
 * @method $this setSlsParameters($slsParameters)
 * @method array getSlsParameters()
 */
class PutEventTargets extends Request
{

}/**
 * @method $this setBindUrls($bindUrls)
 * @method string getBindUrls()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setContactGroups($contactGroups)
 * @method string getContactGroups()
 */
class UpdateMyGroups extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setMasters($masters)
 * @method string getMasters()
 * @method $this setReaders($readers)
 * @method string getReaders()
 */
class UpdateMyGroupMembers extends Request
{

}/**
 * @method $this setQueryJson($queryJson)
 * @method string getQueryJson()
 */
class QueryCustomEventHistogram extends Request
{

}/**
 * @method $this setGroupAlertJson($groupAlertJson)
 * @method string getGroupAlertJson()
 */
class UpdateMyGroupAlert extends Request
{

}/**
 * @method $this setProductCode($productCode)
 * @method string getProductCode()
 * @method $this setProductCategory($productCategory)
 * @method string getProductCategory()
 */
class DescribeConsoleViews extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setEventName($eventName)
 * @method string getEventName()
 */
class QuerySystemEventDemo extends Request
{

}/**
 * @method $this setAddress($address)
 * @method string getAddress()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspCity($ispCity)
 * @method string getIspCity()
 * @method $this setOptions($options)
 * @method string getOptions()
 * @method $this setAlertRule($alertRule)
 * @method string getAlertRule()
 * @method $this setAlertIds($alertIds)
 * @method string getAlertIds()
 * @method $this setcaller($caller)
 * @method string getcaller()
 */
class ModifyTask extends Request
{

}/**
 * @method $this setIdList($idList)
 * @method array getIdList()
 * @method $this setEnabled($enabled)
 * @method bool getEnabled()
 */
class TaskConfigEnable extends Request
{

}/**
 * @method $this setId($id)
 * @method string getId()
 */
class EnableAlarm extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setPeriod($period)
 * @method int getPeriod()
 * @method $this setStatistics($statistics)
 * @method string getStatistics()
 * @method $this setComparisonOperator($comparisonOperator)
 * @method string getComparisonOperator()
 * @method $this setThreshold($threshold)
 * @method string getThreshold()
 * @method $this setContactGroups($contactGroups)
 * @method string getContactGroups()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setSilenceTime($silenceTime)
 * @method int getSilenceTime()
 * @method $this setEvaluationCount($evaluationCount)
 * @method int getEvaluationCount()
 * @method $this setNotifyType($notifyType)
 * @method int getNotifyType()
 * @method $this setWebhook($webhook)
 * @method string getWebhook()
 * @method $this setDryRun($dryRun)
 * @method bool getDryRun()
 */
class UpdateAlarm extends Request
{

}/**
 * @method $this setTaskIds($taskIds)
 * @method string getTaskIds()
 */
class StartTasks extends Request
{

}/**
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setAlertName($alertName)
 * @method string getAlertName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DeleteNotifyPolicy extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setTimeRange($timeRange)
 * @method string getTimeRange()
 */
class QueryErrorDistribution extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setGroupAlertJsonArray($groupAlertJsonArray)
 * @method string getGroupAlertJsonArray()
 */
class CreateMyGroupAlertBatch extends Request
{

}/**
 * @method $this setAlertName($alertName)
 * @method string getAlertName()
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class CreateNotifyPolicy extends Request
{

}