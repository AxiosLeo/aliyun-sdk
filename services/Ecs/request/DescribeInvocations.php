<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInvokeId($InvokeId)
 * @method string getInvokeId()
 * @method $this setCommandId($CommandId)
 * @method string getCommandId()
 * @method $this setCommandName($CommandName)
 * @method string getCommandName()
 * @method $this setCommandType($CommandType)
 * @method string getCommandType()
 * @method $this setTimed($Timed)
 * @method boolean getTimed()
 * @method $this setInvokeStatus($InvokeStatus)
 * @method string getInvokeStatus()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeInvocations extends EcsCommon
{
    public $action = 'DescribeInvocations';
}
