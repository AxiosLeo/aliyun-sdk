<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setMd5($Md5)
 * @method array getMd5()
 * @method $this setState($State)
 * @method string getState()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class GetPhotosByMd5s extends CloudPhotoCommon
{
    public $action = 'GetPhotosByMd5s';
}
