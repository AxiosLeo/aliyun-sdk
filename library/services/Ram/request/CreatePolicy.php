<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setPolicyName($PolicyName)
 * @method string getPolicyName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setPolicyDocument($PolicyDocument)
 * @method string getPolicyDocument()
 */
final class CreatePolicy extends RamCommon
{
    public $action = 'CreatePolicy';
}
