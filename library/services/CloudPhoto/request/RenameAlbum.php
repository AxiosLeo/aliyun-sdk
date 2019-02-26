<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setAlbumId($AlbumId)
 * @method integer getAlbumId()
 * @method $this setAlbumName($AlbumName)
 * @method string getAlbumName()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class RenameAlbum extends CloudPhotoCommon
{
    public $action = 'RenameAlbum';
}
