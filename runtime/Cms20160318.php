<?php

namespace aliyun\sdk\services\Cms20160318;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160318
 *
 * @package aliyun\sdk\services\Cms20160318
 * @method BatchPutDimTableData123 BatchPutDimTableData123()
 * @method AccessKeyGet AccessKeyGet()
 * @method QueryEvent QueryEvent()
 * @method QueryMetricList QueryMetricList()
 * @method DeleteMetricOutput DeleteMetricOutput()
 * @method cmsShareDeleteTokenByToken cmsShareDeleteTokenByToken()
 * @method CreateMetricOutput CreateMetricOutput()
 * @method NodeInstall NodeInstall()
 * @method NodeList NodeList()
 * @method MetricSqlCheck MetricSqlCheck()
 * @method CreateDimTable CreateDimTable()
 * @method QueryMetricTopN QueryMetricTopN()
 * @method ListDimTable ListDimTable()
 * @method GetMetricOutput GetMetricOutput()
 * @method NodeProcesses NodeProcesses()
 * @method DeleteDimTable DeleteDimTable()
 * @method GetProject GetProject()
 * @method DeleteDimTableData DeleteDimTableData()
 * @method DeleteDimTableDataByKey DeleteDimTableDataByKey()
 * @method UpdateDimTable UpdateDimTable()
 * @method AccessKeyGenerate AccessKeyGenerate()
 * @method NodeProcessCreate NodeProcessCreate()
 * @method NodeStatus NodeStatus()
 * @method ListMetricsMeta ListMetricsMeta()
 * @method GetSqlMetrics GetSqlMetrics()
 * @method putProductGroup putProductGroup()
 * @method ListProductGroupInstances ListProductGroupInstances()
 * @method ListMetricOutput ListMetricOutput()
 * @method UpdateSqlMetrics UpdateSqlMetrics()
 * @method UpdateMetricOutput UpdateMetricOutput()
 * @method PutMetricData PutMetricData()
 * @method DeleteOutput DeleteOutput()
 * @method StartProject StartProject()
 * @method UploadData UploadData()
 * @method QueryDimTableDataByKey QueryDimTableDataByKey()
 * @method DescribeMetric DescribeMetric()
 * @method NodeProcessDelete NodeProcessDelete()
 * @method CreateSqlMetrics CreateSqlMetrics()
 * @method CreateProject CreateProject()
 * @method QueryDimTableData QueryDimTableData()
 * @method DeleteProject DeleteProject()
 * @method QueryMetricTop QueryMetricTop()
 * @method CreateOutput CreateOutput()
 * @method GetOutput GetOutput()
 * @method StatusProject StatusProject()
 * @method getProductGroupInstances getProductGroupInstances()
 * @method getProductGroups getProductGroups()
 * @method PutDimTableData PutDimTableData()
 * @method UpdateProject UpdateProject()
 * @method ListProject ListProject()
 * @method UpdateMetricStream UpdateMetricStream()
 * @method GetMetricsMeta GetMetricsMeta()
 * @method ListSqlMetrics ListSqlMetrics()
 * @method deleteProductGroup deleteProductGroup()
 * @method DeleteMetrics DeleteMetrics()
 * @method ListMetricStream ListMetricStream()
 * @method StopProject StopProject()
 * @method ListProductGroups ListProductGroups()
 * @method CreateMetricStream CreateMetricStream()
 * @method QueryMetricLast QueryMetricLast()
 * @method QueryListMetric QueryListMetric()
 * @method DeleteMetricStream DeleteMetricStream()
 * @method QueryMetricData QueryMetricData()
 * @method BatchPutDimTableData BatchPutDimTableData()
 * @method BatchCreateSqlMetrics BatchCreateSqlMetrics()
 * @method PutMetrics PutMetrics()
 * @method cmsShareGenerateToken cmsShareGenerateToken()
 * @method GetDimTable GetDimTable()
 * @method ListOutput ListOutput()
 * @method ListOverviewConfig ListOverviewConfig()
 * @method UpdateOutput UpdateOutput()
 * @method GetMetricStream GetMetricStream()
 * @method cmsListShares cmsListShares()
 * @method QueryMetricAgg QueryMetricAgg()
 */
class V20160318
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
 * @method $this setLength($length)
 * @method string getLength()
 * @method $this setExpress($express)
 * @method string getExpress()
 */
class QueryMetricList extends Request
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
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this settoken($token)
 * @method string gettoken()
 */
class cmsShareDeleteTokenByToken extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class NodeInstall extends Request
{

}/**
 * @method $this setUserId($userId)
 * @method int getUserId()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
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
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setKey($key)
 * @method string getKey()
 */
class DeleteDimTableData extends Request
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
 * @method $this setMetricType($metricType)
 * @method int getMetricType()
 * @method $this setIsEvent($isEvent)
 * @method bool getIsEvent()
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
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setgroupId($groupId)
 * @method int getgroupId()
 */
class ListProductGroupInstances extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
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
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
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
 * @method $this setcategory($category)
 * @method string getcategory()
 */
class ListProductGroups extends Request
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
 * @method $this setLength($length)
 * @method string getLength()
 * @method $this setExpress($express)
 * @method string getExpress()
 */
class QueryMetricLast extends Request
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
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 */
class ListOverviewConfig extends Request
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
 * @method $this setProject($project)
 * @method string getProject()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 */
class QueryMetricAgg extends Request
{

}