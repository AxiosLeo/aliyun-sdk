<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setSourceIp($SourceIp)
 * @method string getSourceIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setCurrentPage($CurrentPage)
 * @method integer getCurrentPage()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeWebLockBindList extends AegisCommon
{
    public $action = 'DescribeWebLockBindList';
}
