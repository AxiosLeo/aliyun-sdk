<?php

namespace aliyun\sdk\services\Cms20170824;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170824
 *
 * @package aliyun\sdk\services\Cms20170824
 * @method DeleteTask DeleteTask()
 * @method PutDashboardConfig PutDashboardConfig()
 * @method getIspCityTrend getIspCityTrend()
 * @method DescribeTaskDetail DescribeTaskDetail()
 * @method BatchDeleteTask BatchDeleteTask()
 * @method ListMetricMeta ListMetricMeta()
 * @method DeleteDashboardConfig DeleteDashboardConfig()
 * @method QueryTaskInfo QueryTaskInfo()
 * @method QuerySlaTask QuerySlaTask()
 * @method UpdateTask UpdateTask()
 * @method GetAccessStrategy GetAccessStrategy()
 * @method CopyGroupDashboard CopyGroupDashboard()
 * @method GetAgentAllCityTrend GetAgentAllCityTrend()
 * @method putProductGroup putProductGroup()
 * @method DeleteTasks DeleteTasks()
 * @method PutChartMetric PutChartMetric()
 * @method ListAlertTemplate ListAlertTemplate()
 * @method CountTaskInfo CountTaskInfo()
 * @method DeleteMetricMeta DeleteMetricMeta()
 * @method GetErrorInfoUnconverge GetErrorInfoUnconverge()
 * @method GetAgentIspTrend GetAgentIspTrend()
 * @method StopTasks StopTasks()
 * @method GetAgentCountryTrend GetAgentCountryTrend()
 * @method GetErrorRateTrend GetErrorRateTrend()
 * @method UpdateTemplateApplyGroups UpdateTemplateApplyGroups()
 * @method DescribeTasks DescribeTasks()
 * @method CreateTask CreateTask()
 * @method GetAgentCityTrend GetAgentCityTrend()
 * @method PauseTasks PauseTasks()
 * @method QueryTaskRate QueryTaskRate()
 * @method GetAgentAllCityAvailRate GetAgentAllCityAvailRate()
 * @method PutAlertTemplate PutAlertTemplate()
 * @method GetProductGroupInstances GetProductGroupInstances()
 * @method GetProductGroups GetProductGroups()
 * @method GetAgentSingleIndexTrend GetAgentSingleIndexTrend()
 * @method GetTracerouteRouteInfo GetTracerouteRouteInfo()
 * @method DeleteProductGroup DeleteProductGroup()
 * @method QueryOverdueTask QueryOverdueTask()
 * @method BatchCreateOnceTask BatchCreateOnceTask()
 * @method DeleteAlertTemplate DeleteAlertTemplate()
 * @method GetErrorKindRateTrend GetErrorKindRateTrend()
 * @method QueryTask QueryTask()
 * @method GetDashboardConfig GetDashboardConfig()
 * @method GetErrorInfo GetErrorInfo()
 * @method GetIspRegionTrend GetIspRegionTrend()
 * @method GetAgentIndexCombineTrend GetAgentIndexCombineTrend()
 * @method DeleteChartMetric DeleteChartMetric()
 * @method GetAgentIndexTrend GetAgentIndexTrend()
 * @method GetLastRecord GetLastRecord()
 * @method ModifyTask ModifyTask()
 * @method MoveMetric MoveMetric()
 * @method StartTasks StartTasks()
 * @method QueryReportTask QueryReportTask()
 * @method GetAgentRegionTrend GetAgentRegionTrend()
 * @method GetAgentIspCombineTrend GetAgentIspCombineTrend()
 */
class V20170824
{
}

/**
 * @method $this settaskId($taskId)
 * @method string gettaskId()
 */
class DeleteTask extends Request
{

}/**
 * @method $this setgroupName($groupName)
 * @method string getgroupName()
 * @method $this settimeRange($timeRange)
 * @method int gettimeRange()
 * @method $this setinterval($interval)
 * @method int getinterval()
 * @method $this setparams($params)
 * @method string getparams()
 * @method $this setgroupId($groupId)
 * @method string getgroupId()
 * @method $this settype($type)
 * @method string gettype()
 */
class PutDashboardConfig extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class getIspCityTrend extends Request
{

}/**
 * @method $this settaskId($taskId)
 * @method string gettaskId()
 */
