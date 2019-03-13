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
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setDatabaseId($DatabaseId)
 * @method string getDatabaseId()
 * @method $this setTableId($TableId)
 * @method string getTableId()
 * @method $this setTableName($TableName)
 * @method string getTableName()
 * @method $this setFuzzyTableName($FuzzyTableName)
 * @method string getFuzzyTableName()
 */
final class MetastoreListTables extends EmrCommon
{
    public $action = 'MetastoreListTables';
}
