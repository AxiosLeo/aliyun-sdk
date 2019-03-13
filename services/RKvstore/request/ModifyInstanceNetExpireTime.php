<?php
namespace aliyun\sdk\services\RKvstore\request;

use aliyun\sdk\services\RKvstore\RKvstoreCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setConnectionString($ConnectionString)
 * @method string getConnectionString()
 * @method $this setClassicExpiredDays($ClassicExpiredDays)
 * @method integer getClassicExpiredDays()
 */
final class ModifyInstanceNetExpireTime extends RKvstoreCommon
{
    public $action = 'ModifyInstanceNetExpireTime';
}
