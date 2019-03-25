<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSnatTableId($SnatTableId)
 * @method string getSnatTableId()
 * @method $this setSourceVSwitchId($SourceVSwitchId)
 * @method string getSourceVSwitchId()
 * @method $this setSourceCIDR($SourceCIDR)
 * @method string getSourceCIDR()
 * @method $this setSnatIp($SnatIp)
 * @method string getSnatIp()
 * @method $this setSnatEntryName($SnatEntryName)
 * @method string getSnatEntryName()
 */
final class CreateSnatEntry extends VpcCommon
{
    public $action = 'CreateSnatEntry';
}
