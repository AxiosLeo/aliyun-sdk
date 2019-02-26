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
 * @method $this setPeriod($Period)
 * @method string getPeriod()
 * @method $this setAutoPay($AutoPay)
 * @method string getAutoPay()
 * @method $this setBusinessInfo($BusinessInfo)
 * @method string getBusinessInfo()
 */
final class RenewInstance extends RdsCommon
{
    public $action = 'RenewInstance';
}
