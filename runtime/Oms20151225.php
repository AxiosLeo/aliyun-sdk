<?php

namespace aliyun\sdk\services\Oms20151225;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20151225
 *
 * @package aliyun\sdk\services\Oms20151225
 * @method GetDomainPart GetDomainPart()
 * @method CheckReadyFlag CheckReadyFlag()
 * @method PutDomainPart PutDomainPart()
 * @method PutMeasureData PutMeasureData()
 * @method GetMeasureData GetMeasureData()
 * @method GetReadyFlag GetReadyFlag()
 * @method DeleteDomainPart DeleteDomainPart()
 * @method PutReadyFlag PutReadyFlag()
 */
class V20151225
{
}

/**
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setPart($part)
 * @method string getPart()
 * @method $this setCompressEnable($compressEnable)
 * @method bool getCompressEnable()
 */
class GetDomainPart extends Request
{

}/**
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setCycles($cycles)
 * @method int getCycles()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 */
class CheckReadyFlag extends Request
{

}/**
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setCompressed($compressed)
 * @method bool getCompressed()
 */
class PutDomainPart extends Request
{

}/**
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setApiType($apiType)
 * @method string getApiType()
 * @method $this setFilter($filter)
 * @method string getFilter()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setCompressed($compressed)
 * @method bool getCompressed()
 */
class PutMeasureData extends Request
{

}/**
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setApiType($apiType)
 * @method string getApiType()
 * @method $this setQueryField($queryField)
 * @method string getQueryField()
 * @method $this setFilter($filter)
 * @method string getFilter()
 * @method $this setMaxResult($maxResult)
 * @method int getMaxResult()
 * @method $this setNextToken($nextToken)
 * @method string getNextToken()
 * @method $this setCompressEnable($compressEnable)
 * @method bool getCompressEnable()
 */
class GetMeasureData extends Request
{

}/**
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setApiType($apiType)
 * @method string getApiType()
 * @method $this setFilter($filter)
 * @method string getFilter()
 * @method $this setMaxResult($maxResult)
 * @method int getMaxResult()
 * @method $this setNextToken($nextToken)
 * @method string getNextToken()
 * @method $this setCompressEnable($compressEnable)
 * @method bool getCompressEnable()
 */
class GetReadyFlag extends Request
{

}/**
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setPart($part)
 * @method string getPart()
 */
class DeleteDomainPart extends Request
{

}/**
 * @method $this setDomainCode($domainCode)
 * @method string getDomainCode()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setApiType($apiType)
 * @method string getApiType()
 * @method $this setData($data)
 * @method string getData()
 * @method $this setCompressed($compressed)
 * @method bool getCompressed()
 */
class PutReadyFlag extends Request
{

}