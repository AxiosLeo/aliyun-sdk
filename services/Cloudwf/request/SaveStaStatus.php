<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class SaveStaStatus extends CloudwfCommon
{
    public $action = 'SaveStaStatus';
}
