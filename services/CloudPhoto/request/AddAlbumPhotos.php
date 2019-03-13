<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setAlbumId($AlbumId)
 * @method integer getAlbumId()
 * @method $this setPhotoId($PhotoId)
 * @method array getPhotoId()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class AddAlbumPhotos extends CloudPhotoCommon
{
    public $action = 'AddAlbumPhotos';
}
