<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setTitle($Title)
 * @method string getTitle()
 * @method $this setImageType($ImageType)
 * @method string getImageType()
 * @method $this setImageExt($ImageExt)
 * @method string getImageExt()
 * @method $this setOriginalFileName($OriginalFileName)
 * @method string getOriginalFileName()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setStorageLocation($StorageLocation)
 * @method string getStorageLocation()
 * @method $this setCateId($CateId)
 * @method integer getCateId()
 * @method $this setUserData($UserData)
 * @method string getUserData()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class CreateUploadImage extends VodCommon
{
    public $action = 'CreateUploadImage';
}
