<?php
namespace aliyun\sdk\services\Drds\request;

use aliyun\sdk\services\Drds\DrdsCommon;

/**
 * @method $this setDrdsInstanceId($DrdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($DbName)
 * @method string getDbName()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setOriginPassword($OriginPassword)
 * @method string getOriginPassword()
 * @method $this setNewPasswd($NewPasswd)
 * @method string getNewPasswd()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class ModifyReadOnlyAccountPassword extends DrdsCommon
{
    public $action = 'ModifyReadOnlyAccountPassword';
}
