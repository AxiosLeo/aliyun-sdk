<?php

namespace aliyun\sdk\services\Cms20160922;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160922
 *
 * @package aliyun\sdk\services\Cms20160922
 * @method BatchPutDimTableData123 BatchPutDimTableData123()
 * @method ProfileSet ProfileSet()
 * @method AccessKeyGet AccessKeyGet()
 * @method IsMetricNameValid IsMetricNameValid()
 * @method QueryEvent QueryEvent()
 * @method GetMetrics GetMetrics()
 * @method H5WeeklyReportUrl H5WeeklyReportUrl()
 * @method GetMetricStreamStatus GetMetricStreamStatus()
 * @method QueryMetricList QueryMetricList()
 * @method StartMetricStream StartMetricStream()
 * @method DescribeMetricDatum DescribeMetricDatum()
 * @method DeleteMetricOutput DeleteMetricOutput()
 * @method NodeStatusList NodeStatusList()
 * @method GetLogMonitorInAll GetLogMonitorInAll()
 * @method H5WeeklyReportUserIds H5WeeklyReportUserIds()
 * @method cmsShareDeleteTokenByToken cmsShareDeleteTokenByToken()
 * @method AccessKeyQuery AccessKeyQuery()
 * @method CreateMetricOutput CreateMetricOutput()
 * @method NodeInstall NodeInstall()
 * @method JVMConfigRemoveByInstanceId JVMConfigRemoveByInstanceId()
 * @method NodeList NodeList()
 * @method MetricSqlCheck MetricSqlCheck()
 * @method MetricData MetricData()
 * @method ListAlarmTemplate ListAlarmTemplate()
 * @method ListMetricsOfLogMonitor ListMetricsOfLogMonitor()
 * @method CreateDimTable CreateDimTable()
 * @method JVMConfigRemoveById JVMConfigRemoveById()
 * @method QueryMetricTopN QueryMetricTopN()
 * @method ListDimTable ListDimTable()
 * @method QueryProject QueryProject()
 * @method GetMetricOutput GetMetricOutput()
 * @method QueryMetric QueryMetric()
 * @method NodeProcesses NodeProcesses()
 * @method DeleteDimTable DeleteDimTable()
 * @method ListDimTableData ListDimTableData()
 * @method GetProject GetProject()
 * @method QueryCustomField QueryCustomField()
 * @method GetMetricStreamMeta GetMetricStreamMeta()
 * @method TaskConfigList TaskConfigList()
 * @method DeleteDimTableData DeleteDimTableData()
 * @method TaskConfigDelete TaskConfigDelete()
 * @method DeleteDimTableDataByKey DeleteDimTableDataByKey()
 * @method QueryInstanceTop QueryInstanceTop()
 * @method UpdateDimTable UpdateDimTable()
 * @method DimensionValues DimensionValues()
 * @method AccessKeyGenerate AccessKeyGenerate()
 * @method NodeProcessCreate NodeProcessCreate()
 * @method QueryCustomValue QueryCustomValue()
 * @method NodeStatus NodeStatus()
 * @method ListMetricsMeta ListMetricsMeta()
 * @method GetSqlMetrics GetSqlMetrics()
 * @method putProductGroup putProductGroup()
 * @method NodeUninstall NodeUninstall()
 * @method ListMetricOutput ListMetricOutput()
 * @method QueryMetricDimensions QueryMetricDimensions()
 * @method UpdateSqlMetrics UpdateSqlMetrics()
 * @method UpdateMetricOutput UpdateMetricOutput()
 * @method PutLogMonitor PutLogMonitor()
 * @method PutMetricData PutMetricData()
 * @method DeleteOutput DeleteOutput()
 * @method StartProject StartProject()
 * @method UploadData UploadData()
 * @method DescribeMetricList DescribeMetricList()
 * @method UpdateMetrics UpdateMetrics()
 * @method QueryDimTableDataByKey QueryDimTableDataByKey()
 * @method DescribeMetric DescribeMetric()
 * @method TaskConfigCreate TaskConfigCreate()
 * @method JVMConfigGetByInstanceId JVMConfigGetByInstanceId()
 * @method ListMetrics ListMetrics()
 * @method TaskConfigModify TaskConfigModify()
 * @method NodeProcessDelete NodeProcessDelete()
 * @method CreateSqlMetrics CreateSqlMetrics()
 * @method CreateProject CreateProject()
 * @method QueryDimTableData QueryDimTableData()
 * @method DeleteAlarmTemplate DeleteAlarmTemplate()
 * @method TaskConfigUnhealthy TaskConfigUnhealthy()
 * @method DeleteProject DeleteProject()
 * @method QueryIsMetricNameValid QueryIsMetricNameValid()
 * @method QueryMetricTop QueryMetricTop()
 * @method CreateOutput CreateOutput()
 * @method ListMyGroups ListMyGroups()
 * @method DeleteLogMonitor DeleteLogMonitor()
 * @method GetOutput GetOutput()
 * @method JVMConfigCreate JVMConfigCreate()
 * @method PutMetricMeta PutMetricMeta()
 * @method JVMConfigModify JVMConfigModify()
 * @method StatusProject StatusProject()
 * @method PutAlertTemplate PutAlertTemplate()
 * @method getProductGroupInstances getProductGroupInstances()
 * @method getProductGroups getProductGroups()
 * @method PutDimTableData PutDimTableData()
 * @method JVMConfigRemoveByIdList JVMConfigRemoveByIdList()
 * @method GetMetricStatistics GetMetricStatistics()
 * @method ProfileGet ProfileGet()
 * @method UpdateProject UpdateProject()
 * @method ListProject ListProject()
 * @method UpdateMetricStream UpdateMetricStream()
 * @method GetMetricsMeta GetMetricsMeta()
 * @method ListSqlMetrics ListSqlMetrics()
 * @method BatchCreateMetrics BatchCreateMetrics()
 * @method CreateMetrics CreateMetrics()
 * @method deleteProductGroup deleteProductGroup()
 * @method DeleteMetrics DeleteMetrics()
 * @method GetLogMonitorByMetricName GetLogMonitorByMetricName()
 * @method QueryIncremental QueryIncremental()
 * @method ListMetricStream ListMetricStream()
 * @method ListGroupsInner ListGroupsInner()
 * @method StopProject StopProject()
 * @method QueryMetricsFresh QueryMetricsFresh()
 * @method NodeListUpdate NodeListUpdate()
 * @method CreateMetricStream CreateMetricStream()
 * @method QueryMetricLast QueryMetricLast()
 * @method StopMetricStream StopMetricStream()
 * @method QueryCustomTable QueryCustomTable()
 * @method QueryListMetric QueryListMetric()
 * @method DeleteMetricStream DeleteMetricStream()
 * @method JVMConfigDisable JVMConfigDisable()
 * @method QueryMetricData QueryMetricData()
 * @method BatchPutDimTableData BatchPutDimTableData()
 * @method BatchCreateSqlMetrics BatchCreateSqlMetrics()
 * @method MetricMeta MetricMeta()
 * @method JVMConfigEnable JVMConfigEnable()
 * @method PutMetrics PutMetrics()
 * @method ListMetricsPlan ListMetricsPlan()
 * @method GetLogMonitorResourceControlInfo GetLogMonitorResourceControlInfo()
 * @method PutAlarmTemplate PutAlarmTemplate()
 * @method cmsShareGenerateToken cmsShareGenerateToken()
 * @method GetDimTable GetDimTable()
 * @method ListLogMonitorByGroupId ListLogMonitorByGroupId()
 * @method ListOutput ListOutput()
 * @method JVMConfigGetById JVMConfigGetById()
 * @method QueryEventLast QueryEventLast()
 * @method UpdateOutput UpdateOutput()
 * @method GetMetricStream GetMetricStream()
 * @method ListLogMonitor ListLogMonitor()
 * @method cmsListShares cmsListShares()
 * @method DeleteMetricOfLogMonitor DeleteMetricOfLogMonitor()
 * @method TaskConfigEnable TaskConfigEnable()
 * @method BatchQueryMetric BatchQueryMetric()
 */
