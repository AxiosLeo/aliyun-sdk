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
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setAccountPrivilege($AccountPrivilege)
 * @method string getAccountPrivilege()
 */
final class GrantAccountPrivilege extends RKvstoreCommon
{
    public $action = 'GrantAccountPrivilege';
}
