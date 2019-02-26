<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setParentApgroupId($ParentApgroupId)
 * @method integer getParentApgroupId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class AddApgroupConfig extends CloudwfCommon
{
    public $action = 'AddApgroupConfig';
}
