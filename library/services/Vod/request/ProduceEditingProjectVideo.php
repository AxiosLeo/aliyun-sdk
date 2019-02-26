<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setTimeline($Timeline)
 * @method string getTimeline()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setCoverURL($CoverURL)
 * @method string getCoverURL()
 * @method $this setMediaMetadata($MediaMetadata)
 * @method string getMediaMetadata()
 * @method $this setProduceConfig($ProduceConfig)
 * @method string getProduceConfig()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class ProduceEditingProjectVideo extends VodCommon
{
    public $action = 'ProduceEditingProjectVideo';
}
