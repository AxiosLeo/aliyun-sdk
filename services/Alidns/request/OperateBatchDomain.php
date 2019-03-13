<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setDomainRecordInfo($DomainRecordInfo)
 * @method array getDomainRecordInfo()
 */
final class OperateBatchDomain extends AlidnsCommon
{
    public $action = 'OperateBatchDomain';
}
