<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setApConfigId($ApConfigId)
 * @method integer getApConfigId()
 * @method $this setJsonData($JsonData)
 * @method string getJsonData()
 */
final class SaveApScanConfig extends CloudwfCommon
{
    public $action = 'SaveApScanConfig';
}
