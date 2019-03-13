<?php
namespace aliyun\sdk\services\Mts\request;

use aliyun\sdk\services\Mts\MtsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setKey1($Key1)
 * @method string getKey1()
 * @method $this setKey2($Key2)
 * @method string getKey2()
 */
final class SetAuthConfig extends MtsCommon
{
    public $action = 'SetAuthConfig';
}