class DescribeTaskDetail extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 */
class BatchDeleteTask extends Request
{

}/**
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class ListMetricMeta extends Request
{

}/**
 * @method $this setgroupIds($groupIds)
 * @method string getgroupIds()
 */
class DeleteDashboardConfig extends Request
{

}/**
 * @method $this settaskId($taskId)
 * @method string gettaskId()
 */
class QueryTaskInfo extends Request
{

}/**
 * @method $this setpageSize($pageSize)
 * @method string getpageSize()
 */
class QuerySlaTask extends Request
{

}/**
 * @method $this setalertName($alertName)
 * @method string getalertName()
 * @method $this settaskId($taskId)
 * @method string gettaskId()
 * @method $this setclientIds($clientIds)
 * @method string getclientIds()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 * @method $this settaskName($taskName)
 * @method string gettaskName()
 * @method $this settaskState($taskState)
 * @method string gettaskState()
 * @method $this setagentGroup($agentGroup)
 * @method string getagentGroup()
 * @method $this setagentType($agentType)
 * @method string getagentType()
 * @method $this setreportProject($reportProject)
 * @method string getreportProject()
 * @method $this setaddress($address)
 * @method string getaddress()
 * @method $this setinterval($interval)
 * @method string getinterval()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this setispCity($ispCity)
 * @method string getispCity()
 * @method $this setoptions($options)
 * @method string getoptions()
 * @method $this setalertInfo($alertInfo)
 * @method string getalertInfo()
 * @method $this setalertRule($alertRule)
 * @method string getalertRule()
 * @method $this setip($ip)
 * @method string getip()
 */
class UpdateTask extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetAccessStrategy extends Request
{

}/**
 * @method $this setfromGroupId($fromGroupId)
 * @method string getfromGroupId()
 * @method $this settoGroupId($toGroupId)
 * @method string gettoGroupId()
 */
class CopyGroupDashboard extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetAgentAllCityTrend extends Request
{

}/**
 * @method $this setgroupJson($groupJson)
 * @method string getgroupJson()
 */
class putProductGroup extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 */
class DeleteTasks extends Request
{

}/**
 * @method $this setheight($height)
 * @method int getheight()
 * @method $this setgroupId($groupId)
 * @method string getgroupId()
 * @method $this setchartName($chartName)
 * @method string getchartName()
 * @method $this setchartType($chartType)
 * @method string getchartType()
 * @method $this setmetrics($metrics)
 * @method string getmetrics()
 * @method $this setwidth($width)
 * @method int getwidth()
 * @method $this setstyle($style)
 * @method string getstyle()
 * @method $this seti18nKey($i18nKey)
 * @method string geti18nKey()
 * @method $this setid($id)
 * @method string getid()
 * @method $this setparams($params)
 * @method string getparams()
 * @method $this setunit($unit)
 * @method string getunit()
 * @method $this setvalueRange($valueRange)
 * @method string getvalueRange()
 * @method $this settype($type)
 * @method string gettype()
 */
class PutChartMetric extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListAlertTemplate extends Request
{

}/**
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this setpage($page)
 * @method int getpage()
 * @method $this setpageSize($pageSize)
 * @method int getpageSize()
 */
class CountTaskInfo extends Request
{

}/**
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMetric($metric)
 * @method string getMetric()
 */
class DeleteMetricMeta extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetErrorInfoUnconverge extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetAgentIspTrend extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 */
class StopTasks extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetAgentCountryTrend extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetErrorRateTrend extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 * @method $this setGroupIds($groupIds)
 * @method string getGroupIds()
 */
class UpdateTemplateApplyGroups extends Request
{

}/**
 * @method $this settaskId($taskId)
 * @method string gettaskId()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 * @method $this setkeyword($keyword)
 * @method string getkeyword()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeTasks extends Request
{

}/**
 * @method $this setalertName($alertName)
 * @method string getalertName()
 * @method $this settaskId($taskId)
 * @method string gettaskId()
 * @method $this setclientIds($clientIds)
 * @method string getclientIds()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 * @method $this settaskName($taskName)
 * @method string gettaskName()
 * @method $this settaskState($taskState)
 * @method string gettaskState()
 * @method $this setagentGroup($agentGroup)
 * @method string getagentGroup()
 * @method $this setagentType($agentType)
 * @method string getagentType()
 * @method $this setreportProject($reportProject)
 * @method string getreportProject()
 * @method $this setaddress($address)
 * @method string getaddress()
 * @method $this setinterval($interval)
 * @method string getinterval()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this setispCity($ispCity)
 * @method string getispCity()
 * @method $this setoptions($options)
 * @method string getoptions()
 * @method $this setalertInfo($alertInfo)
 * @method string getalertInfo()
 * @method $this setalertRule($alertRule)
 * @method string getalertRule()
 * @method $this setip($ip)
 * @method string getip()
 */
