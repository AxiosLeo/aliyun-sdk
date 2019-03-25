<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setScreenTitle($ScreenTitle)
 * @method string getScreenTitle()
 * @method $this setScreenIdSetting($ScreenIdSetting)
 * @method string getScreenIdSetting()
 */
final class ModifyScreenSetting extends AegisCommon
{
    public $action = 'ModifyScreenSetting';
}
