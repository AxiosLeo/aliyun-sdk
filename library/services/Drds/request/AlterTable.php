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
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class AlterTable extends DrdsCommon
{
    public $action = 'AlterTable';
}
