<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setPublish($Publish)
 * @method boolean getPublish()
 */
final class UpdateMediaPublishState extends MtsCommon
{
    public $action = 'UpdateMediaPublishState';
}
