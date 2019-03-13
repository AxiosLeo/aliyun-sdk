<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDuration($Duration)
 * @method string getDuration()
 * @method $this setAutoRenew($AutoRenew)
 * @method string getAutoRenew()
 */
final class ModifyInstanceAutoRenewalAttribute extends DdsCommon
{
    public $action = 'ModifyInstanceAutoRenewalAttribute';
}
