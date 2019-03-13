<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setAlbumId($AlbumId)
 * @method integer getAlbumId()
 * @method $this setPhotoId($PhotoId)
 * @method integer getPhotoId()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class SetAlbumCover extends CloudPhotoCommon
{
    public $action = 'SetAlbumCover';
}
