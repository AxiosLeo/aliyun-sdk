<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setExportId($ExportId)
 * @method integer getExportId()
 * @method $this setFrom($From)
 * @method string getFrom()
 */
final class DescribeSuspEventExportInfo extends AegisCommon
{
    public $action = 'DescribeSuspEventExportInfo';
}
