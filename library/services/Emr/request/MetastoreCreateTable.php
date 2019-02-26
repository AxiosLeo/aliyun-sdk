<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setTableName($TableName)
 * @method string getTableName()
 * @method $this setLocationUri($LocationUri)
 * @method string getLocationUri()
 * @method $this setFieldDelimiter($FieldDelimiter)
 * @method string getFieldDelimiter()
 * @method $this setColumn($Column)
 * @method array getColumn()
 * @method $this setDatabaseId($DatabaseId)
 * @method string getDatabaseId()
 * @method $this setCreateWith($CreateWith)
 * @method string getCreateWith()
 * @method $this setComment($Comment)
 * @method string getComment()
 * @method $this setCreateSql($CreateSql)
 * @method string getCreateSql()
 * @method $this setPartition($Partition)
 * @method array getPartition()
 */
final class MetastoreCreateTable extends EmrCommon
{
    public $action = 'MetastoreCreateTable';
}
