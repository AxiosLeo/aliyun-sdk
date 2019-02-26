<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setData($Data)
 * @method string getData()
 */
final class GetPackage extends MtsCommon
{
    public $action = 'GetPackage';
}
