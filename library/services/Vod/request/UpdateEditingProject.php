<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setProjectId($ProjectId)
 * @method string getProjectId()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setTimeline($Timeline)
 * @method string getTimeline()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setCoverURL($CoverURL)
 * @method string getCoverURL()
 */
final class UpdateEditingProject extends VodCommon
{
    public $action = 'UpdateEditingProject';
}
