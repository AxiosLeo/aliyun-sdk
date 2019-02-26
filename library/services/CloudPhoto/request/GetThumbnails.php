<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setPhotoId($PhotoId)
 * @method array getPhotoId()
 * @method $this setZoomType($ZoomType)
 * @method string getZoomType()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class GetThumbnails extends CloudPhotoCommon
{
    public $action = 'GetThumbnails';
}
