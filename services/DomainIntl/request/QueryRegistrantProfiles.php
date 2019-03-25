<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setRegistrantOrganization($RegistrantOrganization)
 * @method string getRegistrantOrganization()
 * @method $this setRegistrantProfileId($RegistrantProfileId)
 * @method integer getRegistrantProfileId()
 * @method $this setDefaultRegistrantProfile($DefaultRegistrantProfile)
 * @method boolean getDefaultRegistrantProfile()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setEmail($Email)
 * @method string getEmail()
 * @method $this setRegistrantProfileType($RegistrantProfileType)
 * @method string getRegistrantProfileType()
 * @method $this setRegistrantType($RegistrantType)
 * @method string getRegistrantType()
 * @method $this setRealNameStatus($RealNameStatus)
 * @method string getRealNameStatus()
 */
final class QueryRegistrantProfiles extends DomainIntlCommon
{
    public $action = 'QueryRegistrantProfiles';
}
