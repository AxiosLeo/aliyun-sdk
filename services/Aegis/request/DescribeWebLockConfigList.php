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
 */
final class DescribeWebLockConfigList extends AegisCommon
{
    public $action = 'DescribeWebLockConfigList';
}
