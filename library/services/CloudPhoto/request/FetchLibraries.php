<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setPage($Page)
 * @method integer getPage()
 * @method $this setSize($Size)
 * @method integer getSize()
 */
final class FetchLibraries extends CloudPhotoCommon
{
    public $action = 'FetchLibraries';
}
