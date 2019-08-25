<?php

namespace aliyun\sdk\services\ImageSearch20180111;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20180111
 *
 * @package aliyun\sdk\services\ImageSearch20180111
 * @method ClearInstance ClearInstance()
 * @method IncreaseInstance IncreaseInstance()
 * @method CountInstance CountInstance()
 * @method ListInstance ListInstance()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeInstance DescribeInstance()
 * @method ListIncrement ListIncrement()
 * @method InitInstance InitInstance()
 */
class V20180111
{
}

/**
 * @method $this setInstanceId($instanceId)
 * @method int getInstanceId()
 */
class ClearInstance extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method int getInstanceId()
 * @method $this setArn($arn)
 * @method string getArn()
 * @method $this setBucketName($bucketName)
 * @method string getBucketName()
 * @method $this setPath($path)
 * @method string getPath()
 * @method $this setTaskType($taskType)
 * @method int getTaskType()
 */
class IncreaseInstance extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method int getInstanceId()
 */
class CountInstance extends Request
{
}/**
 * @method $this setServiceType($serviceType)
 * @method int getServiceType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class ListInstance extends Request
{
}/**
 */
class DescribeRegions extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method int getInstanceId()
 */
class DescribeInstance extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method int getInstanceId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setTaskType($taskType)
 * @method int getTaskType()
 */
class ListIncrement extends Request
{
}/**
 * @method $this setInstanceId($instanceId)
 * @method int getInstanceId()
 */
class InitInstance extends Request
{
}
