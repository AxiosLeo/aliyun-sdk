<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setForwardTableId($ForwardTableId)
 * @method string getForwardTableId()
 * @method $this setForwardEntryId($ForwardEntryId)
 * @method string getForwardEntryId()
 */
final class DeleteForwardEntry extends VpcCommon
{
    public $action = 'DeleteForwardEntry';
}
