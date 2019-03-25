<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setPostalCode($PostalCode)
 * @method string getPostalCode()
 * @method $this setAddress($Address)
 * @method string getAddress()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setCity($City)
 * @method string getCity()
 * @method $this setRegistrantOrganization($RegistrantOrganization)
 * @method string getRegistrantOrganization()
 * @method $this setRegistrantName($RegistrantName)
 * @method string getRegistrantName()
 * @method $this setProvince($Province)
 * @method string getProvince()
 * @method $this setEmail($Email)
 * @method string getEmail()
 * @method $this setCountry($Country)
 * @method string getCountry()
 * @method $this setTelArea($TelArea)
 * @method string getTelArea()
 * @method $this setTelephone($Telephone)
 * @method string getTelephone()
 * @method $this setTelExt($TelExt)
 * @method string getTelExt()
 * @method $this setRegistrantType($RegistrantType)
 * @method string getRegistrantType()
 * @method $this setDomainName($DomainName)
 * @method array getDomainName()
 * @method $this setIdentityCredentialType($IdentityCredentialType)
 * @method string getIdentityCredentialType()
 * @method $this setIdentityCredentialNo($IdentityCredentialNo)
 * @method string getIdentityCredentialNo()
 * @method $this setIdentityCredential($IdentityCredential)
 * @method string getIdentityCredential()
 * @method $this setTransferOutProhibited($TransferOutProhibited)
 * @method boolean getTransferOutProhibited()
 */
final class SaveTaskForUpdatingRegistrantInfoByIdentityCredential extends DomainIntlCommon
{
    public $action = 'SaveTaskForUpdatingRegistrantInfoByIdentityCredential';
}
