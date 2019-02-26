<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setExportId($ExportId)
 * @method integer getExportId()
 */
final class DescribeSuspiciousExportInfo extends AegisCommon
{
    public $action = 'DescribeSuspiciousExportInfo';
}
