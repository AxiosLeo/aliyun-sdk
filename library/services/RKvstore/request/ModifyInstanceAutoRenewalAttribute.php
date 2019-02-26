<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDuration($Duration)
 * @method string getDuration()
 * @method $this setAutoRenew($AutoRenew)
 * @method string getAutoRenew()
 */
final class ModifyInstanceAutoRenewalAttribute extends RKvstoreCommon
{
    public $action = 'ModifyInstanceAutoRenewalAttribute';
}
