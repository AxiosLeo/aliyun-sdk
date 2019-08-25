<?php

namespace aliyun\sdk\services\Cms20160318;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160318
 *
 * @package aliyun\sdk\services\Cms20160318
 * @method AccessKeyGet AccessKeyGet()
 * @method QueryEvent QueryEvent()
 * @method QueryMetricList QueryMetricList()
 * @method cmsShareDeleteTokenByToken cmsShareDeleteTokenByToken()
 * @method NodeInstall NodeInstall()
 * @method NodeList NodeList()
 * @method QueryMetricTopN QueryMetricTopN()
 * @method NodeProcesses NodeProcesses()
 * @method AccessKeyGenerate AccessKeyGenerate()
 * @method NodeProcessCreate NodeProcessCreate()
 * @method NodeStatus NodeStatus()
 * @method putProductGroup putProductGroup()
 * @method ListProductGroupInstances ListProductGroupInstances()
 * @method PutMetricData PutMetricData()
 * @method UploadData UploadData()
 * @method NodeProcessDelete NodeProcessDelete()
 * @method QueryMetricTop QueryMetricTop()
 * @method getProductGroupInstances getProductGroupInstances()
 * @method getProductGroups getProductGroups()
 * @method PutDimTableData PutDimTableData()
 * @method deleteProductGroup deleteProductGroup()
 * @method ListProductGroups ListProductGroups()
 * @method QueryMetricLast QueryMetricLast()
 * @method QueryListMetric QueryListMetric()
 * @method QueryMetricData QueryMetricData()
 * @method PutMetrics PutMetrics()
 * @method cmsShareGenerateToken cmsShareGenerateToken()
 * @method ListOverviewConfig ListOverviewConfig()
 * @method cmsListShares cmsListShares()
 * @method QueryMetricAgg QueryMetricAgg()
 */
class V20160318
{
}

/**
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
 * @method $this settoken($token)
 * @method string gettoken()
 */
class cmsShareDeleteTokenByToken extends Request
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
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class NodeProcesses extends Request
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
 * @method $this setcallby_cms_owner($callby_cms_owner)
 * @method string getcallby_cms_owner()
 * @method $this setBody($body)
 * @method string getBody()
 */
class PutMetricData extends Request
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
 * @method $this setgroupId($groupId)
 * @method int getgroupId()
 */
class deleteProductGroup extends Request
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
 */
class ListOverviewConfig extends Request
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