class V20160922
{
}

/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setBody($body)
 * @method string getBody()
 */
class BatchPutDimTableData123 extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setAutoInstall($autoInstall)
 * @method bool getAutoInstall()
 * @method $this setEnableInstallAgentNewECS($enableInstallAgentNewECS)
 * @method bool getEnableInstallAgentNewECS()
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
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class IsMetricNameValid extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setEventName($eventName)
 * @method string getEventName()
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
 * @method $this setFilter($filter)
 * @method string getFilter()
 * @method $this setOrderDesc($orderDesc)
 * @method bool getOrderDesc()
 */
class QueryEvent extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class GetMetrics extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setYear($year)
 * @method int getYear()
 * @method $this setWeekOfYear($weekOfYear)
 * @method int getWeekOfYear()
 * @method $this setFileType($fileType)
 * @method string getFileType()
 */
class H5WeeklyReportUrl extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 */
class GetMetricStreamStatus extends Request
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
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 */
class StartMetricStream extends Request
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
 * @method $this setLength($length)
 * @method string getLength()
 * @method $this setExtend($extend)
 * @method string getExtend()
 */
class DescribeMetricDatum extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricOutputName($metricOutputName)
 * @method string getMetricOutputName()
 */
class DeleteMetricOutput extends Request
{

}/**
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 */
class NodeStatusList extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setLogId($logId)
 * @method int getLogId()
 */
