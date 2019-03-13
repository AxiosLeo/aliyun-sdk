<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setUserAccessKeyId($UserAccessKeyId)
 * @method string getUserAccessKeyId()
 */
final class GetAccessKeyLastUsed extends RamCommon
{
    public $action = 'GetAccessKeyLastUsed';
}
