<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setFaceId($FaceId)
 * @method array getFaceId()
 * @method $this setTargetFaceId($TargetFaceId)
 * @method integer getTargetFaceId()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class MergeFaces extends CloudPhotoCommon
{
    public $action = 'MergeFaces';
}
