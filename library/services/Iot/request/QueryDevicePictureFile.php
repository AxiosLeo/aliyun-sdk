<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setCaptureId($CaptureId)
 * @method string getCaptureId()
 * @method $this setPictureType($PictureType)
 * @method integer getPictureType()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 */
final class QueryDevicePictureFile extends IotCommon
{
    public $action = 'QueryDevicePictureFile';
}
