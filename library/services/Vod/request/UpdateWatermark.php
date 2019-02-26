<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setWatermarkId($WatermarkId)
 * @method string getWatermarkId()
 * @method $this setWatermarkConfig($WatermarkConfig)
 * @method string getWatermarkConfig()
 */
final class UpdateWatermark extends VodCommon
{
    public $action = 'UpdateWatermark';
}
