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
 * @method $this setStatuses($Statuses)
 * @method string getStatuses()
 * @method $this setTypes($Types)
 * @method string getTypes()
 * @method $this setTag($Tag)
 * @method string getTag()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 */
final class DescribeLoginLogs extends AegisCommon
{
    public $action = 'DescribeLoginLogs';
}
