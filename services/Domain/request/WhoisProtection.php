<?php
namespace aliyun\sdk\services\Domain\request;

use aliyun\sdk\services\Domain\DomainCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setDataSource($DataSource)
 * @method integer getDataSource()
 * @method $this setDataContent($DataContent)
 * @method string getDataContent()
 * @method $this setWhoisProtect($WhoisProtect)
 * @method boolean getWhoisProtect()
 */
final class WhoisProtection extends DomainCommon
{
    public $action = 'WhoisProtection';
}
