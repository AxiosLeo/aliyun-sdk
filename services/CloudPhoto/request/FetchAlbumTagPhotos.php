<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setAlbumId($AlbumId)
 * @method integer getAlbumId()
 * @method $this setTagId($TagId)
 * @method integer getTagId()
 * @method $this setSize($Size)
 * @method integer getSize()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class FetchAlbumTagPhotos extends CloudPhotoCommon
{
    public $action = 'FetchAlbumTagPhotos';
}
