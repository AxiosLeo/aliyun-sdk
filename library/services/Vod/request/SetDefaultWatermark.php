<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setWatermarkId($WatermarkId)
 * @method string getWatermarkId()
 */
final class SetDefaultWatermark extends VodCommon
{
    public $action = 'SetDefaultWatermark';
}
