<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setDrdsInstanceId($DrdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setDdlSql($DdlSql)
 * @method string getDdlSql()
 * @method $this setShardType($ShardType)
 * @method string getShardType()
 * @method $this setShardKey($ShardKey)
 * @method string getShardKey()
 * @method $this setAllowFullTableScan($AllowFullTableScan)
 * @method string getAllowFullTableScan()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class CreateTable extends DrdsCommon
{
    public $action = 'CreateTable';
}
