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
 * @method $this setFilterConditions($FilterConditions)
 * @method string getFilterConditions()
 * @method $this setLang($Lang)
 * @method string getLang()
 */
final class DescribeAssetList extends AegisCommon
{
    public $action = 'DescribeAssetList';
}
