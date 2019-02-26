<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DeleteVSwitch extends VpcCommon
{
    public $action = 'DeleteVSwitch';
}
