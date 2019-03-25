<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDataSourceId($DataSourceId)
 * @method string getDataSourceId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setTableName($TableName)
 * @method string getTableName()
 */
final class DescribeDataSourceSchemaTable extends EmrCommon
{
    public $action = 'DescribeDataSourceSchemaTable';
}
