<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setCollation($Collation)
 * @method string getCollation()
 * @method $this setTimezone($Timezone)
 * @method string getTimezone()
 */
final class ModifyCollationTimeZone extends RdsCommon
{
    public $action = 'ModifyCollationTimeZone';
}
