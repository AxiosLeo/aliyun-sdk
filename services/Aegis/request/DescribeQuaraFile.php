<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 */
final class DescribeQuaraFile extends AegisCommon
{
    public $action = 'DescribeQuaraFile';
}
