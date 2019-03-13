<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setUploadURLs($UploadURLs)
 * @method string getUploadURLs()
 * @method $this setTemplateGroupId($TemplateGroupId)
 * @method string getTemplateGroupId()
 * @method $this setStorageLocation($StorageLocation)
 * @method string getStorageLocation()
 * @method $this setUploadMetadatas($UploadMetadatas)
 * @method string getUploadMetadatas()
 * @method $this setPriority($Priority)
 * @method string getPriority()
 * @method $this setMessageCallback($MessageCallback)
 * @method string getMessageCallback()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class UploadMediaByURL extends VodCommon
{
    public $action = 'UploadMediaByURL';
}
