<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setFaceId($FaceId)
 * @method integer getFaceId()
 * @method $this setPhotoId($PhotoId)
 * @method array getPhotoId()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class RemoveFacePhotos extends CloudPhotoCommon
{
    public $action = 'RemoveFacePhotos';
}
