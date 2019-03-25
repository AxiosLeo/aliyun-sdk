<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setCheckWarningId($CheckWarningId)
 * @method integer getCheckWarningId()
 */
final class DescribeCheckWarningDetail extends AegisCommon
{
    public $action = 'DescribeCheckWarningDetail';
}
