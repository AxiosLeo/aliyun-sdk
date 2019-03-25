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
 * @method $this setRiskId($RiskId)
 * @method integer getRiskId()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 */
final class DescribeCheckWarnings extends AegisCommon
{
    public $action = 'DescribeCheckWarnings';
}
