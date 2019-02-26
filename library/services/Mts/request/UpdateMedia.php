<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setMediaId($MediaId)
 * @method string getMediaId()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setCoverURL($CoverURL)
 * @method string getCoverURL()
 * @method $this setCateId($CateId)
 * @method integer getCateId()
 * @method $this setTags($Tags)
 * @method string getTags()
 */
final class UpdateMedia extends MtsCommon
{
    public $action = 'UpdateMedia';
}
