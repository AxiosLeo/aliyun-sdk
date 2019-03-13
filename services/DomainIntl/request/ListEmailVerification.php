<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setBeginCreateTime($BeginCreateTime)
 * @method integer getBeginCreateTime()
 * @method $this setEndCreateTime($EndCreateTime)
 * @method integer getEndCreateTime()
 * @method $this setEmail($Email)
 * @method string getEmail()
 * @method $this setVerificationStatus($VerificationStatus)
 * @method integer getVerificationStatus()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 */
final class ListEmailVerification extends DomainIntlCommon
{
    public $action = 'ListEmailVerification';
}
