<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setId($Id)
 * @method integer getId()
 * @method $this setTempName($TempName)
 * @method string getTempName()
 * @method $this setTempDesc($TempDesc)
 * @method string getTempDesc()
 * @method $this setTempType($TempType)
 * @method integer getTempType()
 * @method $this setTempPermission($TempPermission)
 * @method string getTempPermission()
 */
final class SavePageConfigTemplate extends CloudwfCommon
{
    public $action = 'SavePageConfigTemplate';
}
