<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setUserAccessKeyId($UserAccessKeyId)
 * @method string getUserAccessKeyId()
 */
final class DeleteAccessKey extends RamCommon
{
    public $action = 'DeleteAccessKey';
}
