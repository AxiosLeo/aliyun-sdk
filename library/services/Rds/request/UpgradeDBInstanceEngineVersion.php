<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setEngineVersion($EngineVersion)
 * @method string getEngineVersion()
 * @method $this setEffectiveTime($EffectiveTime)
 * @method string getEffectiveTime()
 */
final class UpgradeDBInstanceEngineVersion extends RdsCommon
{
    public $action = 'UpgradeDBInstanceEngineVersion';
}
