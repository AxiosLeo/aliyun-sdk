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
 * @method $this setSnatIp($SnatIp)
 * @method string getSnatIp()
 * @method $this setSnatEntryName($SnatEntryName)
 * @method string getSnatEntryName()
 */
final class ModifySnatEntry extends VpcCommon
{
    public $action = 'ModifySnatEntry';
}
