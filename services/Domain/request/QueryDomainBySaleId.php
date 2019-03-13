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
 * @method $this setSaleId($SaleId)
 * @method string getSaleId()
 */
final class QueryDomainBySaleId extends DomainCommon
{
    public $action = 'QueryDomainBySaleId';
}
