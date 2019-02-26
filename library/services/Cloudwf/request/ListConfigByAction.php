<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setActionName($ActionName)
 * @method string getActionName()
 * @method $this setLimit($Limit)
 * @method integer getLimit()
 * @method $this setSearchName($SearchName)
 * @method string getSearchName()
 */
final class ListConfigByAction extends CloudwfCommon
{
    public $action = 'ListConfigByAction';
}
