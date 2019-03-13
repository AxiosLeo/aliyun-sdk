<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setTopology($Topology)
 * @method string getTopology()
 * @method $this setTriggerMode($TriggerMode)
 * @method string getTriggerMode()
 */
final class AddMediaWorkflow extends MtsCommon
{
    public $action = 'AddMediaWorkflow';
}
