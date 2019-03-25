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
 * @method $this setDownloadSwitch($DownloadSwitch)
 * @method string getDownloadSwitch()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setCustomMediaInfo($CustomMediaInfo)
 * @method string getCustomMediaInfo()
 */
final class UpdateVideoInfo extends VodCommon
{
    public $action = 'UpdateVideoInfo';
}
