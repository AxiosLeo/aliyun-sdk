<?php
namespace aliyun\sdk\services\Cloudwf\request;

use aliyun\sdk\services\Cloudwf\CloudwfCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setApModelId($ApModelId)
 * @method integer getApModelId()
 * @method $this setImgAddr($ImgAddr)
 * @method string getImgAddr()
 * @method $this setImgVersion($ImgVersion)
 * @method string getImgVersion()
 * @method $this setComment($Comment)
 * @method string getComment()
 */
final class SetUpgradeImgByModel extends CloudwfCommon
{
    public $action = 'SetUpgradeImgByModel';
}
