<?php

namespace aliyun\sdk\services\ARMS20190219;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20190219
 *
 * @package aliyun\sdk\services\ARMS20190219
 * @method SearchTraces SearchTraces()
 * @method GetTagVal GetTagVal()
 * @method MetricQuery MetricQuery()
 * @method ARMSQueryDataSet ARMSQueryDataSet()
 * @method GetSpanNames GetSpanNames()
 * @method GetTrace GetTrace()
 * @method GetTagKey GetTagKey()
 * @method GetServices GetServices()
 */
class V20190219
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
 * @method $this setTag($tag)
 * @method array getTag()
 */
class SearchTraces extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setSpanName($spanName)
 * @method string getSpanName()
 * @method $this setTagKey($tagKey)
 * @method string getTagKey()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class GetTagVal extends Request
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
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class GetSpanNames extends Request
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
 * @method $this setServiceName($serviceName)
 * @method string getServiceName()
 * @method $this setSpanName($spanName)
 * @method string getSpanName()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class GetTagKey extends Request
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
