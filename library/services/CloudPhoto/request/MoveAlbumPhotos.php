<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setSourceAlbumId($SourceAlbumId)
 * @method integer getSourceAlbumId()
 * @method $this setPhotoId($PhotoId)
 * @method array getPhotoId()
 * @method $this setTargetAlbumId($TargetAlbumId)
 * @method integer getTargetAlbumId()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class MoveAlbumPhotos extends CloudPhotoCommon
{
    public $action = 'MoveAlbumPhotos';
}
