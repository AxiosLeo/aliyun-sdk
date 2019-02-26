<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMapId($MapId)
 * @method integer getMapId()
 * @method $this setApAssetId($ApAssetId)
 * @method integer getApAssetId()
 */
final class DelApPosition extends CloudwfCommon
{
    public $action = 'DelApPosition';
}
