<?php
namespace aliyun\sdk\services\Domain\request;

use aliyun\sdk\services\Domain\DomainCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this settype($type)
 * @method string gettype()
 * @method $this setstartDate($startDate)
 * @method string getstartDate()
 * @method $this setendDate($endDate)
 * @method string getendDate()
 * @method $this setpageNum($pageNum)
 * @method integer getpageNum()
 * @method $this setpageSize($pageSize)
 * @method integer getpageSize()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 */
final class OSuborderDomain extends DomainCommon
{
    public $action = 'OSuborderDomain';
}
