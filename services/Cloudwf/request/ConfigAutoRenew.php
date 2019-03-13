<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setApList($ApList)
 * @method array getApList()
 * @method $this setAutoRenew($AutoRenew)
 * @method boolean getAutoRenew()
 * @method $this setMonths($Months)
 * @method integer getMonths()
 * @method $this setOffsetDays($OffsetDays)
 * @method integer getOffsetDays()
 */
final class ConfigAutoRenew extends CloudwfCommon
{
    public $action = 'ConfigAutoRenew';
}
