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
 * @method $this setAccountPrivilege($AccountPrivilege)
 * @method string getAccountPrivilege()
 * @method $this setAccountPassword($AccountPassword)
 * @method string getAccountPassword()
 * @method $this setAccountDescription($AccountDescription)
 * @method string getAccountDescription()
 * @method $this setAccountType($AccountType)
 * @method string getAccountType()
 */
final class CreateAccount extends RKvstoreCommon
{
    public $action = 'CreateAccount';
}
