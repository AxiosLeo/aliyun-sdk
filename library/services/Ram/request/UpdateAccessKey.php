<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setUserAccessKeyId($UserAccessKeyId)
 * @method string getUserAccessKeyId()
 * @method $this setStatus($Status)
 * @method string getStatus()
 */
final class UpdateAccessKey extends RamCommon
{
    public $action = 'UpdateAccessKey';
}
