<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setSid($Sid)
 * @method integer getSid()
 * @method $this setWarn($Warn)
 * @method integer getWarn()
 * @method $this setWarnEmail($WarnEmail)
 * @method string getWarnEmail()
 * @method $this setWarnPhone($WarnPhone)
 * @method string getWarnPhone()
 * @method $this setCloseWarn($CloseWarn)
 * @method integer getCloseWarn()
 */
final class ShopDataAlarm extends CloudwfCommon
{
    public $action = 'ShopDataAlarm';
}
