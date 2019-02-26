<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setSize($Size)
 * @method integer getSize()
 * @method $this setKeyword($Keyword)
 * @method string getKeyword()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class SearchPhotos extends CloudPhotoCommon
{
    public $action = 'SearchPhotos';
}
