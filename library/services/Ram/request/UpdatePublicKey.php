<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setUserPublicKeyId($UserPublicKeyId)
 * @method string getUserPublicKeyId()
 * @method $this setStatus($Status)
 * @method string getStatus()
 */
final class UpdatePublicKey extends RamCommon
{
    public $action = 'UpdatePublicKey';
}
