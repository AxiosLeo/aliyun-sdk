<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setUserId($UserId)
 * @method integer getUserId()
 * @method $this setAutoInstall($AutoInstall)
 * @method boolean getAutoInstall()
 * @method $this setEnableInstallAgentNewECS($EnableInstallAgentNewECS)
 * @method boolean getEnableInstallAgentNewECS()
 * @method $this setEnableActiveAlert($EnableActiveAlert)
 * @method string getEnableActiveAlert()
 */
final class ProfileSet extends CmsCommon
{
    public $action = 'ProfileSet';
}
