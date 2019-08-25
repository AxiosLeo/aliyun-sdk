<?php

namespace aliyun\sdk\services\Cms20170824;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170824
 *
 * @package aliyun\sdk\services\Cms20170824
 * @method DeleteTask DeleteTask()
 * @method getIspCityTrend getIspCityTrend()
 * @method BatchDeleteTask BatchDeleteTask()
 * @method ListMetricMeta ListMetricMeta()
 * @method QuerySlaTask QuerySlaTask()
 * @method UpdateTask UpdateTask()
 * @method GetAccessStrategy GetAccessStrategy()
 * @method GetAgentAllCityTrend GetAgentAllCityTrend()
 * @method DescribeISPAreaCity DescribeISPAreaCity()
 * @method DeleteTasks DeleteTasks()
 * @method ListMetricMetaProject ListMetricMetaProject()
 * @method CountTaskInfo CountTaskInfo()
 * @method GetErrorInfoUnconverge GetErrorInfoUnconverge()
 * @method GetAgentIspTrend GetAgentIspTrend()
 * @method StopTasks StopTasks()
 * @method GetAgentCountryTrend GetAgentCountryTrend()
 * @method GetErrorRateTrend GetErrorRateTrend()
 * @method DescribeTasks DescribeTasks()
 * @method CreateTask CreateTask()
 * @method GetISPAreaCity GetISPAreaCity()
 * @method GetAgentCityTrend GetAgentCityTrend()
 * @method PauseTasks PauseTasks()
 * @method GetAgentAllCityAvailRate GetAgentAllCityAvailRate()
 * @method GetAgentSingleIndexTrend GetAgentSingleIndexTrend()
 * @method GetTracerouteRouteInfo GetTracerouteRouteInfo()
 * @method QueryOverdueTask QueryOverdueTask()
 * @method BatchCreateOnceTask BatchCreateOnceTask()
 * @method GetErrorKindRateTrend GetErrorKindRateTrend()
 * @method QueryTask QueryTask()
 * @method GetErrorInfo GetErrorInfo()
 * @method GetIspRegionTrend GetIspRegionTrend()
 * @method GetAgentIndexCombineTrend GetAgentIndexCombineTrend()
 * @method GetAgentIndexTrend GetAgentIndexTrend()
 * @method GetLastRecord GetLastRecord()
 * @method ModifyTask ModifyTask()
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
 */
class DescribeISPAreaCity extends Request
{
}/**
 * @method $this settaskIds($taskIds)
 * @method string gettaskIds()
 */
class DeleteTasks extends Request
{
}/**
 */
class ListMetricMetaProject extends Request
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
 */
class GetISPAreaCity extends Request
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
