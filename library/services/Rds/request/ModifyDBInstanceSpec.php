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
 * @method $this setDBInstanceClass($DBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($DBInstanceStorage)
 * @method integer getDBInstanceStorage()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setEffectiveTime($EffectiveTime)
 * @method string getEffectiveTime()
 * @method $this setEngineVersion($EngineVersion)
 * @method string getEngineVersion()
 */
final class ModifyDBInstanceSpec extends RdsCommon
{
    public $action = 'ModifyDBInstanceSpec';
}