class GetLogMonitorInAll extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setYear($year)
 * @method int getYear()
 * @method $this setWeekOfYear($weekOfYear)
 * @method int getWeekOfYear()
 */
class H5WeeklyReportUserIds extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this settoken($token)
 * @method string gettoken()
 */
class cmsShareDeleteTokenByToken extends Request
{

}/**
 * @method $this setAccessKey($accessKey)
 * @method string getAccessKey()
 */
class AccessKeyQuery extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricOutput($metricOutput)
 * @method string getMetricOutput()
 */
class CreateMetricOutput extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class JVMConfigRemoveByInstanceId extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
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
 */
class NodeList extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setSql($sql)
 * @method string getSql()
 * @method $this setInput($input)
 * @method string getInput()
 */
class MetricSqlCheck extends Request
{

}/**
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
 * @method $this setFieldNames($fieldNames)
 * @method string getFieldNames()
 * @method $this setListByTop($listByTop)
 * @method string getListByTop()
 * @method $this setOrderby($orderby)
 * @method string getOrderby()
 * @method $this setOrderDesc($orderDesc)
 * @method string getOrderDesc()
 * @method $this setLimit($limit)
 * @method string getLimit()
 * @method $this setTargetPrefix($targetPrefix)
 * @method string getTargetPrefix()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setLength($length)
 * @method string getLength()
 */
class MetricData extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAlarmTemplate extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setLogId($logId)
 * @method int getLogId()
 */
class ListMetricsOfLogMonitor extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setDimTable($dimTable)
 * @method string getDimTable()
 */
class CreateDimTable extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class JVMConfigRemoveById extends Request
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
 * @method $this setValueKey($valueKey)
 * @method string getValueKey()
 * @method $this setTop($top)
 * @method string getTop()
 * @method $this setExtend($extend)
 * @method string getExtend()
 */
class QueryMetricTopN extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListDimTable extends Request
{

}/**
 * @method $this setProjectOwner($projectOwner)
 * @method string getProjectOwner()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class QueryProject extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricOutputName($metricOutputName)
 * @method string getMetricOutputName()
 */
class GetMetricOutput extends Request
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
 * @method $this setLength($length)
 * @method string getLength()
 * @method $this setExtend($extend)
 * @method string getExtend()
 */
class QueryMetric extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class NodeProcesses extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 */
class DeleteDimTable extends Request
{

}/**
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setKey($key)
 * @method string getKey()
 */
class ListDimTableData extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class GetProject extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setIsdim($isdim)
 * @method string getIsdim()
 */
class QueryCustomField extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 */
class GetMetricStreamMeta extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class TaskConfigList extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setKey($key)
 * @method string getKey()
 */
class DeleteDimTableData extends Request
{

}/**
 * @method $this setIdList($idList)
 * @method array getIdList()
 */
class TaskConfigDelete extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setValue($value)
 * @method string getValue()
 */
class DeleteDimTableDataByKey extends Request
{

}/**
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
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
 * @method $this setOrderby($orderby)
 * @method string getOrderby()
 * @method $this setOrderDesc($orderDesc)
 * @method string getOrderDesc()
 * @method $this setLength($length)
 * @method string getLength()
 * @method $this setExpress($express)
 * @method string getExpress()
 */
class QueryInstanceTop extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setDimTable($dimTable)
 * @method string getDimTable()
 */
class UpdateDimTable extends Request
{

}/**
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
 * @method $this setNextKey($nextKey)
 * @method string getNextKey()
 */
class DimensionValues extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 */
class AccessKeyGenerate extends Request
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
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setWhere($where)
 * @method string getWhere()
 * @method $this setLimit($limit)
 * @method string getLimit()
 */
