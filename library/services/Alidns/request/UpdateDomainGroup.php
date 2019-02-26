<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 */
final class UpdateDomainGroup extends AlidnsCommon
{
    public $action = 'UpdateDomainGroup';
}
