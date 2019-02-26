<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setTag($Tag)
 * @method string getTag()
 */
final class AddMediaTag extends MtsCommon
{
    public $action = 'AddMediaTag';
}
