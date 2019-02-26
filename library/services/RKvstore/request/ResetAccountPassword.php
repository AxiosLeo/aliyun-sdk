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
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($AccountPassword)
 * @method string getAccountPassword()
 */
final class ResetAccountPassword extends RKvstoreCommon
{
    public $action = 'ResetAccountPassword';
}
