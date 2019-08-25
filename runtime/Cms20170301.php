<?php

namespace aliyun\sdk\services\Cms20170301;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170301
 *
 * @package aliyun\sdk\services\Cms20170301
 * @method PutMetricAlarm PutMetricAlarm()
 * @method ProfileSet ProfileSet()
 * @method AccessKeyGet AccessKeyGet()
 * @method QueryMetricList QueryMetricList()
 * @method QuerySystemEventCount QuerySystemEventCount()
 * @method NodeStatusList NodeStatusList()
 * @method QueryCustomEventCount QueryCustomEventCount()
 * @method NodeInstall NodeInstall()
 * @method NodeList NodeList()
 * @method ListAlarm ListAlarm()
 * @method DescribeAlarmsForDimensions DescribeAlarmsForDimensions()
 * @method NodeProcesses NodeProcesses()
 * @method ListMyGroupInstancesDetails ListMyGroupInstancesDetails()
 * @method PutEvent PutEvent()
 * @method QuerySystemEventDetail QuerySystemEventDetail()
 * @method QueryCustomEventDetail QueryCustomEventDetail()
 * @method GetMyGroups GetMyGroups()
 * @method TaskConfigList TaskConfigList()
 * @method TaskConfigDelete TaskConfigDelete()
 * @method NodeProcessCreate NodeProcessCreate()
 * @method NodeStatus NodeStatus()
 * @method NodeUninstall NodeUninstall()
 * @method DeleteCustomMetric DeleteCustomMetric()
 * @method PutMetricData PutMetricData()
 * @method PutSystemEvent PutSystemEvent()
 * @method EnableActiveAlert EnableActiveAlert()
 * @method TaskConfigCreate TaskConfigCreate()
 * @method CreateAlarm CreateAlarm()
 * @method TaskConfigModify TaskConfigModify()
 * @method NodeProcessDelete NodeProcessDelete()
 * @method ListContactGroup ListContactGroup()
 * @method ListNotifyPolicy ListNotifyPolicy()
 * @method CreateMyGroups CreateMyGroups()
 * @method TaskConfigUnhealthy TaskConfigUnhealthy()
 * @method PutCustomMetric PutCustomMetric()
 * @method ListMyGroupCategories ListMyGroupCategories()
 * @method QueryCustomMetricList QueryCustomMetricList()
 * @method DeleteMyGroups DeleteMyGroups()
 * @method ListMyGroupInstances ListMyGroupInstances()
 * @method ListActiveAlertRule ListActiveAlertRule()
 * @method ListMyGroups ListMyGroups()
 * @method QuerySystemEventHistogram QuerySystemEventHistogram()
 * @method UpdateMyGroupInstances UpdateMyGroupInstances()
 * @method DisableActiveAlert DisableActiveAlert()
 * @method AddMyGroupInstances AddMyGroupInstances()
 * @method DisableAlarm DisableAlarm()
 * @method ProfileGet ProfileGet()
 * @method DeleteAlarm DeleteAlarm()
 * @method DescribeAlarmHistory DescribeAlarmHistory()
 * @method ListProductOfActiveAlert ListProductOfActiveAlert()
 * @method DescribeAlarms DescribeAlarms()
 * @method DeleteMyGroupInstances DeleteMyGroupInstances()
 * @method QueryMetricLast QueryMetricLast()
 * @method GetNotifyPolicy GetNotifyPolicy()
 * @method ListAlarmHistory ListAlarmHistory()
 * @method UpdateMyGroups UpdateMyGroups()
 * @method QueryCustomEventHistogram QueryCustomEventHistogram()
 * @method TaskConfigEnable TaskConfigEnable()
 * @method EnableAlarm EnableAlarm()
 * @method UpdateAlarm UpdateAlarm()
 * @method DeleteNotifyPolicy DeleteNotifyPolicy()
 * @method CreateNotifyPolicy CreateNotifyPolicy()
 */
class V20170301
{
}

