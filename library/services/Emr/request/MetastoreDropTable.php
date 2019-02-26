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
 * @method $this setDatabaseId($DatabaseId)
 * @method string getDatabaseId()
 * @method $this setTableId($TableId)
 * @method string getTableId()
 */
final class MetastoreDropTable extends EmrCommon
{
    public $action = 'MetastoreDropTable';
}
