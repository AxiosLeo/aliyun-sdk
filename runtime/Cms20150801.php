<?php

namespace aliyun\sdk\services\Cms20150801;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150801
 *
 * @package aliyun\sdk\services\Cms20150801
 * @method BatchPutDimTableData123 BatchPutDimTableData123()
 * @method GetMetrics GetMetrics()
 * @method GetMetricStreamStatus GetMetricStreamStatus()
 * @method StartMetricStream StartMetricStream()
 * @method DescribeMetricDatum DescribeMetricDatum()
 * @method CreateDimTable CreateDimTable()
 * @method QueryMetricTopN QueryMetricTopN()
 * @method ListDimTable ListDimTable()
 * @method QueryMetric QueryMetric()
 * @method DeleteDimTable DeleteDimTable()
 * @method ListDimTableData ListDimTableData()
 * @method GetProject GetProject()
 * @method QueryStatistics QueryStatistics()
 * @method GetMetricStreamMeta GetMetricStreamMeta()
 * @method DeleteDimTableData DeleteDimTableData()
 * @method UpdateDimTable UpdateDimTable()
 * @method GetSQLMetrics GetSQLMetrics()
 * @method updateSQLMetrics updateSQLMetrics()
 * @method StartProject StartProject()
 * @method DescribeMetricList DescribeMetricList()
 * @method UpdateMetrics UpdateMetrics()
 * @method DescribeMetric DescribeMetric()
 * @method ListMetrics ListMetrics()
 * @method CreateSQLMetrics CreateSQLMetrics()
 * @method CreateProject CreateProject()
 * @method DeleteProject DeleteProject()
 * @method StatusProject StatusProject()
 * @method PutDimTableData PutDimTableData()
 * @method GetMetricStatistics GetMetricStatistics()
 * @method UpdateProject UpdateProject()
 * @method ListProject ListProject()
 * @method UpdateMetricStream UpdateMetricStream()
 * @method GetMetricsMeta GetMetricsMeta()
 * @method ListSQLMetrics ListSQLMetrics()
 * @method BatchCreateMetrics BatchCreateMetrics()
 * @method CreateMetrics CreateMetrics()
 * @method DeleteMetrics DeleteMetrics()
 * @method QueryIncremental QueryIncremental()
 * @method ListMetricStream ListMetricStream()
 * @method StopProject StopProject()
 * @method CreateMetricStream CreateMetricStream()
 * @method StopMetricStream StopMetricStream()
 * @method QueryListMetric QueryListMetric()
 * @method DeleteMetricStream DeleteMetricStream()
 * @method BatchPutDimTableData BatchPutDimTableData()
 * @method BatchCreateSqlMetrics BatchCreateSqlMetrics()
 * @method ListMetricsPlan ListMetricsPlan()
 * @method GetDimTable GetDimTable()
 * @method GetMetricStream GetMetricStream()
 * @method BatchQueryMetric BatchQueryMetric()
 */
class V20150801
{
}

/**
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setBody($body)
 * @method string getBody()
 */
class BatchPutDimTableData123 extends Request
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
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 */
class GetMetricStreamStatus extends Request
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
 * @method $this setDimTable($dimTable)
 * @method string getDimTable()
 */
class CreateDimTable extends Request
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
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class GetProject extends Request
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
 * @method $this setTargetPeriod($targetPeriod)
 * @method string getTargetPeriod()
 * @method $this setFunction($function)
 * @method string getFunction()
 * @method $this setExtend($extend)
 * @method string getExtend()
 */
class QueryStatistics extends Request
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
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setKey($key)
 * @method string getKey()
 */
class DeleteDimTableData extends Request
{

}/**
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setDimTable($dimTable)
 * @method string getDimTable()
 */
class UpdateDimTable extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class GetSQLMetrics extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setSql($sql)
 * @method string getSql()
 * @method $this setIsPublic($isPublic)
 * @method int getIsPublic()
 */
class updateSQLMetrics extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class StartProject extends Request
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
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setSql($sql)
 * @method string getSql()
 * @method $this setIsPublic($isPublic)
 * @method int getIsPublic()
 */
class CreateSQLMetrics extends Request
{

}/**
 * @method $this setProject($project)
 * @method string getProject()
 */
class CreateProject extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class DeleteProject extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class StatusProject extends Request
{

}/**
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setBody($body)
 * @method string getBody()
 */
class PutDimTableData extends Request
{

}/**
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
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setProject($project)
 * @method string getProject()
 */
class UpdateProject extends Request
{

}/**
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
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class GetMetricsMeta extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class ListSQLMetrics extends Request
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
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 * @method $this setMetrics($metrics)
 * @method string getMetrics()
 */
class CreateMetrics extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class DeleteMetrics extends Request
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
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 */
class StopProject extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStream($metricStream)
 * @method string getMetricStream()
 */
class CreateMetricStream extends Request
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
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 */
class DeleteMetricStream extends Request
{

}/**
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 * @method $this setBody($body)
 * @method string getBody()
 */
class BatchPutDimTableData extends Request
{

}/**
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
 * @method $this setDimTableName($dimTableName)
 * @method string getDimTableName()
 */
class GetDimTable extends Request
{

}/**
 * @method $this setProjectName($projectName)
 * @method string getProjectName()
 * @method $this setMetricStreamName($metricStreamName)
 * @method string getMetricStreamName()
 */
class GetMetricStream extends Request
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
 * @method $this setExtend($extend)
 * @method string getExtend()
 * @method $this setFilter($filter)
 * @method string getFilter()
 */
class BatchQueryMetric extends Request
{

}