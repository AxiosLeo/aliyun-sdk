<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionString($ConnectionString)
 * @method string getConnectionString()
 * @method $this setClassicExpendExpiredDays($ClassicExpendExpiredDays)
 * @method integer getClassicExpendExpiredDays()
 */
final class ModifyDBInstanceNetExpireTime extends DdsCommon
{
    public $action = 'ModifyDBInstanceNetExpireTime';
}
