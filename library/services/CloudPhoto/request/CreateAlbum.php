<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setAlbumName($AlbumName)
 * @method string getAlbumName()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setRemark($Remark)
 * @method string getRemark()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class CreateAlbum extends CloudPhotoCommon
{
    public $action = 'CreateAlbum';
}
