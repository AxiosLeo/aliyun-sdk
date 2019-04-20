<?php

namespace aliyun\sdk\services\ARMS20181219;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20181219
 *
 * @package aliyun\sdk\services\ARMS20181219
 * @method SearchTraces SearchTraces()
 * @method CreateApp CreateApp()
 * @method MetricQuery MetricQuery()
 * @method DeleteApp DeleteApp()
 * @method ARMSQueryDataSet ARMSQueryDataSet()
 * @method GetTrace GetTrace()
 * @method GetServices GetServices()
 */
class V20181219
{
}

/**
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setOperationName($operationName)
 * @method string getOperationName()
 * @method $this setMinDuration($minDuration)
 * @method int getMinDuration()
 * @method $this setAppType($appType)
 * @method string getAppType()
 * @method $this setTag1($tag1)
 * @method string getTag1()
 * @method $this setTag2($tag2)
 * @method string getTag2()
 */
class SearchTraces extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setAppName($appName)
 * @method string getAppName()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSource($source)
 * @method string getSource()
 * @method $this setConfig($config)
 * @method string getConfig()
 */
class CreateApp extends Request
{

}/**
 * @method $this setFilters($filters)
 * @method array getFilters()
 * @method $this setIintervalInSec($iintervalInSec)
 * @method int getIintervalInSec()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setMetric($metric)
 * @method string getMetric()
 * @method $this setMeasures($measures)
 * @method array getMeasures()
 * @method $this setDimensions($dimensions)
 * @method array getDimensions()
 * @method $this setOrderBy($orderBy)
 * @method string getOrderBy()
 * @method $this setLimit($limit)
 * @method int getLimit()
 * @method $this setOrder($order)
 * @method string getOrder()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class MetricQuery extends Request
{

}/**
 * @method $this setAppId($appId)
 * @method string getAppId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setType($type)
 * @method string getType()
 */
class DeleteApp extends Request
{

}/**
 * @method $this setDimensions($dimensions)
 * @method array getDimensions()
 * @method $this setIntervalInSec($intervalInSec)
 * @method int getIntervalInSec()
 * @method $this setDateStr($dateStr)
 * @method string getDateStr()
 * @method $this setMinTime($minTime)
 * @method int getMinTime()
 * @method $this setMaxTime($maxTime)
 * @method int getMaxTime()
 * @method $this setIsDrillDown($isDrillDown)
 * @method bool getIsDrillDown()
 * @method $this setMeasures($measures)
 * @method array getMeasures()
 * @method $this setOrderByKey($orderByKey)
 * @method string getOrderByKey()
 * @method $this setLimit($limit)
 * @method int getLimit()
 * @method $this setReduceTail($reduceTail)
 * @method bool getReduceTail()
 * @method $this setHungryMode($hungryMode)
 * @method bool getHungryMode()
 * @method $this setRequiredDims($requiredDims)
 * @method array getRequiredDims()
 * @method $this setDatasetId($datasetId)
 * @method int getDatasetId()
 * @method $this setOptionalDims($optionalDims)
 * @method array getOptionalDims()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class ARMSQueryDataSet extends Request
{

}/**
 * @method $this setTraceID($traceID)
 * @method string getTraceID()
 * @method $this setAppType($appType)
 * @method string getAppType()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 */
class GetTrace extends Request
{

}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setAppType($appType)
 * @method string getAppType()
 */
class GetServices extends Request
{

}