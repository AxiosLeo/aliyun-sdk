<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setPageIndex($PageIndex)
 * @method integer getPageIndex()
 * @method $this setLength($Length)
 * @method integer getLength()
 */
final class ListUpgradeImg extends CloudwfCommon
{
    public $action = 'ListUpgradeImg';
}
