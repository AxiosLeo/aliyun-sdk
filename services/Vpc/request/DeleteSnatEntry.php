<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSnatTableId($SnatTableId)
 * @method string getSnatTableId()
 * @method $this setSnatEntryId($SnatEntryId)
 * @method string getSnatEntryId()
 */
final class DeleteSnatEntry extends VpcCommon
{
    public $action = 'DeleteSnatEntry';
}
