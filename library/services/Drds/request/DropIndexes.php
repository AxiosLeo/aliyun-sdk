<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setDrdsInstanceId($DrdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setTable($Table)
 * @method string getTable()
 * @method $this setIndexes($Indexes)
 * @method string getIndexes()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class DropIndexes extends DrdsCommon
{
    public $action = 'DropIndexes';
}
