<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 * @method $this setPhotoId($PhotoId)
 * @method array getPhotoId()
 */
final class DeletePhotos extends CloudPhotoCommon
{
    public $action = 'DeletePhotos';
}
