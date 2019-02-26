<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setGroupId($GroupId)
 * @method string getGroupId()
 */
final class AddDomain extends AlidnsCommon
{
    public $action = 'AddDomain';
}
