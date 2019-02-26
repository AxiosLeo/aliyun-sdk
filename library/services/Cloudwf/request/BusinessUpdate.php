<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setBid($Bid)
 * @method integer getBid()
 * @method $this setBusinessProvince($BusinessProvince)
 * @method string getBusinessProvince()
 * @method $this setBusinessCity($BusinessCity)
 * @method string getBusinessCity()
 * @method $this setBusinessAddress($BusinessAddress)
 * @method string getBusinessAddress()
 * @method $this setBusinessManager($BusinessManager)
 * @method string getBusinessManager()
 * @method $this setWarn($Warn)
 * @method integer getWarn()
 * @method $this setWarnEmail($WarnEmail)
 * @method string getWarnEmail()
 */
final class BusinessUpdate extends CloudwfCommon
{
    public $action = 'BusinessUpdate';
}