class CreateTask extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetAgentCityTrend extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 */
class PauseTasks extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 */
class QueryTaskRate extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetAgentAllCityAvailRate extends Request
{

}/**
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
 * @method $this setgroupId($groupId)
 * @method int getgroupId()
 * @method $this setgroupName($groupName)
 * @method string getgroupName()
 */
class GetProductGroupInstances extends Request
{

}/**
 * @method $this setcategory($category)
 * @method string getcategory()
 * @method $this setinstanceId($instanceId)
 * @method string getinstanceId()
 */
class GetProductGroups extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetAgentSingleIndexTrend extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetTracerouteRouteInfo extends Request
{

}/**
 * @method $this setgroupId($groupId)
 * @method int getgroupId()
 */
class DeleteProductGroup extends Request
{

}/**
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this setpage($page)
 * @method int getpage()
 * @method $this setpageSize($pageSize)
 * @method int getpageSize()
 */
class QueryOverdueTask extends Request
{

}/**
 * @method $this settaskList($taskList)
 * @method string gettaskList()
 */
class BatchCreateOnceTask extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 */
class DeleteAlertTemplate extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetErrorKindRateTrend extends Request
{

}/**
 * @method $this settaskId($taskId)
 * @method string gettaskId()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 * @method $this setkeyword($keyword)
 * @method string getkeyword()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryTask extends Request
{

}/**
 * @method $this setgroupId($groupId)
 * @method string getgroupId()
 * @method $this settype($type)
 * @method string gettype()
 */
class GetDashboardConfig extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetErrorInfo extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetIspRegionTrend extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetAgentIndexCombineTrend extends Request
{

}/**
 * @method $this setgroupId($groupId)
 * @method string getgroupId()
 * @method $this setids($ids)
 * @method string getids()
 * @method $this settype($type)
 * @method string gettype()
 */
class DeleteChartMetric extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetAgentIndexTrend extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetLastRecord extends Request
{

}/**
 * @method $this setalertName($alertName)
 * @method string getalertName()
 * @method $this settaskId($taskId)
 * @method string gettaskId()
 * @method $this setclientIds($clientIds)
 * @method string getclientIds()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 * @method $this settaskName($taskName)
 * @method string gettaskName()
 * @method $this settaskState($taskState)
 * @method string gettaskState()
 * @method $this setagentGroup($agentGroup)
 * @method string getagentGroup()
 * @method $this setagentType($agentType)
 * @method string getagentType()
 * @method $this setreportProject($reportProject)
 * @method string getreportProject()
 * @method $this setaddress($address)
 * @method string getaddress()
 * @method $this setinterval($interval)
 * @method string getinterval()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this setispCity($ispCity)
 * @method string getispCity()
 * @method $this setoptions($options)
 * @method string getoptions()
 * @method $this setalertInfo($alertInfo)
 * @method string getalertInfo()
 * @method $this setalertRule($alertRule)
 * @method string getalertRule()
 * @method $this setip($ip)
 * @method string getip()
 */
class ModifyTask extends Request
{

}/**
 * @method $this setgroupId($groupId)
 * @method string getgroupId()
 * @method $this setsortGroups($sortGroups)
 * @method string getsortGroups()
 * @method $this settype($type)
 * @method string gettype()
 */
class MoveMetric extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 */
class StartTasks extends Request
{

}/**
 * @method $this settaskId($taskId)
 * @method string gettaskId()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 * @method $this setkeyword($keyword)
 * @method string getkeyword()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryReportTask extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetAgentRegionTrend extends Request
{

}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 * @method $this setstartTime($startTime)
 * @method string getstartTime()
 * @method $this setendTime($endTime)
 * @method string getendTime()
 * @method $this settaskType($taskType)
 * @method string gettaskType()
 */
class GetAgentIspCombineTrend extends Request
{

}