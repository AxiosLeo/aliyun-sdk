<?php
namespace aliyun\sdk\services\CSB\request;

use aliyun\sdk\services\CSB\CSBCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIgnoreDauth($IgnoreDauth)
 * @method boolean getIgnoreDauth()
 * @method $this setForce($Force)
 * @method boolean getForce()
 * @method $this setData($Data)
 * @method string getData()
 */
final class DeleteCredentialsList extends CSBCommon
{
    public $action = 'DeleteCredentialsList';
}
