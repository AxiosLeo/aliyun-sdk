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
 * @method $this setParameters($Parameters)
 * @method string getParameters()
 * @method $this setForcerestart($Forcerestart)
 * @method boolean getForcerestart()
 */
final class ModifyParameter extends RdsCommon
{
    public $action = 'ModifyParameter';
}
