<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDuration($Duration)
 * @method string getDuration()
 * @method $this setAutoRenew($AutoRenew)
 * @method string getAutoRenew()
 */
final class ModifyInstanceAutoRenewalAttribute extends RdsCommon
{
    public $action = 'ModifyInstanceAutoRenewalAttribute';
}