/**
 * @method $this setPeriod($period)
 * @method string getPeriod()
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
 * @method $this setNoEffectiveInterval($noEffectiveInterval)
 * @method string getNoEffectiveInterval()
 * @method $this setSilenceTime($silenceTime)
 * @method int getSilenceTime()
 * @method $this setWebhook($webhook)
 * @method string getWebhook()
 * @method $this setDisplayName($displayName)
 * @method string getDisplayName()
 * @method $this setDescription($description)
 * @method string getDescription()
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
 * @method $this setUserId($userId)
 * @method int getUserId()
 */
class AccessKeyGet extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
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
 * @method $this setPage($page)
 * @method string getPage()
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
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 * @method $this setSerialNumbers($serialNumbers)
 * @method string getSerialNumbers()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStatus($status)
 * @method string getStatus()
 */
class NodeList extends Request
{
}/**
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
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
 * @method $this setAlertState($alertState)
 * @method string getAlertState()
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
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 */
class DescribeAlarmsForDimensions extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class NodeProcesses extends Request
{
}/**
 * @method $this setTotal($total)
 * @method bool getTotal()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCategory($category)
 * @method string getCategory()
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
 * @method $this setQueryJson($queryJson)
 * @method string getQueryJson()
 */
class QueryCustomEventDetail extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSelectContactGroups($selectContactGroups)
 * @method bool getSelectContactGroups()
 * @method $this setBindUrl($bindUrl)
 * @method string getBindUrl()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class GetMyGroups extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setProcessName($processName)
 * @method string getProcessName()
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class NodeUninstall extends Request
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
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setBody($body)
 * @method string getBody()
 */
class PutMetricData extends Request
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
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setTaskScope($taskScope)
 * @method string getTaskScope()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
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
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
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
 */
class CreateAlarm extends Request
{
}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setTaskScope($taskScope)
 * @method string getTaskScope()
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
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
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
 */
class ListNotifyPolicy extends Request
{
}/**
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 * @method $this setBindUrl($bindUrl)
 * @method string getBindUrl()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setContactGroups($contactGroups)
 * @method string getContactGroups()
 */
class CreateMyGroups extends Request
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
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class ListMyGroupCategories extends Request
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
 * @method $this setUUID($uUID)
 * @method string getUUID()
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
 * @method $this setTotal($total)
 * @method bool getTotal()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCategory($category)
 * @method string getCategory()
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
 * @method $this setSelectContactGroups($selectContactGroups)
 * @method bool getSelectContactGroups()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setType($type)
 * @method string getType()
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
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
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
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setId($id)
 * @method string getId()
 */
class DeleteAlarm extends Request
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
 */
class ListProductOfActiveAlert extends Request
{
}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
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
 * @method $this setNames($names)
 * @method string getNames()
 * @method $this setNameKeyword($nameKeyword)
 * @method string getNameKeyword()
 */
class DescribeAlarms extends Request
{
}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 */
class DeleteMyGroupInstances extends Request
{
}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
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
 * @method $this setAlertName($alertName)
 * @method string getAlertName()
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 */
class GetNotifyPolicy extends Request
{
}/**
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
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
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setServiceId($serviceId)
 * @method int getServiceId()
 * @method $this setBindUrls($bindUrls)
 * @method string getBindUrls()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setContactGroups($contactGroups)
 * @method string getContactGroups()
 */
class UpdateMyGroups extends Request
{
}/**
 * @method $this setQueryJson($queryJson)
 * @method string getQueryJson()
 */
class QueryCustomEventHistogram extends Request
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
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setId($id)
 * @method string getId()
 */
class EnableAlarm extends Request
{
}/**
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setId($id)
 * @method string getId()
 * @method $this setName($name)
 * @method string getName()
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
 */
class UpdateAlarm extends Request
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
 */
class DeleteNotifyPolicy extends Request
{
}/**
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setAlertName($alertName)
 * @method string getAlertName()
 */
class CreateNotifyPolicy extends Request
{
}
