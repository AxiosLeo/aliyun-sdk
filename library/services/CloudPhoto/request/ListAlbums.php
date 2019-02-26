<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setDirection($Direction)
 * @method string getDirection()
 * @method $this setSize($Size)
 * @method integer getSize()
 * @method $this setCursor($Cursor)
 * @method string getCursor()
 * @method $this setState($State)
 * @method string getState()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class ListAlbums extends CloudPhotoCommon
{
    public $action = 'ListAlbums';
}