class QueryCustomValue extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class NodeStatus extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListMetricsMeta extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class GetSqlMetrics extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setgroupJson($groupJson)
 * @method string getgroupJson()
 */
class putProductGroup extends Request
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
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricOutputName($metricOutputName)
 * @method string getMetricOutputName()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListMetricOutput extends Request
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
 */
class QueryMetricDimensions extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setSql($sql)
 * @method string getSql()
 * @method $this setIsPublic($isPublic)
 * @method int getIsPublic()
 */
class UpdateSqlMetrics extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricOutputName($metricOutputName)
 * @method string getMetricOutputName()
 * @method $this setMetricOutput($metricOutput)
 * @method string getMetricOutput()
 */
class UpdateMetricOutput extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setLogMonitor($logMonitor)
 * @method string getLogMonitor()
 */
class PutLogMonitor extends Request
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
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricOutputName($metricOutputName)
 * @method string getMetricOutputName()
 */
class DeleteOutput extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setType($type)
 * @method string getType()
 */
class StartProject extends Request
{

}/**
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setData($data)
 * @method string getData()
 */
class UploadData extends Request
{

}/**
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
 * @method $this setLength($length)
 * @method string getLength()
 */
class DescribeMetricList extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setMetrics($metrics)
 * @method string getMetrics()
 */
class UpdateMetrics extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setValue($value)
 * @method string getValue()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDimTableDataByKey extends Request
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
 */
class DescribeMetric extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class JVMConfigGetByInstanceId extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListMetrics extends Request
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
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setSql($sql)
 * @method string getSql()
 * @method $this setIsPublic($isPublic)
 * @method int getIsPublic()
 */
class CreateSqlMetrics extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProject($project)
 * @method string getProject()
 */
class CreateProject extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setKey($key)
 * @method string getKey()
 */
class QueryDimTableData extends Request
{

}/**
 * @method $this settemplateId($templateId)
 * @method int gettemplateId()
 */
class DeleteAlarmTemplate extends Request
{

}/**
 * @method $this setTaskIdList($taskIdList)
 * @method array getTaskIdList()
 */
class TaskConfigUnhealthy extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class DeleteProject extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class QueryIsMetricNameValid extends Request
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
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricOutput($metricOutput)
 * @method string getMetricOutput()
 */
class CreateOutput extends Request
{

}/**
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListMyGroups extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setLogId($logId)
 * @method int getLogId()
 */
class DeleteLogMonitor extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricOutputName($metricOutputName)
 * @method string getMetricOutputName()
 */
class GetOutput extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setPort($port)
 * @method int getPort()
 * @method $this setObjectNameJsonStr($objectNameJsonStr)
 * @method string getObjectNameJsonStr()
 */
class JVMConfigCreate extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setMetricMeta($metricMeta)
 * @method string getMetricMeta()
 */
class PutMetricMeta extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setPort($port)
 * @method int getPort()
 * @method $this setObjectNameJsonStr($objectNameJsonStr)
 * @method string getObjectNameJsonStr()
 */
class JVMConfigModify extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class StatusProject extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setTemplateName($templateName)
 * @method string getTemplateName()
 * @method $this setTemplateDescribe($templateDescribe)
 * @method string getTemplateDescribe()
 * @method $this setSilenceTime($silenceTime)
 * @method string getSilenceTime()
 * @method $this setEnableStartTime($enableStartTime)
 * @method string getEnableStartTime()
 * @method $this setEnableEndTime($enableEndTime)
 * @method string getEnableEndTime()
 * @method $this setNotifyLevel($notifyLevel)
 * @method string getNotifyLevel()
 * @method $this setTemplateType($templateType)
 * @method string getTemplateType()
 * @method $this setApplyGroups($applyGroups)
 * @method string getApplyGroups()
 * @method $this setAlarmTemplateItems($alarmTemplateItems)
 * @method string getAlarmTemplateItems()
 */
class PutAlertTemplate extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setgroupId($groupId)
 * @method int getgroupId()
 */
class getProductGroupInstances extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcategory($category)
 * @method string getcategory()
 */
class getProductGroups extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setBody($body)
 * @method string getBody()
 */
class PutDimTableData extends Request
{

}/**
 * @method $this setIdList($idList)
 * @method string getIdList()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class JVMConfigRemoveByIdList extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setNextToken($nextToken)
 * @method int getNextToken()
 * @method $this setLength($length)
 * @method int getLength()
 */
