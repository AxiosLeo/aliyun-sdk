<?php
namespace aliyun\sdk\services\Agency\request;

use aliyun\sdk\services\Agency\AgencyCommon;

/**
 * @method $this setUid($Uid)
 * @method integer getUid()
 * @method $this setWarningValue($WarningValue)
 * @method string getWarningValue()
 */
final class SetWarningThreshold extends AgencyCommon
{
    public $action = 'SetWarningThreshold';
}
