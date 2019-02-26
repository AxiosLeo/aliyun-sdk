<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUuid($Uuid)
 * @method string getUuid()
 * @method $this setDir($Dir)
 * @method string getDir()
 * @method $this setExclusiveDir($ExclusiveDir)
 * @method string getExclusiveDir()
 * @method $this setExclusiveFileType($ExclusiveFileType)
 * @method string getExclusiveFileType()
 * @method $this setLocalBackupDir($LocalBackupDir)
 * @method string getLocalBackupDir()
 */
final class ModifyWebLockCreateConfig extends AegisCommon
{
    public $action = 'ModifyWebLockCreateConfig';
}
