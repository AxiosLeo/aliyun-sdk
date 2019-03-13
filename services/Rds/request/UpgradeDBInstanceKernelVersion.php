<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setUpgradeTime($UpgradeTime)
 * @method string getUpgradeTime()
 * @method $this setSwitchTime($SwitchTime)
 * @method string getSwitchTime()
 */
final class UpgradeDBInstanceKernelVersion extends RdsCommon
{
    public $action = 'UpgradeDBInstanceKernelVersion';
}
