<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaIds($MediaIds)
 * @method string getMediaIds()
 */
final class DeleteMedia extends MtsCommon
{
    public $action = 'DeleteMedia';
}
