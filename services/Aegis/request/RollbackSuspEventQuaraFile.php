<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setQuaraFileId($QuaraFileId)
 * @method integer getQuaraFileId()
 * @method $this setFrom($From)
 * @method string getFrom()
 */
final class RollbackSuspEventQuaraFile extends AegisCommon
{
    public $action = 'RollbackSuspEventQuaraFile';
}
