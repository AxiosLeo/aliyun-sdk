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
 * @method $this setUuids($Uuids)
 * @method string getUuids()
 * @method $this setStatisticsColumn($StatisticsColumn)
 * @method string getStatisticsColumn()
 */
final class DescribeSasAssetStatistics extends AegisCommon
{
    public $action = 'DescribeSasAssetStatistics';
}
