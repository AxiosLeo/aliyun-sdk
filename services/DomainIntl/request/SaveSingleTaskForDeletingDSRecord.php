<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setKeyTag($KeyTag)
 * @method integer getKeyTag()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 */
final class SaveSingleTaskForDeletingDSRecord extends DomainIntlCommon
{
    public $action = 'SaveSingleTaskForDeletingDSRecord';
}
