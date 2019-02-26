<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setState($State)
 * @method string getState()
 * @method $this setOrderBy($OrderBy)
 * @method string getOrderBy()
 * @method $this setOrder($Order)
 * @method string getOrder()
 * @method $this setSize($Size)
 * @method integer getSize()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class FetchPhotos extends CloudPhotoCommon
{
    public $action = 'FetchPhotos';
}
