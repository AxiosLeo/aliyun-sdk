<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInvokeId($InvokeId)
 * @method string getInvokeId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setCommandId($CommandId)
 * @method string getCommandId()
 * @method $this setInvokeRecordStatus($InvokeRecordStatus)
 * @method string getInvokeRecordStatus()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeInvocationResults extends EcsCommon
{
    public $action = 'DescribeInvocationResults';
}