class GetMetricStatistics extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 */
class ProfileGet extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setProject($project)
 * @method string getProject()
 */
class UpdateProject extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectOwner($projectOwner)
 * @method string getProjectOwner()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListProject extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 * @method $this setMetricStream($metricStream)
 * @method string getMetricStream()
 */
class UpdateMetricStream extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class GetMetricsMeta extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListSqlMetrics extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 * @method $this setSqls($sqls)
 * @method string getSqls()
 */
class BatchCreateMetrics extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setIsPublic($isPublic)
 * @method int getIsPublic()
 * @method $this setMetrics($metrics)
 * @method string getMetrics()
 */
class CreateMetrics extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setgroupId($groupId)
 * @method int getgroupId()
 */
class deleteProductGroup extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class DeleteMetrics extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class GetLogMonitorByMetricName extends Request
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
 * @method $this setTargetPeriod($targetPeriod)
 * @method string getTargetPeriod()
 * @method $this setColumns($columns)
 * @method string getColumns()
 * @method $this setExtend($extend)
 * @method string getExtend()
 */
class QueryIncremental extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListMetricStream extends Request
{

}/**
 * @method $this setSelectContactGroups($selectContactGroups)
 * @method bool getSelectContactGroups()
 * @method $this setGroupType($groupType)
 * @method string getGroupType()
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
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 */
class ListGroupsInner extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class StopProject extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricNames($metricNames)
 * @method string getMetricNames()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setFilter($filter)
 * @method string getFilter()
 */
class QueryMetricsFresh extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 */
class NodeListUpdate extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStream($metricStream)
 * @method string getMetricStream()
 */
class CreateMetricStream extends Request
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
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 */
class StopMetricStream extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 */
class QueryCustomTable extends Request
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
 * @method $this setLength($length)
 * @method string getLength()
 * @method $this setExtend($extend)
 * @method string getExtend()
 * @method $this setFilter($filter)
 * @method string getFilter()
 */
class QueryListMetric extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 */
class DeleteMetricStream extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class JVMConfigDisable extends Request
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
 * @method $this setExpress($express)
 * @method string getExpress()
 * @method $this setLength($length)
 * @method string getLength()
 */
class QueryMetricData extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setBody($body)
 * @method string getBody()
 */
class BatchPutDimTableData extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setSqls($sqls)
 * @method string getSqls()
 * @method $this setIsPublic($isPublic)
 * @method int getIsPublic()
 */
class BatchCreateSqlMetrics extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class MetricMeta extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class JVMConfigEnable extends Request
{

}/**
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setData($data)
 * @method string getData()
 */
class PutMetrics extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListMetricsPlan extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class GetLogMonitorResourceControlInfo extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class PutAlarmTemplate extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setparams($params)
 * @method string getparams()
 * @method $this setname($name)
 * @method string getname()
 * @method $this setviewId($viewId)
 * @method string getviewId()
 * @method $this setviewConf($viewConf)
 * @method string getviewConf()
 * @method $this settype($type)
 * @method string gettype()
 */
class cmsShareGenerateToken extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 */
class GetDimTable extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class ListLogMonitorByGroupId extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricOutputName($metricOutputName)
 * @method string getMetricOutputName()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListOutput extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class JVMConfigGetById extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setEventName($eventName)
 * @method string getEventName()
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
 * @method $this setFilter($filter)
 * @method string getFilter()
 */
class QueryEventLast extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricOutputName($metricOutputName)
 * @method string getMetricOutputName()
 * @method $this setMetricOutput($metricOutput)
 * @method string getMetricOutput()
 */
class UpdateOutput extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 */
class GetMetricStream extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSearchValue($searchValue)
 * @method string getSearchValue()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class ListLogMonitor extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setpageNo($pageNo)
 * @method int getpageNo()
 * @method $this setpageSize($pageSize)
 * @method int getpageSize()
 */
class cmsListShares extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setMetricId($metricId)
 * @method int getMetricId()
 */
class DeleteMetricOfLogMonitor extends Request
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
 * @method $this setExtend($extend)
 * @method string getExtend()
 * @method $this setFilter($filter)
 * @method string getFilter()
 */
class BatchQueryMetric extends Request
{

}