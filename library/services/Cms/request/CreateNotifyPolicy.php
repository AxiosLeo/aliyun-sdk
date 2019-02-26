<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setDimensions($Dimensions)
 * @method string getDimensions()
 * @method $this setPolicyType($PolicyType)
 * @method string getPolicyType()
 * @method $this setStartTime($StartTime)
 * @method integer getStartTime()
 * @method $this setEndTime($EndTime)
 * @method integer getEndTime()
 * @method $this setAlertName($AlertName)
 * @method string getAlertName()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class CreateNotifyPolicy extends CmsCommon
{
    public $action = 'CreateNotifyPolicy';
}
