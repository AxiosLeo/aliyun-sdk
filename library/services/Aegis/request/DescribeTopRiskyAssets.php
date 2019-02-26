<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeTopRiskyAssets extends AegisCommon
{
    public $action = 'DescribeTopRiskyAssets';
}
