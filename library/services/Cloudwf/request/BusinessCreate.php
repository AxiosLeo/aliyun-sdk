<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setBusinessAddress($BusinessAddress)
 * @method string getBusinessAddress()
 * @method $this setBusinessCity($BusinessCity)
 * @method string getBusinessCity()
 * @method $this setBusinessManager($BusinessManager)
 * @method string getBusinessManager()
 * @method $this setBusinessName($BusinessName)
 * @method string getBusinessName()
 * @method $this setBusinessProvince($BusinessProvince)
 * @method string getBusinessProvince()
 * @method $this setBusinessSubtype($BusinessSubtype)
 * @method integer getBusinessSubtype()
 * @method $this setBusinessTel($BusinessTel)
 * @method string getBusinessTel()
 * @method $this setBusinessTopType($BusinessTopType)
 * @method integer getBusinessTopType()
 * @method $this setBusinessType($BusinessType)
 * @method integer getBusinessType()
 * @method $this setCombo($Combo)
 * @method string getCombo()
 * @method $this setWarn($Warn)
 * @method integer getWarn()
 * @method $this setWarnEmail($WarnEmail)
 * @method string getWarnEmail()
 */
final class BusinessCreate extends CloudwfCommon
{
    public $action = 'BusinessCreate';
}
