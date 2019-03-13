<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setFileName($FileName)
 * @method string getFileName()
 * @method $this setShouldEncrypt($ShouldEncrypt)
 * @method boolean getShouldEncrypt()
 * @method $this setEncryptType($EncryptType)
 * @method integer getEncryptType()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 */
final class QueryDeviceFileVod extends IotCommon
{
    public $action = 'QueryDeviceFileVod';
}
