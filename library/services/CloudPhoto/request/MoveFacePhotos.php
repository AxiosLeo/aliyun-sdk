<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setSourceFaceId($SourceFaceId)
 * @method integer getSourceFaceId()
 * @method $this setPhotoId($PhotoId)
 * @method array getPhotoId()
 * @method $this setTargetFaceId($TargetFaceId)
 * @method integer getTargetFaceId()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class MoveFacePhotos extends CloudPhotoCommon
{
    public $action = 'MoveFacePhotos';
}
