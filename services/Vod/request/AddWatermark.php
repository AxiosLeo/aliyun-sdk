<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setWatermarkConfig($WatermarkConfig)
 * @method string getWatermarkConfig()
 * @method $this setFileUrl($FileUrl)
 * @method string getFileUrl()
 */
final class AddWatermark extends VodCommon
{
    public $action = 'AddWatermark';
}
