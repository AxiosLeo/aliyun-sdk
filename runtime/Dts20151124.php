<?php

namespace aliyun\sdk\services\Dts20151124;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20151124
 *
 * @package aliyun\sdk\services\Dts20151124
 * @method DeleteSynchronousJob DeleteSynchronousJob()
 * @method StartSynchronousJob StartSynchronousJob()
 * @method DescribeSynchronousJobDetails DescribeSynchronousJobDetails()
 * @method DescribeSynchronousJobList DescribeSynchronousJobList()
 * @method CreateSynchronousJob CreateSynchronousJob()
 * @method SuspendSynchronousJob SuspendSynchronousJob()
 * @method DescribeSynchronousJobConfiguration DescribeSynchronousJobConfiguration()
 */
class V20151124
{
}

/**
 * @method $this setSynchronousJobId($synchronousJobId)
 * @method string getSynchronousJobId()
 */
class DeleteSynchronousJob extends Request
{
}/**
 * @method $this setSynchronousJobId($synchronousJobId)
 * @method string getSynchronousJobId()
 */
class StartSynchronousJob extends Request
{
}/**
 * @method $this setSynchronousJobId($synchronousJobId)
 * @method string getSynchronousJobId()
 */
class DescribeSynchronousJobDetails extends Request
{
}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSynchronousJobName($synchronousJobName)
 * @method string getSynchronousJobName()
 */
class DescribeSynchronousJobList extends Request
{
}/**
 * @method $this setSynchronousJobName($synchronousJobName)
 * @method string getSynchronousJobName()
 * @method $this setSourceInstanceId($sourceInstanceId)
 * @method string getSourceInstanceId()
 * @method $this setDestinationInstanceId($destinationInstanceId)
 * @method string getDestinationInstanceId()
 * @method $this setSynchronousObjectList($synchronousObjectList)
 * @method string getSynchronousObjectList()
 * @method $this setStructureIntialization($structureIntialization)
 * @method bool getStructureIntialization()
 * @method $this setFullDataIntialization($fullDataIntialization)
 * @method bool getFullDataIntialization()
 * @method $this setSynchronousSpeedLimit($synchronousSpeedLimit)
 * @method string getSynchronousSpeedLimit()
 */
class CreateSynchronousJob extends Request
{
}/**
 * @method $this setSynchronousJobId($synchronousJobId)
 * @method string getSynchronousJobId()
 */
class SuspendSynchronousJob extends Request
{
}/**
 * @method $this setSynchronousJobId($synchronousJobId)
 * @method string getSynchronousJobId()
 */
class DescribeSynchronousJobConfiguration extends Request
{
}
