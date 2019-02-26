<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setCoverURL($CoverURL)
 * @method string getCoverURL()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setFileName($FileName)
 * @method string getFileName()
 * @method $this setFileSize($FileSize)
 * @method integer getFileSize()
 * @method $this setIP($IP)
 * @method string getIP()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setCateId($CateId)
 * @method integer getCateId()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setTranscodeMode($TranscodeMode)
 * @method string getTranscodeMode()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 * @method $this setTemplateGroupId($TemplateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setWorkflowId($WorkflowId)
 * @method string getWorkflowId()
 * @method $this setStorageLocation($StorageLocation)
 * @method string getStorageLocation()
 */
final class CreateUploadVideo extends VodCommon
{
    public $action = 'CreateUploadVideo';
}
