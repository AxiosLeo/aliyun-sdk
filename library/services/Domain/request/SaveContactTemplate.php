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
 * @method $this setContactTemplateId($ContactTemplateId)
 * @method integer getContactTemplateId()
 * @method $this setDefaultTemplate($DefaultTemplate)
 * @method boolean getDefaultTemplate()
 * @method $this setCCity($CCity)
 * @method string getCCity()
 * @method $this setCCompany($CCompany)
 * @method string getCCompany()
 * @method $this setCCountry($CCountry)
 * @method string getCCountry()
 * @method $this setCName($CName)
 * @method string getCName()
 * @method $this setCProvince($CProvince)
 * @method string getCProvince()
 * @method $this setCVenu($CVenu)
 * @method string getCVenu()
 * @method $this setECity($ECity)
 * @method string getECity()
 * @method $this setECompany($ECompany)
 * @method string getECompany()
 * @method $this setEName($EName)
 * @method string getEName()
 * @method $this setEProvince($EProvince)
 * @method string getEProvince()
 * @method $this setEVenu($EVenu)
 * @method string getEVenu()
 * @method $this setEmail($Email)
 * @method string getEmail()
 * @method $this setPostalCode($PostalCode)
 * @method string getPostalCode()
 * @method $this setTelArea($TelArea)
 * @method string getTelArea()
 * @method $this setTelMain($TelMain)
 * @method string getTelMain()
 * @method $this setTelExt($TelExt)
 * @method string getTelExt()
 * @method $this setRegType($RegType)
 * @method string getRegType()
 */
final class SaveContactTemplate extends DomainCommon
{
    public $action = 'SaveContactTemplate';
}
