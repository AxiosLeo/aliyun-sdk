<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setFrom($From)
 * @method string getFrom()
 * @method $this setProject($Project)
 * @method string getProject()
 * @method $this setLogStore($LogStore)
 * @method string getLogStore()
 * @method $this setStatus($Status)
 * @method string getStatus()
 */
final class ModifyLogMetaStatus extends AegisCommon
{
    public $action = 'ModifyLogMetaStatus';
}
