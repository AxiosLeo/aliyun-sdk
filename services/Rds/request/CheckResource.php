<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setEngine($Engine)
 * @method string getEngine()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setEngineVersion($EngineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($DBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setDBInstanceUseType($DBInstanceUseType)
 * @method string getDBInstanceUseType()
 * @method $this setSpecifyCount($SpecifyCount)
 * @method string getSpecifyCount()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class CheckResource extends RdsCommon
{
    public $action = 'CheckResource';
}
