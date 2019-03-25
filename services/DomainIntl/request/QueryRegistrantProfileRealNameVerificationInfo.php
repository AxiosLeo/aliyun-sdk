<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setRegistrantProfileId($RegistrantProfileId)
 * @method integer getRegistrantProfileId()
 * @method $this setFetchImage($FetchImage)
 * @method boolean getFetchImage()
 */
final class QueryRegistrantProfileRealNameVerificationInfo extends DomainIntlCommon
{
    public $action = 'QueryRegistrantProfileRealNameVerificationInfo';
}
