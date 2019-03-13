<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setInvalidWarningKeepDays($InvalidWarningKeepDays)
 * @method integer getInvalidWarningKeepDays()
 * @method $this setAlertLevels($AlertLevels)
 * @method string getAlertLevels()
 */
final class CreateUserSetting extends AegisCommon
{
    public $action = 'CreateUserSetting';
}
