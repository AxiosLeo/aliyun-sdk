<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSnatTableId($SnatTableId)
 * @method string getSnatTableId()
 * @method $this setSnatEntryId($SnatEntryId)
 * @method string getSnatEntryId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeSnatTableEntries extends VpcCommon
{
    public $action = 'DescribeSnatTableEntries';
}
