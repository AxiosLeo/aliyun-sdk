<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setMediaURL($MediaURL)
 * @method string getMediaURL()
 * @method $this setMediaType($MediaType)
 * @method string getMediaType()
 * @method $this setMediaSequences($MediaSequences)
 * @method string getMediaSequences()
 */
final class AddMediaSequences extends VodCommon
{
    public $action = 'AddMediaSequences';
}
