<?php
namespace aliyun\sdk\services\CloudPhoto\request;

use aliyun\sdk\services\CloudPhoto\CloudPhotoCommon;

/**
 * @method $this setSize($Size)
 * @method integer getSize()
 * @method $this setExt($Ext)
 * @method string getExt()
 * @method $this setForce($Force)
 * @method string getForce()
 * @method $this setMd5($Md5)
 * @method string getMd5()
 * @method $this setStoreName($StoreName)
 * @method string getStoreName()
 * @method $this setLibraryId($LibraryId)
 * @method string getLibraryId()
 */
final class CreateTransaction extends CloudPhotoCommon
{
    public $action = 'CreateTransaction';
}
