<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setFaceId($FaceId)
 * @method integer getFaceId()
 * @method $this setFaceName($FaceName)
 * @method string getFaceName()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class RenameFace extends CloudPhotoCommon
{
    public $action = 'RenameFace';
}
