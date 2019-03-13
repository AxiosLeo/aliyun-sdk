<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setDatabaseId($DatabaseId)
 * @method string getDatabaseId()
 * @method $this setTableId($TableId)
 * @method string getTableId()
 */
final class MetastoreListTablePartition extends EmrCommon
{
    public $action = 'MetastoreListTablePartition';
}
