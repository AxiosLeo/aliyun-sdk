<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setPhotoId($PhotoId)
 * @method array getPhotoId()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 * @method $this setInactiveTime($InactiveTime)
 * @method integer getInactiveTime()
 */
final class InactivatePhotos extends CloudPhotoCommon
{
    public $action = 'InactivatePhotos';
}
