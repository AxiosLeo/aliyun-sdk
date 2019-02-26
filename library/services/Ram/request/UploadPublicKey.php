<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setPublicKeySpec($PublicKeySpec)
 * @method string getPublicKeySpec()
 */
final class UploadPublicKey extends RamCommon
{
    public $action = 'UploadPublicKey';
}
