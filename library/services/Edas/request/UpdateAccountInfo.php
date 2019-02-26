<?php
namespace aliyun\sdk\services\Edas\request;

use aliyun\sdk\services\Edas\EdasCommon;

/**
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setTelephone($Telephone)
 * @method string getTelephone()
 * @method $this setEmail($Email)
 * @method string getEmail()
 */
final class UpdateAccountInfo extends EdasCommon
{
    public $action = 'UpdateAccountInfo';
}
