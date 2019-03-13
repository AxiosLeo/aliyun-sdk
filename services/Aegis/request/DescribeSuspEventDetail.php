<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setSuspiciousEventId($SuspiciousEventId)
 * @method integer getSuspiciousEventId()
 * @method $this setFrom($From)
 * @method string getFrom()
 */
final class DescribeSuspEventDetail extends AegisCommon
{
    public $action = 'DescribeSuspEventDetail';
}
