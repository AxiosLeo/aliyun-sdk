<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setRegistrantName($RegistrantName)
 * @method string getRegistrantName()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setCity($City)
 * @method string getCity()
 * @method $this setRegistrantOrganization($RegistrantOrganization)
 * @method string getRegistrantOrganization()
 * @method $this setCountry($Country)
 * @method string getCountry()
 * @method $this setProvince($Province)
 * @method string getProvince()
 * @method $this setAddress($Address)
 * @method string getAddress()
 * @method $this setEmail($Email)
 * @method string getEmail()
 * @method $this setPostalCode($PostalCode)
 * @method string getPostalCode()
 * @method $this setTelArea($TelArea)
 * @method string getTelArea()
 * @method $this setTelephone($Telephone)
 * @method string getTelephone()
 * @method $this setTelExt($TelExt)
 * @method string getTelExt()
 */
final class VerifyContactField extends DomainIntlCommon
{
    public $action = 'VerifyContactField';
}
