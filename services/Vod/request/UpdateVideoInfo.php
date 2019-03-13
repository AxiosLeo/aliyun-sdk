<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setVideoId($VideoId)
 * @method string getVideoId()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setCoverURL($CoverURL)
 * @method string getCoverURL()
 * @method $this setCateId($CateId)
 * @method integer getCateId()
 */
final class UpdateVideoInfo extends VodCommon
{
    public $action = 'UpdateVideoInfo';
}
