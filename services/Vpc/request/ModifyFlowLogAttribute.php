<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setFlowLogId($FlowLogId)
 * @method string getFlowLogId()
 * @method $this setFlowLogName($FlowLogName)
 * @method string getFlowLogName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyFlowLogAttribute extends VpcCommon
{
    public $action = 'ModifyFlowLogAttribute';
}
