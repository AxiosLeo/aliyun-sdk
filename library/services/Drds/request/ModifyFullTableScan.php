<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setDrdsInstanceId($DrdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setTableNames($TableNames)
 * @method string getTableNames()
 * @method $this setFullTableScan($FullTableScan)
 * @method boolean getFullTableScan()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class ModifyFullTableScan extends DrdsCommon
{
    public $action = 'ModifyFullTableScan';
}
