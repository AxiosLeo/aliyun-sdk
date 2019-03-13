<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setBusinessType($BusinessType)
 * @method string getBusinessType()
 * @method $this setMediaExt($MediaExt)
 * @method string getMediaExt()
 * @method $this setFileName($FileName)
 * @method string getFileName()
 * @method $this setFileSize($FileSize)
 * @method string getFileSize()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setCateId($CateId)
 * @method integer getCateId()
 * @method $this setStorageLocation($StorageLocation)
 * @method string getStorageLocation()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 */
final class CreateUploadAttachedMedia extends VodCommon
{
    public $action = 'CreateUploadAttachedMedia';
}
