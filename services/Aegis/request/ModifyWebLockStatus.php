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
 * @method $this setStatus($Status)
 * @method string getStatus()
 */
final class ModifyWebLockStatus extends AegisCommon
{
    public $action = 'ModifyWebLockStatus';
}
