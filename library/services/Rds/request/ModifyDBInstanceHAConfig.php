<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSyncMode($SyncMode)
 * @method string getSyncMode()
 * @method $this setHAMode($HAMode)
 * @method string getHAMode()
 * @method $this setDbInstanceId($DbInstanceId)
 * @method string getDbInstanceId()
 */
final class ModifyDBInstanceHAConfig extends RdsCommon
{
    public $action = 'ModifyDBInstanceHAConfig';
}
