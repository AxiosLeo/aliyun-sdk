<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setAlertName($AlertName)
 * @method string getAlertName()
 * @method $this setPolicyType($PolicyType)
 * @method string getPolicyType()
 * @method $this setId($Id)
 * @method string getId()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setDimensions($Dimensions)
 * @method string getDimensions()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 */
final class ListNotifyPolicy extends CmsCommon
{
    public $action = 'ListNotifyPolicy';
}
